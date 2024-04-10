window.addEventListener('scroll', () => {
    document.querySelector("header").classList.toggle('sticky', window.scrollY > 0);
});

document.querySelector(".toggle").addEventListener('click', () => {
    let menu = document.querySelector(".toggle");
    let navbar = document.querySelector(".navbar");
    menu.classList.toggle("menu--open");
    navbar.classList.toggle("menu--open");
});
