/* Header burger menu */
const burger = document.querySelector(".header__burger");
const navList = document.querySelector(".header__nav-list");
const navLinks = document.querySelectorAll(".header__nav-list a");

// Клик по бургеру
burger.addEventListener("click", () => {
  burger.classList.toggle("open");
  navList.classList.toggle("open");
});

// Клик по любой ссылке меню
navLinks.forEach(link => {
  link.addEventListener("click", () => {
    burger.classList.remove("open");
    navList.classList.remove("open");
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
