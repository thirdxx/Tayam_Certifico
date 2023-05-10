<?php
$css = "styles.css";
require "partials/header.php";
?>

<!-- HEADER -->
<header class="l-header">
    <?php require "partials/nav.php"; ?>
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
        </div>
    </section>
</main>

<?php require "partials/footer.php"; ?>