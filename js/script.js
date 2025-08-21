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

  const swiper = new Swiper('.reviews-swiper', {
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: '.my-button-next',
    prevEl: '.my-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

});
