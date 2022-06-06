<?php include 'inc/header.php'; ?>

<h2 class="display-4" style="color: #4A4866;">Carol Tawaify</h2>
<h3 class="lead text-center" style="color: #98b2e6;">Full Stack Junior Developer</h3>
<br>
<div class="text">
  <h4 class="lead bg-light" style="color: #4A4866;"> 
    <?php
      date_default_timezone_set('Asia/Beirut');

      $j = date("H");

      if ($j < 12) {
        echo "Good Morning" . '<br>';
      } elseif ($j >= 12 & $j < 17) {
        echo "Good Afternoon" . '<br>';
      } else {
        echo "Good Evening" . '<br>';
      }
    ?>
  </h4>
  <br>
  <p class="bg-light" style="color: #4A4866;">
    <strong>
      Summary:
    </strong>
  </p>

  <!-- <p className="bg-light "> I'm a multi-talented person.</p> -->
  <p >I'm Carol, 25 years old female with a Syrian citizenship, I studied web develoment at MEC-Horizons.</p>
  <p >I'm also a multi-disciplinary maker with over 5 years of experiences in wide rang of design disciplines, manager, advisor, front-end developer, music enthusiast,traveler, photographer and more.</p>
  <br>
  <p class="bg-light" style="color: #4A4866;">
    <strong>
      Skill Highlights:
    </strong>
  </p>
  <ul>
    <li>Project management</li>
    <li>Creative design</li>
    <li>Service focused</li>
    <li>Complex problem solver</li>
  </ul>
  <br>
  <p class="bg-light" style="color: #4A4866;">
    <strong>
      Work experience:
    </strong>
  <ul>
  <li>
  Assistant Manager at XO Stores, Damascus, Syria from 08.2019 to 12.2019
  <ul>
      <li>
      Supervising the staff and reporting on sales progress.
      </li>
      <li>
      Maintain Customer service standards.
      </li>
  </ul>
  </li>
  </ul>
  <ul>
  <li>
  Cashier at Coin Market, Antelias & Awkar, Lebanon  01.2019 to 08.2019
  <ul>
      <li>
      Cashier.
      </li>
      <li>
      Customer Service.
      </li>
  </ul>
  </li>
  </ul>
  <ul>
  <li>
  Secretariat (Part time)
 at The Road Office (General Services), Burj Hammoud, Lebanon 
  03.2017 to 01.2019
  <ul>
      <li>
      Executive Secretariat.
      </li>
      <li>
      Preparing Immigration Applications.
      </li>
      <li>
      Dealing with Clients.
      </li>
  </ul>
  </li>
  </ul>
  <ul>
  <li>
  Secretariat 
  at Al-Adib Office for Sworn Translation, Damascus, Syria
  01.2015 to 03.2017
  <ul>
      <li>
      Executive Secretariat.
      </li>
      <li>
      Preparing Immigration Applications.
      </li>
      <li>
      Dealing with Clients.
      </li>
  </ul>
  </li>
  </ul>
  <ul>
  <li>
  Pattern Designer (Part time) at Masotti Company, Damascus, Syria  02.2016 to 03.2017
  <ul>
      <li>
      Assistant of the Head of Designing Department.
      </li>
      <li>
      Entering and modifying patterns through Gerber Technology.
      </li>
  </ul>
  </li>
  </ul>
  </p>
  <br>
  <p class="bg-light" style="color: #4A4866;">
    <strong>
    Education:
    </strong>
  <ul>
  <li>
  Business Management 
 at Syrian Virtual University (SVU)
 from 11.2018 to Present.
  </li>
  <li>
  Baccalaureate Scientific Section, with a percentage of 83%  
  07.2014.
  </li>
  </ul>
  </p>
  <br>
  <p class="bg-light" style="color: #4A4866;">
    <strong>
    Courses:
    </strong>
  <ul>
  <li>
  Pattern Design 
 at Union Institute, Damascus, Syria
 10.2019.
  </li>
  <li>
  Office Management (ICDL – Accounting Al-Ameen – correspondence – Organization – Communication - Enterprise)

  IECD Center, Damascus, Syria 
  07.2016.
  </li>
  </ul>
  </p>
</div>

<?php include 'inc/footer.php'; ?>