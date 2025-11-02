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


document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById('authentication-modal-container-id');
  const container = document.getElementById('container');

  // ✅ If login or admin login failed, auto-show modal
  if (window.location.search.includes('auth=failed') || window.location.search.includes('error')) {
    modal.style.display = 'flex';
    document.body.classList.add('modal-open');
  }

  // ✅ After successful registration → show login form
  if (window.location.search.includes('registered=1')) {
    modal.style.display = 'flex';
    document.body.classList.add('modal-open');
    container.classList.remove('active');  // Make sure Sign In is visible, not Sign Up
  }
  if (window.location.search.includes('signup=error')) {
    modal.style.display = 'flex';
    document.body.classList.add('modal-open');
    container.classList.add('active'); // ✅ Show Sign Up form
  }
  
});
