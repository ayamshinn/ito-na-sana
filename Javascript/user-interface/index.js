document.addEventListener("DOMContentLoaded", () => {
    const backdrop = document.querySelector(".hero-banner-backdrop");
    const overlay = document.querySelector(".hero-banner-overlay");
  
    if (!backdrop || !overlay) return;
  
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        backdrop.classList.add("active");
        overlay.classList.add("dimmed");
      } else {
        backdrop.classList.remove("active");
        overlay.classList.remove("dimmed");
      }
    });
  });
  