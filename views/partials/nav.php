<nav class="nav bd-grid">
    <div>
        <a href="./" class="nav__logo">Portfolio</a>
    </div>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="./" class="nav__link">Home</a>
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
            <i style="font-size:24px" class="fa">&#xf08b;</i>
        </ul>
    </div>

    <div class="nav__toggle" id="nav-toggle">
        <i class="bx bx-menu"></i>
    </div>
</nav>

<script>
    $(document).ready(() => {
        const activePage = window.location.pathname;
        const navLinks = $('.nav__link').toArray();

        if (activePage === '/Tayam_Certifico/') {
            $(navLinks[0]).addClass('active');
        } else {
            navLinks.forEach((link) => {
                if (link.href.includes(activePage)) {
                    $(link).addClass('active');
                }
            });
        }
    });
</script>