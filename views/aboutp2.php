<?php
$css = "aboutp2.css";
require "partials/header.php";
?>

<!-- HEADER -->
<header class="l-header">
  <?php require "partials/nav.php"; ?>
</header>

<div class="card-container">
  <div id="card">
    <h1>Personal Information</h1>
    <div class="image-crop">
      <img id="avatar" src="./resources/img/diogenespic.png" alt="diogenes profile pic"></img>
    </div>
    <div id="bio">
      <div id="texts">
        <p>
          <b>Name:</b> Diogenes Araojo Tayam III<br>
          <b>Birthday:</b> June 27, 2003 <br>
          <b>Age:</b> 19<br>
          <b>Phone#:</b> 09184913812<br>
          <b>Hometown:</b> Osiao, Bacon, Sorsogon City<br>
          <b>School:</b> Bicol University<br>
          <b>Course:</b> Bachelor of Science in Information Technology<br>
          <b>Email:</b> diogenesiiiaraojo.tayam@bicol-u.edu.ph<br>
        </p>
      </div>
    </div>
  </div>
  <div id="card2">
    <h1>Education</h1>
    <div id="bio">
      <p class="text"> Tertiary Level<br>
        Bachelor of Science in Information Technology<br>
        Bicol University College of Science<br>
        2021-Present<br><br></p>
      <p class="text"> Secondary Level - Senior High School<br>
        Osiao Paglingap National High School<br>
        With Honors<br>
        2019-2021<br><br></p>
      <p class="text"> Secondary Level - Senior High School<br>
        Osiao Paglingap National High School<br>
        With Honors<br>
        2016-2019<br><br></p>
      <p class="text">Elementary Level<br>
        Osiao Paglingap Elementary School<br>
        2010-2016<br>
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
          <div class="skill-percent" style="width: 75%"></div>
        </div>
        <div class="skill-percent-number">70%</div>
      </div>
      <div class="skill">
        <div class="skill-name">Java</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 75%"></div>
        </div>
        <div class="skill-percent-number">75%</div>
      </div>
      <div class="skill">
        <div class="skill-name">Photography</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 95%"></div>
        </div>
        <div class="skill-percent-number">95%</div>
      </div>
      <div class="skill">
        <div class="skill-name">Photo & Video Editing</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 95%"></div>
        </div>
        <div class="skill-percent-number">95%</div>
      </div>
      <div class="skill">
        <div class="skill-name">Layouting</div>
        <div class="skill-level">
          <div class="skill-percent" style="width: 85%"></div>
        </div>
        <div class="skill-percent-number">85%</div>
      </div>
    </div>
    <div id="buttons">
      <button onclick="location.href = './about';" class="button1">Back</button>
    </div>
  </div>
</div>
</div>
</div>
</main>

<?php require "partials/footer.php"; ?>