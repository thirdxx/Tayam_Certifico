<?php
$css = "login.css";
require "partials/header.php";
?>
<div class="main">
  <div class="circle">
    <i class="fas fa-user"></i>
  </div>
  <p class="log" align="center">User Login</p>
  <form class="f1" action="login_script.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <input class="usern" type="text" align="center" placeholder="Username" name="uname" />
    <input class="pass" type="password" align="center" placeholder="Password" name="password" />
    <button class="send" type="submit" align="center">Login</button>
  </form>
</div>