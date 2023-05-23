<?php
// get the current page
$uri = $_SERVER["REQUEST_URI"];
// get the path
$uri = parse_url($uri, PHP_URL_PATH);
// get the base
$base = "/Tayam_Certifico/";

$routes = [
    $base => [
        "title" => "Home",
        "view" => "home.php"
    ],
    $base . "login" => [
        "title" => "Login",
        "view" => "login.php"
    ],
    $base . "login_script.php" => [
        "view" => "partials/login_script.php"
    ],
    $base . "signup" => [
        "title" => "Signup",
        "view" => "signup.php"
    ],
    $base . "signup_script.php" => [
        "view" => "partials/signup_script.php"
    ],
    $base . "logout.php" => [
        "view" => "partials/logout.php"
    ],

    $base . "about" => [
        "title" => "About",
        "view" => "about.php"
    ],
    $base . "about-diogenes" => [
        "title" => "About Diogenes",
        "view" => "aboutp2.php"
    ],
    $base . "about-jeddy" => [
        "title" => "About Jeddy",
        "view" => "aboutp3.php"
    ],
    $base . "services" => [
        "title" => "Services",
        "view" => "services.php"
    ],
    $base . "works" => [
        "title" => "Works",
        "view" => "works.php"
    ],
    $base . "contact" => [
        "title" => "Contact",
        "view" => "contact.php"
    ]
];

if (array_key_exists($uri, $routes)) {
    $route = $routes[$uri];
    if (array_key_exists("title", $route)) {
        $title = $route["title"];
    }
    require "views/" . $route["view"];
} else {
    http_response_code(404);
    $title = "404";
    require "views/404.php";
}
