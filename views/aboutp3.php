<?php
$css = "aboutp3.css";
require "partials/header.php";
?>

<!-- HEADER -->
<header class="l-header">
  <?php require "partials/nav.php"; ?>
</header>

<!--===== ABOUT =====-->
<!-- <li class="cards__item"> -->
<div class="card-container">
  <div id="card">
    <h1>Personal Information</h1>
    <div class="image-crop">
      <img id="avatar" src="./resources/img/jeddypic.png" alt="jeddy profile pic"></img>
    </div>
    <div id="bio">
      <div id="texts">
        <p>
          <b>Name:</b> Jeddy Certifico<br />
          <b>Birthday:</b> December 25, 2001 <br />
          <b>Age:</b> 21<br />
          <b>Phone#:</b> 09319820206<br />
          <b>Hometown:</b> Dimasalang, Masbate<br />
          <b>School:</b> Bicol University<br />
          <b>Course:</b> Bachelor of Science in Information Technology<br />
          <b>Email:</b> jeddycolon.certifico@bicol-u.edu.ph<br />
        </p>
      </div>
    </div>
  </div>
  <div id="card2">
    <h1>Education</h1>
    <div id="bio">
      <p class="text">
        Tertiary Level<br />
        Bachelor of Science in Information Technology<br />
        Bicol University College of Science<br />
        2021-Present<br /><br />
      </p>
      <p class="text">
        Secondary Level - Senior High School<br />
        Cataingan National High School<br />
        With Honors<br />
        2019-2021<br /><br />
      </p>
      <p class="text">
        Secondary Level - Senior High School<br />
        Dimasalang National High School<br />
        With High Honors<br />
        2016-2019<br /><br />
      </p>
      <p class="text">
        Elementary Level<br />
        Dimasalang Central School<br />
        2010-2016<br />
      </p>
    </div>
  </div>
</div>
<div id="card3">
  <h1>Skills</h1>
  <div id="bio">
    <div class="body">
      <div class="skill">
        <div class="skill-name">HTML</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 90%"></div>
        </div>
        <div class="skill-percent-number">90%</div>
      </div>
      <div class="skill">
        <div class="skill-name">CSS</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 80%"></div>
        </div>
        <div class="skill-percent-number">80%</div>
      </div>
      <div class="skill">
        <div class="skill-name">JavaScript</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 90%"></div>
        </div>
        <div class="skill-percent-number">90%</div>
      </div>
      <div class="skill">
        <div class="skill-name">Java</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 95%"></div>
        </div>
        <div class="skill-percent-number">95%</div>
      </div>
      <div class="skill">
        <div class="skill-name">Python</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 95%"></div>
        </div>
        <div class="skill-percent-number">95%</div>
      </div>
      <div class="skill">
        <div class="skill-name">C</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 100%"></div>
        </div>
        <div class="skill-percent-number">100%</div>
      </div>
      </button>
      <div id="buttons">
        <button onclick="location.href = './about';" class="button2">Back</button>
      </div>
    </div>
  </div>
</div>
</main>

<?php require "partials/footer.php"; ?>