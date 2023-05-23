<?php
session_start();
$css = "about.css";
require "partials/header.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

  <!-- HEADER -->
  <header class="l-header">
    <?php require "partials/nav.php"; ?>
  </header>

  <!-- ABOUT -->

  <div class="card-container">
    <div id="card">
      <h2>Diogenes Tayam</h2>
      <div class="image-crop">
        <img id="avatar" src="./resources/img/diogenespic.png" alt="diogenes profile pic"></img>
      </div>
      <div id="bio">
        <p class="text">Hello, my name is Diogenes! I am a Photographer, Photo and Video Editor, and I am sufficient in layouting, HTML & CSS. I make everyone's dream into reality. </p><br>

        <div id="buttons">
          <button onclick="location.href = './about-diogenes'" class="button1">Discover</button>
        </div>
      </div>
    </div>
    <div id="card_j">
      <h3>Jeddy Certifico</h3>
      <div class="image-crop2">
        <img id="avatar" src="./resources/img/jeddypic.png" alt="jeddy profile pic"></img>
      </div>
      <div id="bio">
        <p class="text2">Hello, my name is Jeddy! I am sufficient in programming languages such as Java, Python, C, C++, HTML/CSS, JavaScript and more. I make solutions that works best.</p><br>

        <div id="buttons">
          <button onclick="location.href = './about-jeddy'" class="button2">Discover</button>
        </div>
      </div>
    </div>
  </div>
  </main>

  <?php require "partials/footer.php"; ?>

<?php
} else {
  header("Location: ./login");
}
