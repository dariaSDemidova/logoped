//Header burger menu
const burger = document.querySelector('.header__burger');
const nav = document.querySelector('.header__nav');
const navLinks = document.querySelectorAll('.header__nav-list a');

function closeMenu() {
  burger.classList.remove('open');
  nav.classList.remove('open');
}

function getHeaderHeight() {
  const headerWrapper = document.querySelector('.header__wrapper');
  return headerWrapper ? headerWrapper.offsetHeight : 0;
}

burger.addEventListener('click', () => {
  burger.classList.toggle('open');
  nav.classList.toggle('open');
});

navLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    if (window.innerWidth <= 1024) {
      e.preventDefault();

      const targetId = link.getAttribute('href').slice(1);
      const targetEl = document.getElementById(targetId);
      if (!targetEl) return;

      const headerHeight = getHeaderHeight();
      const topPos = targetEl.offsetTop - headerHeight;

      window.scrollTo({
        top: topPos,
        behavior: 'smooth'
      });

      closeMenu();
    }
  });
});

// Закрытие при клике вне меню
document.addEventListener('mousedown', (e) => {
  if (!nav.contains(e.target) && !burger.contains(e.target)) {
    closeMenu();
  }
});


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
