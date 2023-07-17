export function mobileMenu() {

  // Open mobile menu on button click for mobile
  let showMenu = false;
  const mobileMenu = document.querySelector('.mobileMenu');
  const menuSvg = document.querySelector('.menuButton svg');
  function toggleMenu(isActive) {

    // Add/remove class to elements and update of SVG to display menu is opened/closed
    if (isActive) {
      document
        .querySelectorAll('body, .mobileMenu, .menuButton, .sm_nav')
        .forEach((e) => {
          e.classList.add('show');
        });
      menuSvg.innerHTML =
        '<path d="M3 5h18M3 12h18M3 19h18" stroke="#000" stroke-linecap="round" stroke-linejoin="round"/>';
    } else {
      document
        .querySelectorAll('body, .mobileMenu, .menuButton, .sm_nav')
        .forEach((e) => {
          e.classList.remove('show');
        });
      menuSvg.innerHTML = `
      <path d="M3 5h8m-8 7h13M3 19h18" stroke="#000" stroke-linecap="round" stroke-linejoin="round"/>`;
    }
  }

  document
    .querySelector('.menuButton')
    .addEventListener('click', () => {
      showMenu = !showMenu;
      toggleMenu(showMenu);
    });
}
