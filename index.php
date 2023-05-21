<?php

require "function.php";

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri, PHP_URL_PATH);

// dd($uri);


$base = "/Tayam_Certifico/";

switch ($uri) {
    case $base:
        $title = "Home";
        require "views/home.php";
        break;
    case $base . "login":
        $title = "Login";
        require "views/login.php";
        break;
    case $base . "login_script.php":
        require "views/login_script.php";
        break;
    case $base . "logout.php":
        require "views/logout.php";
        break;
    case $base . "about":
        $title = "About";
        require "views/about.php";
        break;
    case $base . "services":
        $title = "Services";
        require "views/services.php";
        break;
    case $base . "works":
        $title = "Works";
        require "views/works.php";
        break;
    case $base . "contact":
        $title = "Contact";
        require "views/contact.php";
        break;
    default:
        $title = "404";
        require "views/404.php";
        break;
}
