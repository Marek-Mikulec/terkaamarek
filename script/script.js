/**************** Header ****************/

/** Scrolování úvodní obrazovky **/

window.addEventListener('scroll', function() {
    let scrolled = window.scrollY;
    let offset = scrolled * 0.8;
    document.querySelector('header').style.backgroundPosition = `center calc(50% + ${offset}px)`;
});

/**************** Formulář ****************/

/** Formulář input phone **/

const phoneInput = document.getElementById('phone');

phoneInput.addEventListener('input', function() {
  // Povolit pouze číslice
  phoneInput.value = phoneInput.value.replace(/\D/g, '');
  // Zabránit zadání více než 9 číslic
  if (phoneInput.value.length > 9) {
    phoneInput.value = phoneInput.value.slice(0, 9);
  }
});