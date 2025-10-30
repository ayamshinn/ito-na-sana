// ===================== MAIN JS =====================
document.addEventListener('DOMContentLoaded', () => {
  
    const container = document.querySelector('.content-area');
  
    // ===== Function to load a page (reusable) =====
    window.loadPage = function (pageUrl, addToHistory = true) {
      fetch(pageUrl)
        .then(res => res.text())
        .then(html => {
          container.innerHTML = html;
  
          // Update title dynamically
          if (pageUrl.includes("dashboard")) document.title = "Admin Portal - Dashboard";
          else if (pageUrl.includes("appointments")) document.title = "Admin Portal - Appointments";
          else if (pageUrl.includes("messages")) document.title = "Admin Portal - Messages";
          else if (pageUrl.includes("patient")) document.title = "Admin Portal - Patient Management";
          else if (pageUrl.includes("dentist")) document.title = "Admin Portal - Dentist Management";
          else if (pageUrl.includes("staff")) document.title = "Admin Portal - Staff Management";
          else if (pageUrl.includes("inventory")) document.title = "Admin Portal - Inventory Management";
          else if (pageUrl.includes("inventory-report")) document.title = "Admin Portal - Inventory Reports";
          else if (pageUrl.includes("financial-report")) document.title = "Admin Portal - Financial Reports";

          else if (pageUrl.includes("appointment-report")) document.title = "Admin Portal - Appointment Reports";

          else if (pageUrl.includes("performance-report")) document.title = "Admin Portal - Performance Reports";

          
          else if (pageUrl.includes("services")) document.title = "Admin Portal - Dental Services";
          else if (pageUrl.includes("help")) document.title = "Admin Portal - Help";
          else if (pageUrl.includes("security")) document.title = "Admin Portal - Account Security";
          else if (pageUrl.includes("settings")) document.title = "Admin Portal - Settings";
          else document.title = "Admin Portal";
  
          // ✅ Add to browser history if required
          if (addToHistory) {
            history.pushState({ pageUrl }, "", `#${pageUrl}`);
          }
  
          // ✅ Reset scroll
          window.scrollTo(0, 0);
          const contentArea = document.querySelector('.main-content-area-container');
          if (contentArea) contentArea.scrollTop = 0;
  
          // ✅ Initialize the page logic after it's inserted
          initPageScript(pageUrl);
        })
        .catch(err => console.error('Error loading page:', err));
    };
  
    // ===== Attach click events to all sidebar links =====
    document.querySelectorAll('a[data-page]').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        const pageUrl = link.getAttribute('data-page');
        loadPage(pageUrl); // default addToHistory = true
      });
    });
  
    // ✅ Automatically load the default page on initial load
    const initialPage = location.hash ? location.hash.substring(1) : '../../PHP/admin-ui/admin-subfolder/admin-patient-management.php';
    loadPage(initialPage, false); // Don't add first load to history
  
    // ✅ Handle browser Back/Forward buttons
    window.addEventListener("popstate", (event) => {
      if (event.state && event.state.pageUrl) {
        loadPage(event.state.pageUrl, false); // false = don’t re-push into history
      } else {
        // If no state, fallback to default page
        loadPage('../../PHP/admin-ui/admin-subfolder/admin-patient-management.php', false);
      }
    });
  }); 

// ===================== PAGE SCRIPT INITIALIZER =====================
function initPageScript(pageUrl) {
  if (pageUrl.includes('admin-dashboard.php')) {
    if (typeof initAdminDashboard === 'function') {
      initAdminDashboard();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-dashboard.js';
      script.defer = true;
      script.onload = () => initAdminDashboard();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('admin-appointments.php')) {
    if (typeof initAdminAppointments === 'function') {
      initAdminAppointments();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-appointments.js';
      script.defer = true;
      script.onload = () => initAdminAppointments();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('admin-messages.php')) {
    if (typeof initAdminMessages === 'function') {
      initAdminMessages();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-messages.js';
      script.defer = true;
      script.onload = () => initAdminMessages();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('admin-patient-management.php')) {
    if (typeof initAdminPatientManagement === 'function') {
      initAdminPatientManagement();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-patient-management.js';
      script.defer = true;
      script.onload = () => initAdminPatientManagement();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('admin-dentist-management.php')) {
    if (typeof initAdminDentistManagement === 'function') {
      initAdminDentistManagement();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-dentist-management.js';
      script.defer = true;
      script.onload = () => initAdminDentistManagement();
      document.body.appendChild(script);
    }
  }

  //
  if (pageUrl.includes('admin-staff-management.php')) {
    if (typeof initAdminStaffManagement === 'function') {
      initAdminStaffManagement();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-staff-management.js';
      script.defer = true;
      script.onload = () => initAdminStaffManagement();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('admin-inventory-management.php')) {
    if (typeof initAdminInventoryManagement === 'function') {
      initAdminInventoryManagement();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-inventory-management.js';
      script.defer = true;
      script.onload = () => initAdminInventoryManagement();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('admin-inventory-report.php')) {
    if (typeof initAdminInventoryReport === 'function') {
      initAdminInventoryReport();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/report-folder/admin-inventory-reports.js';
      script.defer = true;
      script.onload = () => initAdminInventoryReport();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('admin-financial-report.php')) {
    if (typeof initAdminFinancialReport === 'function') {
      initAdminFinancialReport();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/report-folder/admin-financial-reports.js';
      script.defer = true;
      script.onload = () => initAdminFinancialReport();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('admin-appointment-report.php')) {
    if (typeof initAdminAppointmentReport === 'function') {
      initAdminAppointmentReport();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/report-folder/admin-appointment-reports.js';
      script.defer = true;
      script.onload = () => initAdminAppointmentReport();
      document.body.appendChild(script);
    }
  }
    if (pageUrl.includes('admin-performance-report.php')) {
    if (typeof initAdminPerformanceReport === 'function') {
      initAdminPerformanceReport();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/report-folder/admin-performance-reports.js';
      script.defer = true;
      script.onload = () => initAdminPerformanceReport();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('admin-services.php')) {
    if (typeof initAdminServices === 'function') {
      initAdminServices();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-services.js';
      script.defer = true;
      script.onload = () => AdminServices();
      document.body.appendChild(script);
    }
  }

  if (pageUrl.includes('admin-help.php')) {
    if (typeof initAdminHelp === 'function') {
      initAdminAdminHelp();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-help.js';
      script.defer = true;
      script.onload = () => initAdminHelp();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('admin-security.php')) {
    if (typeof initAdminSecurity === 'function') {
      initAdminSecurity();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-security.js';
      script.defer = true;
      script.onload = () => initAdminSecurity();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('admin-settings.php')) {
    if (typeof initAdminSettings === 'function') {
      initAdminSettings();
    } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-settings.js';
      script.defer = true;
      script.onload = () => initAdminSettings();
      document.body.appendChild(script);
    }
  }
  if (pageUrl.includes('admin-patient-management-detailed.php')) {
    if (typeof initAdminPatientManagementDetailed === 'function') {
        initAdminPatientManagementDetailed();
    } else {
        const script = document.createElement('script');
        script.src = '../../Javascript/admin-ui/admin-subfolder/admin-patient-management-detailed.js';
        script.defer = true;
        script.onload = () => initAdminPatientManagementDetailed();
        document.body.appendChild(script);
    }
}
if (pageUrl.includes('admin-dentist-management-detailed.php')) {
  if (typeof initAdminDentistManagementDetailed === 'function') {
    initAdminDentistManagementDetailed();
  } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-dentist-management-detailed.js';
      script.defer = true;
      script.onload = () => initAdminDentistManagementDetailed();
      document.body.appendChild(script);
  }
}
if (pageUrl.includes('admin-staff-management-detailed.php')) {
  if (typeof initAdminStaffManagementDetailed === 'function') {
    initAdminStaffManagementDetailed();
  } else {
      const script = document.createElement('script');
      script.src = '../../Javascript/admin-ui/admin-subfolder/admin-staff-management-detailed.js';
      script.defer = true;
      script.onload = () => initAdminStaffManagementDetailed();
      document.body.appendChild(script);
  }
}


}


