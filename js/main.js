const navSlide = () => {
  const hamburger = document.getElementsByClassName('hamburger')[0];
  const navList = document.getElementsByClassName('nav-list')[0];
  const navLinks = document.querySelectorAll('.nav-link');

  hamburger.addEventListener('click', () => {
    navList.classList.toggle('active');

    navLinks.forEach((link, i) => {
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = `navLinkFade 500ms ease forwards 
            ${i / 4 + 0.2}s`;
      }
    });
    hamburger.classList.toggle('toggle');
  });
};

navSlide();
