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
      <div class="footer__social">
        <a href="https://www.facebook.com/bunso.tayam" class="footer__icon"><i class="bx bxl-facebook" style="font-size: 30px; background-color:gray; border-radius: 50px; margin-left:10px"></i></a>
        <a href="https://github.com/thirdxx" class="footer__icon"><i class="bx bxl-github" style="font-size: 30px; background-color:gray; border-radius: 50px; margin-right: 10px"></i></a>
      </div>
    </div>

    <div id="card_j">
      <h2>Get in touch <br> with me</h2>
      <div id="bio2">
        <p class="text2" style="margin-top: 30px">Phone#: 09319830206<br><br>Email:<br>jeddycolon.certifico@bicol-u.edu.ph</p>
      </div>
      <div class="footer__social"><br>
        <a href="https://www.facebook.com/jeddy.certifico.WDS" class="footer__icon"><i class="bx bxl-facebook" style="font-size: 30px; background-color:gray; border-radius: 50px;float: right; margin-right: 30px; margin-top: 10px;"></i></a>
        <a href="https://github.com/JeddyCertifico" class="footer__icon"><i class="bx bxl-github" style="font-size: 30px; background-color:gray; border-radius: 50px; float: right; margin-right: 30px; margin-top: 10px;"></i></a>
      </div>
      <div>
      </div>
    </div>
  </div>

  <li class="form__item">
    <p class="log">Let's talk</p><br>
  </li>
  <p class="ptext">We would love to hear from you.</p>
  <style>
    .error {
      background: #f2dede;
      color: #a94442;
      padding: 10px;
      width: 34%;
      border-radius: 5px;
      margin: 20px auto;
    }
  </style>
  <?php
  $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
  parse_str($query, $params);
  if (isset($params['error'])) { ?>
    <p class="error"><?php echo $params['error']; ?></p>
  <?php } ?>
  <form class="f1" method="post" action="./send_email.php">
    <div>
      <div class="input">
        <input required name="name" class="name text-capitalize" type="text" placeholder="Name" value="<?php echo $_SESSION['user_name'] ?>" />
        <input required name="email" class="email" type="email" placeholder="Email" value="<?php echo $_SESSION['user_email'] ?>" />
        <input required name="message" class="message" type="text" placeholder="Message" />
      </div>
      <div id="buttons">
        <button type="submit" class="sendbutton" alt="send button">Send</button>
      </div>
      <?php $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
      parse_str($query, $params);
      if (isset($params['success'])) { ?>
        <script>
          $(document).ready(function() {
            $(".modal").modal("show");
          });
        </script>
      <?php } ?>
    </div>
  </form>
  </div>
  </div>

  <div class="modal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hello <span class="text-capitalize"><?php echo $_SESSION['user_name'] ?></span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Thank you for contacting us.</p>
        </div>
      </div>
    </div>
  </div>

  </main>
  <?php require "partials/footer.php"; ?>


<?php
} else {
  header("Location: ./login");
  exit();
}
