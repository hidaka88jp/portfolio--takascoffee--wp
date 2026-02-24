/*
site-menu animation
================================================ */
const menuBtn = document.getElementById('menu-btn');
const siteMenu = document.querySelector('.header__site-menu');

if (menuBtn && siteMenu) {
  menuBtn.addEventListener('click', () => {
    const isOpen = siteMenu.classList.toggle('is-open');
    menuBtn.setAttribute('aria-expanded', isOpen);
  });
}
