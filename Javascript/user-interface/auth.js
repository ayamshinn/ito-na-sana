document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById('container');
  const registerBtn = document.getElementById('Sign Up');
  const loginBtn = document.getElementById('Sign In');
  const adminBtn = document.getElementById('adminLoginBtn');
  const adminContainer = document.getElementById('adminContainer');
  const modal = document.getElementById('authentication-modal-container-id');
  const openModalBtn = document.querySelector('.btn-signin');
  const closeModalBtn = document.getElementById('closeModal');

  // ✅ Show modal (SIGN IN button)
  openModalBtn?.addEventListener('click', (e) => {
    e.preventDefault();
    modal.style.display = 'flex';
    document.body.classList.add('modal-open');
  });

  // ✅ Close modal (X button)
  closeModalBtn?.addEventListener('click', () => {
    modal.style.display = 'none';
    container.classList.remove('active');
    adminContainer.classList.remove('active');
    document.body.classList.remove('modal-open');
  });

  // ✅ Background click closes modal
  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
      container.classList.remove('active');
      adminContainer.classList.remove('active');
      document.body.classList.remove('modal-open');
    }
  });

  // ✅ Toggle to Sign Up
  registerBtn?.addEventListener('click', () => {
    container.classList.add('active');
    adminContainer.classList.remove('active');
  });

  // ✅ Toggle to Sign In
  loginBtn?.addEventListener('click', () => {
    container.classList.remove('active');
    adminContainer.classList.remove('active');
  });

  // ✅ Admin login toggle
  adminBtn?.addEventListener('click', () => {
    adminContainer.classList.add('active');
    container.classList.remove('active');
  });

  // ✅ Admin back button handler
  window.goBack = function () {
    adminContainer.classList.remove('active');
  };
});
