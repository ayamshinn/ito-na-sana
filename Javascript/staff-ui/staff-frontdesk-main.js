// ===================== MAIN JS =====================
document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.content-area');

  // ===== Function to load a page (reusable) =====
  window.loadPage = function (pageUrl, addToHistory = true)  {
    fetch(pageUrl)
      .then(res => res.text())
      .then(html => {
        container.innerHTML = html;

        if (pageUrl.includes("dashboard")) document.title = "Frontdesk Portal - Dashboard";
        else if (pageUrl.includes("appointments")) document.title = "Frontdesk Portal - Appointments";
        else if (pageUrl.includes("help")) document.title = "Frontdesk Portal - Help";
        else if (pageUrl.includes("account")) document.title = "Frontdesk Portal - My Account";
        else if (pageUrl.includes("records")) document.title = "Frontdesk Portal - Patient Record";
        else if (pageUrl.includes("messages")) document.title = "Frontdesk Portal - Messages";
        else if (pageUrl.includes("inventory")) document.title = "Frontdesk Portal - Inventory Management";


        else document.title = "Frontdesk Portal";
        if (addToHistory) {
          history.pushState({ pageUrl }, "", `#${pageUrl}`);
        }
        // ✅ Always reset scroll to top
        window.scrollTo(0, 0);
        const contentArea = document.querySelector('.main-content-area-container');
        if (contentArea) contentArea.scrollTop = 0;

        // ✅ Initialize the page logic after it's inserted
        initPageScript(pageUrl);
      })
      .catch(err => console.error('Error loading page:', err));
  }

  // ===== Attach click events to all sidebar links =====
  document.querySelectorAll('a[data-page]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault(); 
      const pageUrl = link.getAttribute('data-page');
      loadPage(pageUrl);
    });
  });

  const initialPage = location.hash ? location.hash.substring(1) : '../../PHP/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-dashboard.php';
  loadPage(initialPage, false); // Don't add first load to history
  window.addEventListener("popstate", (event) => {
    if (event.state && event.state.pageUrl) {
      loadPage(event.state.pageUrl, false); // false = don’t re-push into history
    } else {
      // If no state, fallback to default page
      loadPage('../../PHP/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-dashboard.php', false);
    }
  });
});


// ===================== PAGE SCRIPT INITIALIZER =====================
function initPageScript(pageUrl) {
  if (pageUrl.includes('staff-frontdesk-my-account.php')) {
    if (typeof initStaffFrontDeskMyAccountPage === 'function') {
      initStaffFrontDeskMyAccountPage();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-my-account.js';
      script.defer = true;
      script.onload = () => initStaffFrontDeskMyAccountPage();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-frontdesk-dashboard.php')) {
    if (typeof initStaffFrontDeskDashboard === 'function') {
      initStaffFrontDeskDashboard();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-dashboard.js';
      script.defer = true;
      script.onload = () => initStaffFrontDeskDashboard();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-frontdesk-patient-records.php')) {
    if (typeof initStaffFrontDeskPatientRecords === 'function') {
      initStaffFrontDeskPatientRecords();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-patient-records.js';
      script.defer = true;
      script.onload = () => initStaffFrontDeskPatientRecords();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('staff-frontdesk-appointments.php')) {
    if (typeof initStaffFrontDeskAppointments === 'function') {
      initStaffFrontDeskAppointments ();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-appointments.js';
      script.defer = true;
      script.onload = () => initStaffFrontDeskAppointments ();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-frontdesk-messages.php')) {
    if (typeof initStaffFrontDeskMessages === 'function') {
      initStaffFrontDeskMessages();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-messages.js';
      script.defer = true;
      script.onload = () => initStaffFrontDeskMessages();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-frontdesk-inventory-management.php')) {
    if (typeof initStaffFrontDeskInventoryManagement === 'function') {
      initStaffFrontDeskInventoryManagement();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-inventory-management.js';
      script.defer = true;
      script.onload = () => initStaffFrontDeskInventoryManagement();
      document.body.appendChild(script);
    }
  }
  
  if (pageUrl.includes('staff-frontdesk-help.php')) {
    if (typeof initStaffFrontDeskHelp === 'function') {
      initStaffFrontDeskHelp();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-help.js';
      script.defer = true;
      script.onload = () => initStaffFrontDeskHelp();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('staff-frontdesk-patient-records-detailed.php')) {
    if (typeof initStaffFrontDeskPatientRecordsDetailed === 'function') {
      initStaffFrontDeskPatientRecordsDetailed();
    } else {
        const script = document.createElement('script');
        script.src = '../../Javascript/staff-ui/staff-frontdesk-subfolder/staff-frontdesk-patient-records-detailed.js';
        script.defer = true;
        script.onload = () => initStaffFrontDeskPatientRecordsDetailed();
        document.body.appendChild(script);
    }
}

}


