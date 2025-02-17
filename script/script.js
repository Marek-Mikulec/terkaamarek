/**************** Header ****************/

/** Scrolování úvodní obrazovky **/

window.addEventListener("scroll", function() {
    let scrolled = window.scrollY;
    let offset = scrolled * 0.8;
    document.querySelector("header").style.backgroundPosition = `center calc(50% + ${offset}px)`;
});

/** Scrolování listů **/

window.addEventListener("scroll", function() {
    let scrollY = window.scrollY; // Aktuální pozice scrollu

    document.querySelector(".left").style.transform = `translateY(${-scrollY * 0.2}px)`;
    document.querySelector(".right").style.transform = `translateY(${-scrollY * 0.3}px)`;
});

/**************** tlačítka, odstranit hover */

document.querySelectorAll('nav ul li a').forEach(button => {
    button.addEventListener('touchend', () => {
        button.blur();
    });
});

/**************** Formulář ****************/

/** Formulář input phone a mezery mezi čísla  **/

const phoneInput = document.getElementById('form-phone');

phoneInput.addEventListener('input', () => {
    let value = phoneInput.value.replace(/\D/g, ''); // Povolit pouze čísla
    if (value.length > 3 && value.length <= 6) {
        value = `${value.slice(0, 3)} ${value.slice(3)}`;
    } else if (value.length > 6) {
        value = `${value.slice(0, 3)} ${value.slice(3, 6)} ${value.slice(6, 9)}`;
    }
    phoneInput.value = value;
});