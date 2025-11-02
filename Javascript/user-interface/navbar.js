document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar-main-container");
  const navLinks = document.querySelectorAll(".nav-links a");

  // ===== Add Active Class Based on Current Page =====
  const currentPage = window.location.pathname.split("/").pop(); // e.g. "about.php"

  navLinks.forEach(link => {
    const linkPage = link.getAttribute("href").split("/").pop(); // e.g. "about.php"

    if (currentPage === linkPage) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });

  // ===== Hide/Show Navbar on Scroll =====
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
