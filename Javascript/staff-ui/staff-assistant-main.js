// ===================== MAIN JS =====================
document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.content-area');

  // ===== Function to load a page (reusable) =====
  window.loadPage = function (pageUrl, addToHistory = true)  {
    fetch(pageUrl)
      .then(res => res.text())
      .then(html => {
        container.innerHTML = html;

        if (pageUrl.includes("dashboard")) document.title = "Staff Portal - Dashboard";
        else if (pageUrl.includes("appointments")) document.title = "Staff Portal - Appointments";
        else if (pageUrl.includes("help")) document.title = "Staff Portal - Help";
        else if (pageUrl.includes("account")) document.title = "Staff Portal - My Account";
        else if (pageUrl.includes("records")) document.title = "Staff Portal - Patient Record";
        else if (pageUrl.includes("messages")) document.title = "Staff Portal - Messages";
        else if (pageUrl.includes("inventory")) document.title = "Staff Portal - Inventory Management";


        else document.title = "Staff Portal";
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

  const initialPage = location.hash ? location.hash.substring(1) : '../../PHP/staff-ui/staff-assistant-subfolder/staff-assistant-dashboard.php';
  loadPage(initialPage, false); // Don't add first load to history
  window.addEventListener("popstate", (event) => {
    if (event.state && event.state.pageUrl) {
      loadPage(event.state.pageUrl, false); // false = don’t re-push into history
    } else {
      // If no state, fallback to default page
      loadPage('../../PHP/staff-ui/staff-assistant-subfolder/staff-assistant-dashboard.php', false);
    }
  });
});


// ===================== PAGE SCRIPT INITIALIZER =====================
function initPageScript(pageUrl) {
  if (pageUrl.includes('staff-assistant-my-account.php')) {
    if (typeof initStaffAssistantMyAccountPage === 'function') {
      initStaffAssistantMyAccountPage();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-my-account.js';
      script.defer = true;
      script.onload = () => initStaffAssistantMyAccountPage();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-assistant-dashboard.php')) {
    if (typeof initStaffAssistantDashboard === 'function') {
      initStaffAssistantDashboard();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-dashboard.js';
      script.defer = true;
      script.onload = () => initStaffAssistantDashboard();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-assistant-patient-records.php')) {
    if (typeof initStaffAssistantPatientRecords === 'function') {
      initStaffAssistantPatientRecords();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-patient-records.js';
      script.defer = true;
      script.onload = () => initStaffAssistantPatientRecords();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('staff-assistant-appointments.php')) {
    if (typeof initStaffAssistantAppointments === 'function') {
      initStaffAssistantAppointments ();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-appointments.js';
      script.defer = true;
      script.onload = () => initStaffAssistantAppointments ();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-assistant-messages.php')) {
    if (typeof initStaffAssistantMessages === 'function') {
      initStaffAssistantMessages();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-messages.js';
      script.defer = true;
      script.onload = () => initStaffAssistantMessages();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('staff-assistant-inventory-management.php')) {
    if (typeof initStaffAssistantInventoryManagement === 'function') {
      initStaffAssistantInventoryManagement();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-inventory-management.js';
      script.defer = true;
      script.onload = () => initStaffAssistantInventoryManagement();
      document.body.appendChild(script);
    }
  }
  
  if (pageUrl.includes('staff-assistant-help.php')) {
    if (typeof initStaffAssistantHelp === 'function') {
      initStaffAssistantHelp();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-help.js';
      script.defer = true;
      script.onload = () => initStaffAssistantHelp();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('staff-assistant-patient-records-detailed.php')) {
    if (typeof initStaffAssistantPatientRecordsDetailed === 'function') {
      initStaffAssistantPatientRecordsDetailed();
    } else {
        const script = document.createElement('script');
        script.src = '../../Javascript/staff-ui/staff-assistant-subfolder/staff-assistant-patient-records-detailed.js';
        script.defer = true;
        script.onload = () => initStaffAssistantPatientRecordsDetailed();
        document.body.appendChild(script);
    }
}


}


