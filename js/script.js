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

  const dino = document.querySelector(".dino-animation");
  const section = document.querySelector(".reading-game-section");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            dino.classList.add("visible");
          }, 800);
          observer.unobserve(section);
        }
      });
    },
    { threshold: 0.5 }
  );

  observer.observe(section);
});
