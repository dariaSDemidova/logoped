const burger = document.querySelector('.header__burger');
const navList = document.querySelector('.header__nav-list');
const header = document.querySelector('.header');
const navLinks = document.querySelectorAll('.header__nav-list a');

function setMenuTop() {
  // нижняя грань хедера в координатах вьюпорта
  const { bottom } = header.getBoundingClientRect();
  navList.style.top = `${Math.round(bottom)}px`;
}

function closeMenu() {
  header.classList.remove('header--menu-open');
  navList.classList.remove('open');
  burger.classList.remove('open');
  document.body.classList.remove('menu-open');
  burger.setAttribute('aria-expanded', 'false');
}

burger.addEventListener('click', () => {
  const isOpen = header.classList.toggle('header--menu-open');
  navList.classList.toggle('open');
  burger.classList.toggle('open');
  burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

  if (isOpen) {
    setMenuTop();                 // <-- ключевое: выставляем точный top
    document.body.classList.add('menu-open');
  } else {
    document.body.classList.remove('menu-open');
  }
});

// при клике по ссылке — закрываем
navLinks.forEach(link => link.addEventListener('click', closeMenu));

// при ресайзе/скролле, если меню открыто, обновляем top,
// чтобы не появлялась белая щель
['resize','scroll'].forEach(evt => {
  window.addEventListener(evt, () => {
    if (header.classList.contains('header--menu-open')) setMenuTop();
  });
});



document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("privacy-modal");
  const openBtn = document.querySelector(".open-modal");
  const closeBtn = modal.querySelector(".close-modal");

  openBtn.addEventListener("click", (e) => {
    e.preventDefault();
    modal.style.display = "flex";
  });

  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
});
