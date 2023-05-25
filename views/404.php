<?php
session_start();
$css = "styles.css";
require "partials/header.php";
?>
<!-- HEADER -->
<header class="l-header">
    <?php require "partials/nav.php"; ?>
</header>

<div class="container d-grid" style="min-height: 100vh; place-items:center">
    <div class=" text-center">
        <h1 class="fw-bolder">404</h1>
        <h1 class="fw-bold">Page not found.</h1>
    </div>
</div>

<?php require "partials/footer.php"; ?>