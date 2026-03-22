/*
site-menu animation
================================================ */
const menuBtn = document.getElementById('menu-btn');
const siteMenu = document.querySelector('.header__site-menu');
const overlay = document.querySelector('.overlay');

if (menuBtn && siteMenu && overlay) {
  menuBtn.addEventListener('click', () => {
    const isOpen = siteMenu.classList.toggle('is-open');
    overlay.classList.toggle('is-open');
    menuBtn.setAttribute('aria-expanded', isOpen);
  });

  overlay.addEventListener('click', () => {
    siteMenu.classList.remove('is-open');
    overlay.classList.remove('is-open');
    menuBtn.setAttribute('aria-expanded', false);
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
      siteMenu.classList.remove('is-open');
      overlay.classList.remove('is-open');
      document.body.classList.remove('is-menu-open');
    }
  });
}
