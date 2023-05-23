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
  <form class="f1" method="post" action="./send_email.php">
    <div>
      <div class="input">
        <input required name="name" class="name" type="text" placeholder="Name" value="" />
        <input required name="email" class="email" type="email" placeholder="Email" value="" />
        <input required name="message" class="message" type="text" placeholder="Message" />
      </div>
      <div id="buttons">
        <button type="submit" class="sendbutton" alt="send button">Send</button>
      </div>

      <?php $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
      parse_str($query, $params);
      if (isset($params['success'])) { ?>
        <p class="success"><?php echo $params['success']; ?></p>
        <div class="modal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <script>
          $(document).ready(function() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
          });
        </script>
      <?php } ?>
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
