<?php

// require "autoload.php";

$uri = $_SERVER["REQUEST_URI"];

switch ($uri) {
    case "/":
        $title = "Home";
        require "views/home.php";
        break;
    case "/about":
        $title = "About";
        require "views/about.php";
        break;
    case "/services":
        $title = "Services";
        require "views/services.php";
        break;
    case "/works":
        $title = "Works";
        require "views/works.php";
        break;
    case "/contact":
        $title = "Contact";
        require "views/contact.php";
        break;
    default:
        $title = "404";
        require "views/404.php";
        break;
}

// require "views/index.php";
