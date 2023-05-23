<style>
    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        text-align: center;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 10px;
        z-index: 1;
        left: 0;

    }

    .dropdown-menu li {
        list-style-type: none;
        margin: 5px 0;
    }

    .dropdown-menu li a {
        text-decoration: none;
        color: #333;
    }

    .dropdown-menu li a:hover {
        background: linear-gradient(to right, blue, #00ff00);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: #fff;
    }

    .nav__toggle:hover .dropdown-menu {
        display: block;
        left: 100%;
        transform: translateX(-100%);
    }
</style>
<nav class="nav bd-grid">
    <div>
        <a href="./" class="nav__logo text-decoration-none">DJ Portfolio</a>
    </div>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="./" class="nav__link text-decoration-none ">Home</a>
            </li>
            <li class="nav__item">
                <a href="./about" class="nav__link text-decoration-none">About</a>
            </li>
            <li class="nav__item">
                <a href="./services" class="nav__link text-decoration-none ">Services</a>
            </li>
            <li class="nav__item">
                <a href="./works" class="nav__link text-decoration-none">Work</a>
            </li>
            <li class="nav__item">
                <a href="./contact" class="nav__link text-decoration-none  ">Contact</a>
            </li>
            <i class="nav__item">
                <i style="font-size:20px" class="nav__link text-decoration-none fa fa-sign-out" onclick="location.href='logout.php'"></i>
            </i>
        </ul>
    </div>

    <div class="nav__toggle" id="nav-toggle">
        <i class="bx bx-menu"></i>
        <ul class="dropdown-menu">
            <li><a href="./">Home</a></li>
            <li><a href="./about">About</a></li>
            <li><a href="./services">Services</a></li>
            <li><a href="./works">Works</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>
    </div>
</nav>

<script src="./resources/js/script.js"></script>