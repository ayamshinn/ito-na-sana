document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar-main-container");
  if (!navbar) return;

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("hide");
      navbar.classList.remove("show");
    } else {
      navbar.classList.add("show");
      navbar.classList.remove("hide");
    }
  });
});
