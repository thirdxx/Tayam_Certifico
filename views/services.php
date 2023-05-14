<?php
$css = "services.css";
require "partials/header.php";
?>

<!-- HEADER -->
<header class="l-header">
  <nav class="nav bd-grid">
    <div>
      <a href="./" class="nav__logo">Portfolio</a>
    </div>

    <div class="nav__menu" id="nav-menu">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="./" class="nav__link">Home</a>
        </li>
        <li class="nav__item">
          <a href="./about" class="nav__link">About</a>
        </li>
        <li class="nav__item">
          <a href="./services" class="nav__link active">Services</a>
        </li>
        <li class="nav__item">
          <a href="./works" class="nav__link">Work</a>
        </li>
        <li class="nav__item">
          <a href="./contact" class="nav__link">Contact</a>
        </li>
      </ul>
    </div>

    <div class="nav__toggle" id="nav-toggle">
      <i class="bx bx-menu"></i>
    </div>
  </nav>
</header>

<div id="card">
  <h1>Services</h1>
  <div class="image-crop">
    <img id="avatar" src="./resources/img/diogenespic.png" alt="Diogenes Tayam"></img>
  </div>
  <div id="bio">
    <div id="texts">
      <p class="text"> Photography<br>
        I am sufficient in photography. I capture stunning portraits and also loves to captures the beauty of the nature.<br><br>
      <p class="text"> Layouting<br>
        I am knowledgeable in layouting. I create your imagination into reality.<br><br>
      <p class="text"> Photo & Video Editing<br>
        Photo & video editing is my passion. I make photos and videos more stunning to the eyes and creative.<br><br>
      <p class="text"> Front-end Web Development<br>
        I am also sufficient in front-end web development.<br><br>
      </p>
      </p>
      </p>
      </p>
      </p>
      <div id="buttons">
        <button onclick="location.href = './works';" class="button1">My works</button>
      </div>
    </div>
  </div>
</div>
<div id="card2">
  <h2>Services</h2>
  <div class="image-crop2">
    <img id="avatar" src="./resources/img/jeddypic.png" alt="Jeddy Certifico"></img>
  </div>
  <div id="bio">
    <p class="text2">Web Development<br>
      I am a sufficient in various programming languages such as JavaScript, PHP, HTML, CSS, and also I am knowledgable in C, Python, and Java prhramming languages.<br><br>
    </p>
    <div id="buttons">
      <button onclick="location.href = './works';" class="button2">My works</button>
    </div>
  </div>
</div>
</div>
</main>

<?php require "partials/footer.php"; ?>