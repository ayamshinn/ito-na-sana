// ===================== MAIN JS =====================
document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.content-area');

  // ===== Function to load a page (reusable) =====
  window.loadPage = function (pageUrl, addToHistory = true)  {
    fetch(pageUrl)
      .then(res => res.text())
      .then(html => {
        container.innerHTML = html;
        

        if (pageUrl.includes("dashboard")) document.title = "Dentist Portal - Dashboard";
        else if (pageUrl.includes("appointments")) document.title = "Dentist Portal - Appointments";
        else if (pageUrl.includes("record")) document.title = "Dentist Portal - Patient Information Record";
        else if (pageUrl.includes("account")) document.title = "Dentist Portal - My account";
        else if (pageUrl.includes("messages")) document.title = "Dentist Portal - Messages";
        else if (pageUrl.includes("treatment")) document.title = "Dentist Portal - Treatment History";
        else if (pageUrl.includes("appointment-report")) document.title = "Dentist Portal - Appointment Reports";
        else if (pageUrl.includes("help")) document.title = "Dentist Portal - Help";

        else document.title = "Patient Portal";
        // ✅ Add to browser history if required
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


  const initialPage = location.hash ? location.hash.substring(1) : '../../PHP/dentist-ui/dentist-subfolder/dentist-dashboard.php';
    loadPage(initialPage, false); // Don't add first load to history
    // ✅ Handle browser Back/Forward buttons
    window.addEventListener("popstate", (event) => {
      if (event.state && event.state.pageUrl) {
        loadPage(event.state.pageUrl, false); // false = don’t re-push into history
      } else {
        // If no state, fallback to default page
        loadPage('../../PHP/dentist-ui/dentist-subfolder/dentist-dashboard.php', false);
      }
    });
});


// ===================== PAGE SCRIPT INITIALIZER =====================
function initPageScript(pageUrl) {
  if (pageUrl.includes('dentist-my-account.php')) {
    if (typeof initDentistMyAccountPage === 'function') {
      initDentistMyAccountPage();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-my-account.js';
      script.defer = true;
      script.onload = () => initDentistMyAccountPage();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('dentist-dashboard.php')) {
    if (typeof initDentistDashboard === 'function') {
      initDentistDashboard();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-dashboard.js';
      script.defer = true;
      script.onload = () => initDentistDashboard();
      document.body.appendChild(script);
    }
  }
  
  if (pageUrl.includes('dentist-patient-records.php')) {
    if (typeof initDentistPatientRecords === 'function') {
      initDentistPatientRecords();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-patient-records.js';
      script.defer = true;
      script.onload = () => initDentistPatientRecords();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('dentist-appointments.php')) {
    if (typeof initDentistAppointments === 'function') {
      initDentistAppointments();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-appointments.js';
      script.defer = true;
      script.onload = () => initDentistAppointments();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('dentist-messages.php')) {
    if (typeof initDentistMessages === 'function') {
      initDentistMessages();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-messages.js';
      script.defer = true;
      script.onload = () => initDentistMessages();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('dentist-treatment-reports.php')) {
    if (typeof initDentistiTreatmentReports === 'function') {
      initDentistiTreatmentReports();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-treatment-reports.js';
      script.defer = true;
      script.onload = () => initDentistiTreatmentReports();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('dentist-appointment-reports.php')) {
    if (typeof initDentistAppointmentReports === 'function') {
      initDentistAppointmentReports();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-appointment-reports.js';
      script.defer = true;
      script.onload = () => initDentistAppointmentReports();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('dentist-help.php')) {
    if (typeof initDentistHelp === 'function') {
      initDentistHelp();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-help.js';
      script.defer = true;
      script.onload = () => initDentistHelp();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('dentist-patient-records-detailed.php')) {
    if (typeof initDentistPatientRecordsDetailed === 'function') {
      initDentistPatientRecordsDetailed();
    } else {
        const script = document.createElement('script');
        script.src = '../../Javascript/dentist-ui/dentist-subfolder/dentist-patient-records-detailed.js';
        script.defer = true;
        script.onload = () => initDentistPatientRecordsDetailed();
        document.body.appendChild(script);
    }
}
}

