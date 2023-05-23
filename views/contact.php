<?php
session_start();
$css = "contact.css";
require "partials/header.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

  <!-- HEADER -->
  <header class="l-header">
    <?php require "partials/nav.php"; ?>
  </header>


  <div class="image-crop">
    <img class="img-fluid" id="avatar" src="./resources/img/contactus2.png" alt="contactus img">
  </div>
  <div class="card-container">
    <div id="card">
      <h1>Get in touch <br>with me</h1>
      <div id="bio">
        <p class="text">Phone#: 09184913812<br><br> Email:<br>diogenesiiiaraojo.tayam@bicol-u.edu.ph</p>
      </div>
    </div>

    <div id="card_j">
      <h2>Get in touch <br> with me</h2>
      <div id="bio2">
        <p class="text2">Phone#: 09319830206<br><br>Email:<br>jeddycolon.certifico@bicol-u.edu.ph</p>
      </div>
      <div>
      </div>
    </div>
  </div>

  <li class="form__item">
    <p class="log">Let's <span>talk</span></p><br>
  </li>
  <p class="ptext">We would love to hear from you.</p>
  <form class="f1">
    <div>
      <div class="input">
        <input class="name" type="text" placeholder="Name" />
        <input class="email" type="email" placeholder="Email" />
        <input class="message" type="text" placeholder="Message" />
      </div>

      <div id="buttons">
        <button class="sendbutton" alt="send button">Send</button>
      </div>
    </div>
  </form>
  </div>
  </div>
  </main>

  <?php require "partials/footer.php"; ?>

<?php
} else {
  header("Location: ./login");
  exit();
}
