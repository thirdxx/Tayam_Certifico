<?php
$css = "styles.css";
require "partials/header.php";
?>

<!-- HEADER -->
<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <a href="./" class="nav__logo">Portfolio</a>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="./index" class="nav__link active">Home</a>
                </li>
                <li class="nav__item">
                    <a href="./about" class="nav__link">About</a>
                </li>
                <li class="nav__item">
                    <a href="./services" class="nav__link">Services</a>
                </li>
                <li class="nav__item">
                    <a href="./works" class="nav__link">Work</a>
                </li>
                <li class="nav__item">
                    <a href="./contact" class="nav__link">Contact</a>
                </li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="bx bx-menu"></i>
        </div>
    </nav>
</header>

<main class="l-main">
    <!--HOME-->
    <section class="home bd-grid" id="home">
        <div class="home__data">
            <h1 class="home__title">
                Explore our skills<br />
                and know everything<br />
                <span class="home__title-color">about us</span><br />
            </h1>
            <div class="button-container">
                <button onclick="location.href = './about'" class="button">
                    Explore now
                </button>
            </div>
            <div class="home__img">
                <img src="./resources/img/homepic1.png" alt="profile" />
            </div>
        </div>
    </section>
</main>

<?php require "partials/footer.php"; ?>