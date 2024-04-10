function mobileNav() {
  // Mobile nav button
  const navBtn = document.querySelector('.mobile-nav-btn');
  const nav = document.querySelector('.mobile-nav');
  const mobBtn = document.querySelector('.mobile__close');
  const navOverlay = document.querySelector('.mobile__nav-overlay');

  navOverlay.onclick = toggleMobileNav;
  navBtn.onclick = toggleMobileNav;
  mobBtn.onclick = toggleMobileNav;


  function toggleMobileNav() {
    document.body.classList.toggle('no-scroll');
    nav.classList.toggle('mobile-nav--open');
    navOverlay.classList.toggle('mobile-nav-overlay--open');
  }

}

export default mobileNav;



