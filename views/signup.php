<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    header("Location: ./");
    exit();
}
$css = "signup.css";
require "partials/header.php";
?>
<div class="main">
    <div class="circle">
        <i class="fas fa-user"></i>
    </div>
    <p class="log" align="center">Sign up</p>
    <p class="mt-5 text-center ">Already have an account? <a href="./login" class="text-decoration-none">Login</a>.</p>
    <form class="form" action="./signup_script.php" method="post">
        <?php
        $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        parse_str($query, $params);
        if (isset($params['error'])) { ?>
            <style>
                .main {
                    height: 600px;
                }
            </style>
            <p class="error"><?php echo $params['error']; ?></p>
        <?php } ?>
        <input required class="usern mb-3" type="text" align="center" placeholder="Username" name="uname" />
        <input required class="usern mb-3" type="email" align="center" placeholder="email" name="uemail" />
        <input required class="pass mb-3" type="password" align="center" placeholder="Password" name="password" />
        <input required class="pass" type="password" align="center" placeholder="Confirm Password" name="confirmpassword" />
        <button class="send" name="submit" type="submit" align="center">Sign up</button>
    </form>
</div>