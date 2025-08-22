// Бургер меню
const burger = document.querySelector('.header__burger');
const navList = document.querySelector('.header__nav-list');
const header = document.querySelector('.header');
const navLinks = document.querySelectorAll('.header__nav-list a');

function closeMenu() {
  header.classList.remove('header--menu-open');
  navList.classList.remove('open');
  burger.classList.remove('open');
  burger.setAttribute('aria-expanded', 'false');
}

burger.addEventListener('click', () => {
  const isOpen = header.classList.toggle('header--menu-open');
  navList.classList.toggle('open');
  burger.classList.toggle('open');
  burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
});

// при клике по ссылке меню закрываем
navLinks.forEach(link => link.addEventListener('click', closeMenu));


document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("privacy-modal");
  const openBtn = document.querySelector(".open-modal");
  const closeBtn = modal.querySelector(".close-modal");

  const disableScroll = () => (document.body.style.overflow = "hidden");
  const enableScroll = () => (document.body.style.overflow = "");

  openBtn.addEventListener("click", (e) => {
    e.preventDefault();
    modal.style.display = "flex";
    disableScroll();
  });

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
    enableScroll();
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
      enableScroll();
    }
  });

  const dino = document.querySelector(".dino-animation");
  const section = document.querySelector(".reading-game-section");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            dino.classList.add("visible");
          }, 500);
          observer.unobserve(section);
        }
      });
    },
    { threshold: 0.5 }
  );

  observer.observe(section);
});
