document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar-main-container");
  const signinBtn = document.querySelector(".btn-signin");
  const modal = document.getElementById("authentication-modal-container-id");
  const container = document.getElementById("container");
  const adminContainer = document.getElementById("adminContainer");
  const registerBtn = document.getElementById("Sign Up");
  const loginBtn = document.getElementById("Sign In");
  const adminBtn = document.getElementById("adminLoginBtn");
  const closeModalBtn = document.getElementById("closeModal");

  // === 🧭 Navbar scroll effect ===
  if (navbar) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.classList.add("hide");
        navbar.classList.remove("show");
      } else {
        navbar.classList.add("show");
        navbar.classList.remove("hide");
      }
    });
  }

  // === 🔐 Auth modal controls ===
  if (signinBtn && modal) {
    signinBtn.addEventListener("click", (e) => {
      e.preventDefault();
      modal.style.display = "flex";
      document.body.classList.add("modal-open");
    });
  }

  if (closeModalBtn && modal) {
    closeModalBtn.addEventListener("click", () => {
      modal.style.display = "none";
      container?.classList.remove("active");
      adminContainer?.classList.remove("active");
      document.body.classList.remove("modal-open");
    });
  }

  // Background click closes modal
  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.style.display = "none";
      container?.classList.remove("active");
      adminContainer?.classList.remove("active");
      document.body.classList.remove("modal-open");
    }
  });

  // Switch between Sign Up, Sign In, Admin forms
  registerBtn?.addEventListener("click", () => {
    container.classList.add("active");
    adminContainer.classList.remove("active");
  });

  loginBtn?.addEventListener("click", () => {
    container.classList.remove("active");
    adminContainer.classList.remove("active");
  });

  adminBtn?.addEventListener("click", () => {
    adminContainer.classList.add("active");
    container.classList.remove("active");
  });

  window.goBack = function () {
    adminContainer.classList.remove("active");
  };
});
