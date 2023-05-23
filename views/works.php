<?php
$css = "works.css";
require "partials/header.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

  <!-- HEADER -->
  <header class="l-header">
    <?php require "partials/nav.php"; ?>
  </header>
  <main>

    <!-- WORKS -->
    <section class="work section" id="work">
      <h2 class="section-title">Diogenes Tayam</h2>

      <div class="work__container bd-grid">
        <div class="work__img">
          <img src="./resources/img/pic1.jpg" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/pic7.jpeg" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/pic8.jpeg" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/pic10.jpg" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/pic9.jpeg" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/pic11.jpg" alt="" />
        </div>
      </div>
    </section>
    <section class="work section" id="work">
      <h3 class="section-title2">Jeddy Certifico</h3>

      <div class="work__container bd-grid">
        <div class="work__img">
          <img src="./resources/img/jed1.png" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/jed2.png" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/jed3.png" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/jed5.png" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/jed6.png" alt="" />
        </div>
        <div class="work__img">
          <img src="./resources/img/jeddyc.png" alt="" />
        </div>
      </div>
      <div id="buttons">
        <button onclick="location.href = './services';" class="button1">Back</button>
      </div>
    </section>
  </main>

  <?php require "partials/footer.php"; ?>

<?php
} else {
  header("Location: ./login");
  exit();
}
