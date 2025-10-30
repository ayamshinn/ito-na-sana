<?php
// ============================ PHP INITIALIZATION ============================
// Start session if you plan to use session data for dentist info
session_start();

// Example placeholders (you can later replace these with real session variables)
$dentistName = $_SESSION['dentist_name'] ?? 'Maja Prudente';
$dentistUsername = $_SESSION['dentist_username'] ?? '@maja_prudente';
$dentistFullName = $_SESSION['dentist_fullname'] ?? 'Prudente, Maja';
$profileImage = $_SESSION['dentist_image'] ?? '../../Pictures/user-interface/profile-placeholder.jpg';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Dentist-Specific CSS -->
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-dashboard.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-patient-records.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-appointments.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-appointment-reports.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-treatment-reports.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-my-account.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-messages.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-help.css">
  <link rel="stylesheet" href="../../CSS/dentist-ui/dentist-backup-css/dentist-patient-records-detailed.css">

  <!-- Shared CSS -->
  <link rel="stylesheet" href="../../CSS/shared-ui/shared.css">

  <!-- FullCalendar -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>

  <!-- Icons -->
  <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Font -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
  </style>

  <title>Dentist Portal</title>
</head>

<body>
  <!-- ============================Main Container============================ -->
  <div class="main-container container-fluid d-flex px-0">

    <!-- ============================Sidebar Container============================ -->
    <aside class="sidebar-container" id="sidebar-container">
      <!-- Logo -->
      <div class="sidebar-top-logo mx-3">
        <div class="toggle-sidebar">
          <i class="fa-solid fa-bars"></i>
        </div>
        <img src="../../Pictures/user-interface/banners-images-logo/logo.png" alt="Clinic Logo" class="logo-img">
        <div class="logo-text ms-2">
          <h3 class="mb-0">Mapru</h3>
          <h5 class="mb-0">Dental Clinic</h5>
        </div>
      </div>

      <div class="sidebar-content ps-2 pt-2">
        <!-- User Profile -->
        <div class="sidebar-user-profile-picture">
          <div class="sidebar-profile-info-container">
            <div class="sidebar-userprofile-img">
              <img src="<?php echo htmlspecialchars($profileImage); ?>" alt="User Profile">
            </div>
            <div class="sidebar-userprofile-name-container">
              <h3 id="sidebar-profileName"><?php echo htmlspecialchars($dentistName); ?></h3>
              <p><span id="sidebar-patient-id"><?php echo htmlspecialchars($dentistUsername); ?></span></p>
            </div>
          </div>

          <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-my-account.php"
             class="btn-my-account" 
             data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-my-account.php"
             data-bs-toggle="tooltip" 
             data-bs-placement="right" 
             title="Dashboard">
             <i class="fas fa-user"></i> <span>My Account</span>
          </a>
        </div>

        <!-- ============================ Navigation ============================ -->
        <nav class="sidebar-navigation w-100">
          <ul class="sidebar-nav-list">
            <!-- ========== Navigation Section ========== -->
            <li class="sidebar-section-title">Navigation</li>
            <li>
              <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-dashboard.php" 
                 class="btn-sidebar d-flex align-items-center"
                 data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-dashboard.php" 
                 data-bs-toggle="tooltip"
                 data-bs-placement="right" title="Dashboard">
                 <i class="fa-solid fa-table-columns"></i><span>Dashboard</span>
              </a>
            </li>

            <li>
              <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-patient-records.php"
                 class="btn-sidebar d-flex align-items-center"
                 data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-patient-records.php">
                 <i class="fas fa-book"></i> <span>Patient Records</span>
              </a>
            </li>

            <li>
              <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-appointments.php"
                 class="btn-sidebar d-flex align-items-center"
                 data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-appointments.php">
                 <i class="fas fa-calendar"></i> <span>Appointments</span>
              </a>
            </li>

            <li>
              <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-messages.php"
                 class="btn-sidebar d-flex align-items-center"
                 data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-messages.php">
                 <i class="fa-solid fa-message"></i><span>Messages</span>
              </a>
            </li>

            <li>
              <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-treatment-reports.php" 
                 class="btn-sidebar d-flex align-items-center" 
                 data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-treatment-reports.php"
                 data-bs-toggle="tooltip" data-bs-placement="right" title="Treatment Reports">
                 <i class="fa-solid fa-clipboard"></i><span>Treatment Reports</span>
              </a>
            </li>

            <li>
              <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-appointment-reports.php" 
                 class="btn-sidebar d-flex align-items-center" 
                 data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-appointment-reports.php"
                 data-bs-toggle="tooltip" data-bs-placement="right" title="Appointment Reports">
                 <i class="fa-solid fa-calendar-check"></i><span>Appointment Reports</span>
              </a>
            </li>

            <!-- ========== Components Section ========== -->
            <li class="sidebar-section-title">Component</li>
            <li>
              <a href="../../PHP/dentist-ui/dentist-main.php#../../PHP/dentist-ui/dentist-subfolder/dentist-help.php" 
                 class="btn-sidebar d-flex align-items-center" 
                 data-page="../../PHP/dentist-ui/dentist-subfolder/dentist-help.php">
                 <i class="fa-solid fa-circle-question"></i> <span>Help</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- Logout -->
        <div class="sidebar-logout pe-2">
          <a href="../../PHP/user-interface/index.php" 
             class="btn-sidebar sidebar-logout-btn d-flex align-items-center" 
             id="logoutBtn">
             <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
          </a>
        </div>
      </div>
    </aside>

    <script src="../../Javascript/shared-ui/shared.js"></script>

    <!-- ============================Content Area Container============================ -->
    <main class="main-content-area-container" id="main-content-area-container">
      <!-- ==============================Topbar============================= -->
      <div class="topbar" id="topbar">
        <div class="topbar-left">
          <div class="toggle">
            <i class="fa-solid fa-bars"></i>
          </div>
          <h3>Today's Date:</h3>
          <div class="today-date" id="today-date"></div>
        </div>

        <div class="contentarea-topbar-profile">
          <div class="notification">
            <a href="dentist-messages.php" class="icon-wrapper me-3 position-relative" title="Messages">
              <i class="fa-solid fa-envelope"></i>
              <span class="badge message-badge">1</span>
            </a>

            <a href="#" class="icon-wrapper icon-bell-notif me-5 position-relative" title="Notifications">
              <i class="fas fa-bell"></i>
              <span class="badge system-notif-badge">1</span>
            </a>
          </div>

          <h4 class="topbar-profile-name" id="topbar-profilename"><?php echo htmlspecialchars($dentistFullName); ?></h4>
          <div class="contentarea-topbar-user">
            <img src="<?php echo htmlspecialchars($profileImage); ?>" alt="Profile">
          </div>
        </div>
      </div>

      <div class="content-container">
        <div class="content-area" id="content-area">
          <script src="../../Javascript/dentist-ui/dentist-main.js"></script>
        </div>
      </div>

      <footer class="footer w-100 d-flex justify-content-end align-items-center mt-5 p-3">
        <p class="m-0">&copy; 2025 Mapru</p>
      </footer>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
