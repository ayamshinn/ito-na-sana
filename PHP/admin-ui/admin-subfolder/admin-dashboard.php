<?php
// Start the session so you can use session variables later
session_start();

// Optional: Restrict access if user is not logged in
// if (!isset($_SESSION['admin_name'])) {
//   header("Location: ../../user-interface/index.php");
//   exit();
// }
?>
<div class="container-fluid dashboard-main-container">

  <div class="line mb-3"></div>

  <div class="dashboard-greeting">
    <h2>Dashboard</h2>
    <p>Here’s a quick overview of the clinic’s activities and upcoming appointments.</p>
  </div>

  <div class="container-row-banner mb-4 px-3">
    <div class="row ">
      <!-- 🟢 Left: Clinic Insights -->
      <div class="col-lg-8 col-md-12 mb-3 mb-lg-0">
        <div class="dashboard-insights-container p-4">
          <div class="insights-header d-flex flex-row align-items-center gap-2 mb-3">
            <div class="insights-icon text-warning fs-4">
              <i class="fa-solid fa-chart-simple"></i>
            </div>
            <h3 class="insights-title m-0">Clinic Insights</h3>
          </div>
          <div class="insights-content">
            <ul class="list-unstyled m-0">
              <li><i class="fa-solid fa-chart-line"></i> Appointment rate increased by <strong>15%</strong> this week.</li>
              <li><i class="fa-regular fa-user"></i> 5 new patients registered in the past 7 days.</li>
              <li><i class="fa-solid fa-hand-holding-dollar"></i> Monthly revenue grew by <strong>₱12,000</strong> compared to last month.</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 🟡 Right: Reminders -->
      <div class="col-lg-4 col-md-12">
        <div class="dashboard-reminders-container p-4">
          <div class="reminders-header d-flex flex-row align-items-center gap-2 mb-3">
            <div class="reminders-icon text-primary fs-4">
              <i class="fa-solid fa-bell"></i>
            </div>
            <h3 class="reminders-title m-0">Reminders</h3>
          </div>
          <div class="reminders-content">
            <ul class="list-unstyled m-0">
              <li><i class="fa-solid fa-clock"></i> Staff meeting at <strong>3:00 PM</strong>.</li>
              <li><i class="fa-solid fa-wrench"></i> Check dental chair maintenance logs.</li>
              <li><i class="fa-solid fa-box"></i> Restock anesthesia supplies.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ================= Dashboard Cards Section ================= -->
  <div class="div-dashboard-card">
    <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-1 row-cols-sm-1 row-cols-1 g-4">

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-calendar-days"></i></div>
          <div class="dashboard-card-text d-flex flex-column justify-content-start pb-0">
            <h4>Today's Appointments</h4>
            <h3>Total: <?php echo htmlspecialchars($todayAppointments ?? 8); ?></h3>
            <p>2:30 PM</p>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <div class="dashboard-card-text d-flex flex-column justify-content-start pb-0">
            <h4>Inventory Alert</h4>
            <h3><?php echo htmlspecialchars($lowStockItems ?? 3); ?> Items</h3>
            <p class="dashboard-p1">Low Count Stocks</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="View Stocks">
            <i class="fa-solid fa-ellipsis-vertical"></i>
          </button>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-money-bill-1"></i></div>
          <div class="dashboard-card-text d-flex flex-column justify-content-start pb-0">
            <h4>Revenue Summary</h4>
            <h3>₱<?php echo htmlspecialchars($monthlyRevenue ?? '98,000'); ?></h3>
            <p>This Month</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="View Detailed Report">
            <i class="fa-solid fa-ellipsis-vertical"></i>
          </button>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-user"></i></div>
          <div class="dashboard-card-text d-flex flex-column justify-content-start pb-0">
            <h4>Registered Patients</h4>
            <h3>Total: <?php echo htmlspecialchars($totalPatients ?? 278); ?></h3>
            <p class="dashboard-p">1 in progress</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="Add Patient">
            <i class="fa-solid fa-user-plus"></i>
          </button>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-user-tie"></i></div>
          <div class="dashboard-card-text d-flex flex-column justify-content-start pb-0">
            <h4>Registered Dentists</h4>
            <h3>Total: <?php echo htmlspecialchars($totalDentists ?? 4); ?></h3>
            <p>Currently registered and available</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="Add Dentist">
            <i class="fa-solid fa-user-plus"></i>
          </button>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-users"></i></div>
          <div class="dashboard-card-text d-flex flex-column justify-content-start pb-0">
            <h4>Clinic Staff Members</h4>
            <h3>Total: <?php echo htmlspecialchars($totalStaff ?? 4); ?></h3>
            <p>Currently part of clinic operations</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="Add Staff">
            <i class="fa-solid fa-user-plus"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

  <!-- ================= Bottom Overview Section ================= -->
  <div class="div-dashboard-card mt-4">
    <div class="row g-4">
      <div class="col-lg-8 col-md-12 dashboard-overview-list d-flex flex-column justify-content-start">
        <div class="dashboard-card-bottom-container h-100">

          <div class="dashboard-bottom-header">
            <div class="header-text">
              <h3>Today's Appointments Overview</h3>
            </div>
            <div class="header-view-all-btn">
              <a href="#" class="dashboard-view-all-btn"><span>View all</span></a>
            </div>
          </div>
          <hr>

          <div class="appointment-overview-list">
            <div class="appointment-item">
              <div class="appointment-item-wrapper d-flex flex-row">
                <div class="appointment-bottom-icon-container bg-primary"><i class="fa-solid fa-calendar-days"></i></div>
                <div class="appointment-details">
                  <h5>Tooth Cleaning</h5>
                  <p>Oct 15, 2025 • 9:30 AM</p>
                </div>
              </div>
              <div class="appointment-status in-progress">In Progress</div>
            </div>
            <div class="appointment-item">
              <div class="appointment-item-wrapper d-flex flex-row">
                <div class="appointment-bottom-icon-container bg-success"><i class="fa-solid fa-calendar-days"></i></div>
                <div class="appointment-details">
                  <h5>Root Canal</h5>
                  <p>Oct 15, 2025 • 10:00 AM</p>
                </div>
              </div>
              <div class="appointment-status confirmed">Confirmed</div>
            </div>
            <div class="appointment-item">
              <div class="appointment-item-wrapper d-flex flex-row">
                <div class="appointment-bottom-icon-container bg-danger"><i class="fa-solid fa-calendar-days"></i></div>
                <div class="appointment-details">
                  <h5>Filling Replacement</h5>
                  <p>Oct 15, 2025 • 11:30 AM</p>
                </div>
              </div>
              <div class="appointment-status cancelled">Cancelled</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 dashboard-overview-list d-flex flex-column justify-content-start">
        <div class="row right-col-row row-cols-lg-2">
          <div class="col-xl-12 col-lg-12 col-md-6">
            <div class="dashboard-card-bottom-container">
              <div class="dashboard-bottom-header">
                <div class="header-text"><h3>Today's Inventory Overview</h3></div>
              </div>
              <div class="recent-activity-list">
                <div class="activity-item"><div class="activity-details"><h5>Completed Root Canal</h5><p>Oct 15, 2025</p></div></div>
                <div class="activity-item"><div class="activity-details"><h5>Suggested Tooth Cleaning</h5><p>Oct 20, 2025</p></div></div>
                <div class="activity-item"><div class="activity-details"><h5>Cancelled Filling Replacement</h5><p>Oct 25, 2025</p></div></div>
              </div>
            </div>
          </div>

          <div class="col-xl-12 col-lg-12 col-md-6">
            <div class="dashboard-card-bottom-container">
              <div class="dashboard-bottom-header">
                <div class="header-text"><h3>Recent Activity</h3></div>
              </div>
              <div class="recent-activity-list">
                <div class="activity-item"><div class="activity-details"><h5>Completed Root Canal</h5><p>Oct 15, 2025</p></div></div>
                <div class="activity-item"><div class="activity-details"><h5>Suggested Tooth Cleaning</h5><p>Oct 20, 2025</p></div></div>
                <div class="activity-item"><div class="activity-details"><h5>Cancelled Filling Replacement</h5><p>Oct 25, 2025</p></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
