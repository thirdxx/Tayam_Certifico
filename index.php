<?php

$uri = $_SERVER["REQUEST_URI"];

$base = "/Tayam_Certifico/";

switch ($uri) {
    case $base:
        $title = "Home";
        require "views/home.php";
        break;
    case $base . "about":
        $title = "About";
        require "views/about.php";
        break;
    case $base . "about-diogenes":
        $title = "About";
        require "views/aboutp2.php";
        break;
    case $base . "about-jeddy":
        $title = "About";
        require "views/aboutp3.php";
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
