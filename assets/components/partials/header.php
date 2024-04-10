<header>
    <a href='/ProjektopgaveM-belpolstren/'><img src='./assets/images/logo.webp' class='navbar-image' alt=''></a>
    <div class='toggle'></div>
    <ul class='navbar'>
        <li class='navbar__link nav-link'><a href='/ProjektopgaveM-belpolstren/index.php'>Hjem</a></li>
        <li class='navbar__link nav-link'><a href='/ProjektopgaveM-belpolstren/priceCalculator.php'>Prisberegner</a></li>
        <li class='navbar__link nav-link'><a href='/ProjektopgaveM-belpolstren/beforeAfterImage.php'>FørEfterBilleder</a></li>
    </ul>
</header>

<script>
    document.querySelector(".toggle").addEventListener('click', () => {
        let menu = document.querySelector(".toggle");
        let navbar = document.querySelector(".navbar");
        menu.classList.toggle("menu--open");
        navbar.classList.toggle("menu--open");
    });
</script>