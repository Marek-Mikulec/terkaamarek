/**************** Header ****************/

/** Scrolování úvodní obrazovky **/

window.addEventListener('scroll', function() {
    let scrolled = window.scrollY;
    let offset = scrolled * 0.8;
    document.querySelector('header').style.backgroundPosition = `center calc(50% + ${offset}px)`;
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

/** Formulář input vyplněn alespoň jeden údaj **/

const form = document.getElementById("formular-layout");

form.addEventListener("submit", function(event) {
    const email = document.getElementById("form-email").value.trim();
    const phone = document.getElementById("form-phone").value.trim();

    if (!email && !phone) {
        event.preventDefault(); // Zabraň odeslání formuláře
        alert("Vyplňte prosím alespoň e-mail nebo telefonní číslo.");
    }
});
