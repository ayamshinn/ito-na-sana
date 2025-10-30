document.addEventListener("DOMContentLoaded", () => {
    // --- Date display ---
    const dateElement = document.getElementById("today-date");
    if (dateElement) {
        const today = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = today.toLocaleDateString('en-US', options);
        dateElement.textContent = formattedDate;
    }

    // --- Sidebar toggle ---
    const patientSidebarContainer = document.getElementById('sidebar-container');
    const mainContentContainer = document.querySelector('.main-content-area-container');
    const topbar = document.getElementById('topbar');

    const toggleButtons = document.querySelectorAll('.toggle, .toggle-sidebar');
    toggleButtons.forEach(button => {
        button.addEventListener('click', () => {
            patientSidebarContainer.classList.toggle('active');
            mainContentContainer.classList.toggle('active');
            topbar.classList.toggle('active');
        });
    });

    // --- Sidebar active link highlight ---
    const sidebarButtons = document.querySelectorAll('.btn-sidebar');

    sidebarButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active from all buttons
            sidebarButtons.forEach(btn => btn.classList.remove('active'));

            // Add active to clicked one
            button.classList.add('active');
        });
    });

    // --- (Optional) Keep active based on page URL ---
    sidebarButtons.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });
});
