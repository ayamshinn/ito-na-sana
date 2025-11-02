function initAdminAppointmentReport() {

  const caretWrapper = document.querySelector('.monthly-wrapper-caret-down');
  const caretButton = caretWrapper.querySelector('.inventory-management-caret-button');
  const selectedPeriod = caretWrapper.querySelector('.selected-period');
  const dropdownItems = caretWrapper.querySelectorAll('.monthly-dropdown-item');

  // Toggle dropdown visibility
  caretButton.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevent click from closing dropdown immediately
    caretWrapper.classList.toggle('active');
  });

  // Handle dropdown item clicks
  dropdownItems.forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault();
      const newValue = item.textContent.trim();
      selectedPeriod.textContent = newValue; // Update button text
      caretWrapper.classList.remove('active'); // Close dropdown
    });
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', (e) => {
    if (!caretWrapper.contains(e.target)) {
      caretWrapper.classList.remove('active');
    }
  });


  //Graph
  // Sample data (replace with real data from API or PHP)
  const appointmentData = {
    "2023-09": {  // Last month (September)
      labels: Array.from({ length: 30 }, (_, i) => i + 1),  // Days 1-30
      data: [5, 8, 12, 15, 20, 18, 25, 22, 30, 28, 35, 32, 40, 38, 45, 42, 50, 48, 55, 52, 60, 58, 65, 62, 70, 68, 75, 72, 80, 78]
    },
    "2023-10": {  // Current month (October)
      labels: Array.from({ length: 31 }, (_, i) => i + 1),  // Days 1-31
      data: [10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 95, 90, 85, 80, 75, 70, 65, 60, 55, 50, 45, 40]
    }
  };

  let chart; // Global variable for the chart instance

  // Function to initialize/update the chart
  function updateChart(selectedMonth) {
    const ctx = document.getElementById('appointment-report-id').getContext('2d');

    // Destroy existing chart if it exists
    if (chart) chart.destroy();

    // Determine last month (static demo)
    const currentData = appointmentData[selectedMonth];
    const lastMonthKey = selectedMonth === "2023-10" ? "2023-09" : "2023-09";
    const lastData = appointmentData[lastMonthKey];

    // Create the chart
    chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: currentData.labels,
        datasets: [
          {
            label: `Current Month (${selectedMonth})`,
            data: currentData.data,
            borderColor: '#28a745',
            backgroundColor: 'rgba(40, 167, 69, 0.2)',
            borderWidth: 3,
            pointRadius: 4,
            pointHoverRadius: 6,
            tension: 0, // Sharp (tusok-tusok)
            fill: false
          },
          {
            label: `Previous Month (${lastMonthKey})`,
            data: lastData.data,
            borderColor: '#dc3545',
            backgroundColor: 'rgba(220, 53, 69, 0.2)',
            borderWidth: 3,
            pointRadius: 0,
            pointHoverRadius: 6,
            tension: 0, // Sharp (tusok-tusok)
            fill: false
          }
        ]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
            labels: {
              boxWidth: 20,
              padding: 15
            }
          },
          tooltip: {
            callbacks: {
              label: (context) => {
                const peak = Math.max(...context.dataset.data);
                return `${context.dataset.label}: ${context.parsed.y} appointments (Peak: ${peak})`;
              }
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: true,
              text: 'Number of Appointments'
            },
            ticks: {
              stepSize: 10
            }
          },
          x: {
            title: {
              display: true,
              text: 'Day of Month'
            }
          }
        }
      }
    });
  }

  // Default chart on load
  updateChart("2023-10");


  // Initialize on page load
  const monthSelect = document.getElementById('month-select');

  // Load initial chart (current month)
  updateChart(monthSelect.value);

  // Update chart on dropdown change
  monthSelect.addEventListener('change', (e) => {
    updateChart(e.target.value);
  });

// ===================== MODAL + TABLE SCRIPT =====================

// Modal elements (unchanged)
const modal = document.getElementById("appointment-modal-container-id");
const modalTitle = document.getElementById("modal-title");
const modalHead = document.getElementById("appointment-report-modal-head");
const modalBody = document.getElementById("appointment-report-modal-body");
const closeBtn = document.getElementById("close-modal-btn");

// ===================== SAMPLE DATA =====================

// Define headers per modal type/category (removed "services" – now all use the same appointment headers)
const modalHeaders = {
  completed: ["Main Category", "Subcategory", "Name", "Patient ID", "Dentist", "Date"],
  "no-show": ["Main Category", "Subcategory", "Name", "Patient ID", "Dentist", "Date"],
  cancelled: ["Main Category", "Subcategory", "Name", "Patient ID", "Dentist", "Date"],
};

// Modal data (appointments per category) - unchanged
const appointmentModalData = {
  completed: [
    { main: "Cleaning", sub: "Oral Prophylaxis", name: "Kyle Dela Cruz", id: "P-127", dentist: "Mapru", date: "2023-10-15" },
  ],
  "no-show": [
    { main: "Check-up", sub: "Consultation", name: "John Doe", id: "P-200", dentist: "Reyes", date: "2023-10-20" },
  ],
  cancelled: [
    { main: "Restoration", sub: "Tooth Filling", name: "Lia Navarro", id: "P-201", dentist: "Reyes", date: "2023-10-22" },
  ],
};

// Service table data (unchanged)
const services = [
  {
    mainCategory: "Periodontics",
    subcategories: [
      { name: "Oral Prophylaxis", total: 12, category: "completed" },
      { name: "Scaling and Root Planing", total: 8, category: "cancelled" },
    ],
  },
  {
    mainCategory: "Orthodontics",
    subcategories: [
      { name: "Braces Installation", total: 15, category: "completed" },
      { name: "Bracket Replacement", total: 5, category: "no-show" },
    ],
  },
  {
    mainCategory: "Endodontics",
    subcategories: [
      { name: "Root Canal Therapy", total: 9, category: "cancelled" },
      { name: "Pulp Capping", total: 4, category: "completed" },
    ],
  },
];

// ===================== TABLE GENERATION =====================
const tbody = document.getElementById("appointment-service-body");
tbody.innerHTML = ""; // clear old data

services.forEach(category => {
  category.subcategories.forEach((sub, index) => {
    const row = document.createElement("tr");

    // Only show main category once
    if (index === 0) {
      const mainCell = document.createElement("td");
      mainCell.textContent = category.mainCategory;
      mainCell.rowSpan = category.subcategories.length;
      row.appendChild(mainCell);
    }

    // Subcategory cell
    const subCell = document.createElement("td");
    subCell.textContent = sub.name;
    row.appendChild(subCell);

    // Total cell
    const totalCell = document.createElement("td");
    totalCell.textContent = sub.total;
    row.appendChild(totalCell);

    // Action cell
    const actionCell = document.createElement("td");
    const button = document.createElement("button");
    button.textContent = "View Detail";
    button.classList.add("view-btn");
    // Reverted: Use sub.category (e.g., "completed") as data-category, so it shows appointment data
    button.setAttribute("data-category", sub.category);
    button.setAttribute("data-target", "#appointment-modal-container-id");
    actionCell.appendChild(button);

    row.appendChild(actionCell);
    tbody.appendChild(row);
  });

  // Automatically update appointment counts based on data
const countElements = document.querySelectorAll(".appointment-count");

countElements.forEach(el => {
  const category = el.getAttribute("data-category");
  const data = appointmentModalData[category] || [];
  el.textContent = data.length; // updates number dynamically
});

});

// ===================== MODAL FUNCTIONALITY =====================
document.addEventListener("click", e => {
  if (e.target.classList.contains("view-btn")) {
    const btn = e.target;
    const category = btn.getAttribute("data-category");
    const targetModal = document.querySelector(btn.getAttribute("data-target"));
    const data = appointmentModalData[category] || [];

    // Update modal title
    modalTitle.textContent = `${category.charAt(0).toUpperCase() + category.slice(1)} Appointments`;

    // Clear previous content
    modalHead.innerHTML = "";
    modalBody.innerHTML = "";

    // Generate dynamic headers (always uses appointment headers now)
    const headers = modalHeaders[category] || ["Main Category", "Subcategory", "Name", "Patient ID", "Dentist", "Date"];
    const headRow = document.createElement("tr");
    headers.forEach(h => {
      const th = document.createElement("th");
      th.textContent = h;
      headRow.appendChild(th);
    });
    modalHead.appendChild(headRow);

    // Populate body with appointment data (unchanged)
    data.forEach(row => {
      const tr = document.createElement("tr");
      tr.innerHTML = `
        <td>${row.main}</td>
        <td>${row.sub}</td>
        <td>${row.name}</td>
        <td>${row.id}</td>
        <td>${row.dentist}</td>
        <td>${row.date}</td>
      `;
      modalBody.appendChild(tr);
    });

    // Show modal
    targetModal.classList.add("active");
  }
});

// Close modal (unchanged)
closeBtn.addEventListener("click", () => {
  modal.classList.remove("active");
});





}
document.addEventListener('DOMContentLoaded', initAdminAppointmentReport);