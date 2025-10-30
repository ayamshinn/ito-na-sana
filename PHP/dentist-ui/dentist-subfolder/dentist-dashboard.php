<?php
// Example: You can include backend logic here if needed.
// For now, this is a static partial file meant to be fetched dynamically.
?>

<div class="container-fluid dashboard-main-container">

  <div class="line mb-3"></div>

  <div class="dashboard-greeting">
    <h2>Dashboard</h2>
    <p>Here’s a quick overview of the clinic’s activities and upcoming appointments.</p>
  </div>

  <div class="container-row-banner mb-4 px-3">
    <div class="row">
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

  <!-- 🟣 Dashboard Cards -->
  <div class="div-dashboard-card">
    <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-1 g-4">

      <div class="col">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-calendar-days"></i></div>
          <div class="dashboard-card-text">
            <h4>Today's Appointments</h4>
            <h3>Total: 8</h3>
            <p>2:30 PM</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <div class="dashboard-card-text">
            <h4>Inventory Alert</h4>
            <h3>3 Items</h3>
            <p>Low Count Stocks</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="View Stocks">
            <i class="fa-solid fa-ellipsis-vertical"></i>
          </button>
        </div>
      </div>

      <div class="col">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-money-bill-1"></i></div>
          <div class="dashboard-card-text">
            <h4>Revenue Summary</h4>
            <h3>₱98,000</h3>
            <p>This Month</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="View Detailed Report">
            <i class="fa-solid fa-ellipsis-vertical"></i>
          </button>
        </div>
      </div>

      <div class="col">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-user"></i></div>
          <div class="dashboard-card-text">
            <h4>Registered Patients</h4>
            <h3>Total: <span>278</span></h3>
            <p>1 in progress</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="Add Patient">
            <i class="fa-solid fa-user-plus"></i>
          </button>
        </div>
      </div>

      <div class="col">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-user-tie"></i></div>
          <div class="dashboard-card-text">
            <h4>Registered Dentists</h4>
            <h3>Total: 4</h3>
            <p>Currently registered and available</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="Add Dentist">
            <i class="fa-solid fa-user-plus"></i>
          </button>
        </div>
      </div>

      <div class="col">
        <div class="dashboard-card h-100">
          <div class="icon-container"><i class="fa-solid fa-users"></i></div>
          <div class="dashboard-card-text">
            <h4>Clinic Staff Members</h4>
            <h3>Total: 4</h3>
            <p>Currently part of clinic operations</p>
          </div>
          <button class="dashboard-card-add-button ms-auto" title="Add Staff">
            <i class="fa-solid fa-user-plus"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

  <!-- 🔵 Appointments and Activity Overview -->
  <div class="div-dashboard-card mt-4">
    <div class="row g-4">

      <!-- Left Column -->
      <div class="col-lg-8 col-md-12">
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
            <?php
              $appointments = [
                ["Tooth Cleaning", "Oct 15, 2025 • 9:30 AM", "in-progress"],
                ["Root Canal", "Oct 15, 2025 • 10:00 AM", "confirmed"],
                ["Root Canal", "Oct 15, 2025 • 10:30 AM", "confirmed"],
                ["Root Canal", "Oct 15, 2025 • 11:00 AM", "confirmed"],
                ["Filling Replacement", "Oct 15, 2025 • 11:30 AM", "cancelled"]
              ];

              foreach ($appointments as $appt) {
                $status = $appt[2];
                echo '<div class="appointment-item">';
                echo '<div class="appointment-item-wrapper d-flex flex-row">';
                echo '<div class="appointment-bottom-icon-container bg-' . ($status === "cancelled" ? "danger" : ($status === "in-progress" ? "primary" : "success")) . '">';
                echo '<i class="fa-solid fa-calendar-days"></i></div>';
                echo '<div class="appointment-details">';
                echo '<h5>' . $appt[0] . '</h5>';
                echo '<p>' . $appt[1] . '</p>';
                echo '</div></div>';
                echo '<div class="appointment-status ' . $status . '">' . ucfirst(str_replace("-", " ", $status)) . '</div>';
                echo '</div>';
              }
            ?>
          </div>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-4 col-md-12">
        <div class="dashboard-card-bottom-container mb-4">
          <div class="dashboard-bottom-header">
            <div class="header-text">
              <h3>Today's Inventory Overview</h3>
            </div>
          </div>
          <div class="recent-activity-list">
            <div class="activity-item"><div class="activity-details"><h5>Completed Root Canal</h5><p>Oct 15, 2025</p></div></div>
            <div class="activity-item"><div class="activity-details"><h5>Suggested Tooth Cleaning</h5><p>Oct 20, 2025</p></div></div>
            <div class="activity-item"><div class="activity-details"><h5>Cancelled Filling Replacement</h5><p>Oct 25, 2025</p></div></div>
          </div>
        </div>

        <div class="dashboard-card-bottom-container">
          <div class="dashboard-bottom-header">
            <div class="header-text">
              <h3>Recent Activity</h3>
            </div>
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
