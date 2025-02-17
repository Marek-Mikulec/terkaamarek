/**************** Header ****************/

/** Scrolování úvodní obrazovky **/

window.addEventListener("scroll", function() {
    let scrolled = window.scrollY;
    let aspectRatio = window.innerWidth / window.innerHeight;
    let offset;
    
    if (aspectRatio < 1) {
        offset = scrolled * 0.1;
    } else {
        offset = scrolled * 1.05;
    }

    document.querySelector("header").style.backgroundPosition = `center calc(50% + ${offset}px)`;
});

/** Scrolování header boxu **/

window.addEventListener("scroll", function() {
    let scrolled = window.scrollY; 
    let aspectRatio = window.innerWidth / window.innerHeight;
    let offset = aspectRatio < 1 ? scrolled * 0.2 : scrolled * 0.12;

    document.querySelector("#header-box").style.transform = `translate(-50%, calc(-50% + ${offset}px))`;
});

/** Scrolování listů **/

window.addEventListener("scroll", function() {
    let scrollY = window.scrollY;

    document.querySelector(".left").style.transform = `translateY(${-scrollY * 0.2}px)`;
    document.querySelector(".right").style.transform = `translateY(${-scrollY * 0.3}px)`;
});

/*** Stejná výška headeru na mobilu  **/

function setHeaderHeight() {
    document.querySelector("header").style.height = `${window.innerHeight}px`;
}

window.addEventListener("resize", setHeaderHeight);
setHeaderHeight(); // Nastaví výšku při načtení

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