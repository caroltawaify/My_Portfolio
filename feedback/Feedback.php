<?php include 'inc/header.php'; ?>

<?php
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

//Form submit
if (isset($_POST['submit'])) {

  // Validate name
  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_input(
      INPUT_POST,
      'name',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }

  // Validate name
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(
      INPUT_POST,
      'email',
      FILTER_SANITIZE_EMAIL
    );
  }

  // Validate body
  if (empty($_POST['body'])) {
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_input(
      INPUT_POST,
      'body',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }

  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
    // Add to database
    $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

    if (mysqli_query($conn, $sql)) {
      //Success
      header('Location: pastfeedback.php');
    } else {
      //Error
      echo 'Error:' . mysqli_error($conn);
    }
  }
}

?>

<h2 style="color: #4A4866;">Feedback</h2>
<p style="color: #98b2e6;" class="lead text-center">Leave feedback about me</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="mt-4 w-75">
  <div class="form-floating mb-3">
    <input type="text" name="name" value="<?php echo $name ?>" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" placeholder="Enter your name">
    <label style="color: #4A4866;" for="name">Name</label>
    <div class="invalid-feedback">
      <?php echo $nameErr; ?>
    </div>

  </div>
  <div class="form-floating mb-3">
    <input type="email" name="email" value="<?php echo $email ?>" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" placeholder="Enter your email">
    <label style="color: #4A4866;" for="email">Email</label>
    <div class="invalid-feedback">
      <?php echo $emailErr; ?>
    </div>

  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback"><?php echo htmlspecialchars($body) ?></textarea>
    <label style="color: #4A4866;" for="floatingInput">Feedback</label>
    <div class="invalid-feedback">
      <?php echo $bodyErr; ?>
    </div>
    <br>
    <div class="mb-3">
      <input type="submit" name="submit" value="Send" class="btn btn-secondary w-100">
    </div>
</form>
<?php include 'inc/footer.php'; ?>