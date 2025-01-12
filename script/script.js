window.addEventListener('scroll', function() {
    let scrolled = window.scrollY;
    let offset = scrolled * 0.3;
    document.querySelector('header').style.backgroundPosition = `center calc(50% + ${offset}px)`;
});