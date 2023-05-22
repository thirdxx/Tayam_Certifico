<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  header("Location: ./");
  exit();
}
$css = "login.css";
require "partials/header.php";
?>
<div class="main">
  <div class="circle">
    <i class="fas fa-user"></i>
  </div>
  <p class="log" align="center">Login</p>
  <p class="mt-5 text-center ">New Here? <a href="./signup" class="text-decoration-none">Create an account</a>.</p>
  <form class="form" action="./login_script.php" method="post">
    <?php
    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
    parse_str($query, $params);
    if (isset($params['error'])) { ?>
      <p class="error"><?php echo $params['error']; ?></p>
    <?php } ?>
    <input class="usern" type="text" align="center" placeholder="Username" name="uname" />
    <input class="pass" type="password" align="center" placeholder="Password" name="password" />
    <button class="send" type="submit" align="center">Login</button>
  </form>
</div>