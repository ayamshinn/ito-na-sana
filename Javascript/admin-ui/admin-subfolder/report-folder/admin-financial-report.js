function initAdminFinancialReport() {

// ===================== DONUT CHARTS =====================

// MOST USED ITEM DONUT
const topGrossCtx = document.getElementById('top-grossing-service-id');
if (topGrossCtx) {
  new Chart(topGrossCtx, {
    type: 'doughnut',
    data: {
      labels: ['Gloves', 'Rubber', 'Cotton'],
      datasets: [{
        label: 'Usage Count',
        data: [45, 30, 15], // example data
        borderWidth: 2,
        cutout: '70%', // controls thickness of the donut ring
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
          labels: { color: '#333', boxWidth: 12 }
        },
        title: {
          display: true,
          color: '#333',
          font: { size: 14 }
        }
      }
    }
  });
}

// LEAST USED ITEM DONUT
const lowestRevenueCtx = document.getElementById('lowest-revenue-service-id');
if (lowestRevenueCtx) {
  new Chart(lowestRevenueCtx, {
    type: 'doughnut',
    data: {
      labels: ['Anesthesia', 'Cotton', 'Mouth Mirror'],
      datasets: [{
        label: 'Usage Count',
        data: [5, 8, 3], // example data
        borderWidth: 2,
        cutout: '70%',
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
          labels: { color: '#333', boxWidth: 12 }
        },
        title: {
          display: true,
          color: '#333',
          font: { size: 14 }
        }
      }
    }
  });
}

const revenueCtx = document.getElementById('revenue-report-graph-id');
if (revenueCtx) {
  new Chart(revenueCtx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
      datasets: [
        {
          label: 'Actual Stock Level',
          data: [320, 280, 300, 260, 310, 340],
          borderColor: '#28a745', // Green line
          backgroundColor: 'rgba(40, 167, 69, 0.2)',
          borderWidth: 2,
          tension: 0.4,
          fill: false,
          pointRadius: 5,
          pointBackgroundColor: '#28a745',
          pointHoverRadius: 7
        }
      ]
    },
 options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          labels: { color: '#333' }
        },
        title: {
          display: true,
          text: '',
          color: '#333',
          font: { size: 18, weight: 'bold' }
        },
        tooltip: {
          callbacks: {
            label: function (tooltipItem) {
              return (
                tooltipItem.dataset.label +
                ': ' +
                tooltipItem.raw.toLocaleString() +
                ' items'
              );
            }
          }
        }
      },
      scales: {
        x: {
          title: {
            display: true,
            text: 'Month',
            color: '#333'
          },
          ticks: { color: '#333' },
          grid: { color: 'rgba(200, 200, 200, 0.2)' }
        },
        y: {
          title: {
            display: true,
            text: 'Stock Quantity',
            color: '#333'
          },
          ticks: {
            color: '#333',
            callback: value => value.toLocaleString() + ' pcs'
          },
          grid: { color: 'rgba(200, 200, 200, 0.2)' }
        }
      }
    }
  });
}



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




// Financial Graph 
const financialCtx = document.getElementById('financial-report-id');
if (financialCtx) {
    new Chart(financialCtx, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [
                {
                    label: 'Previous Month',
                    data: [25000, 40000, 35000, 60000],
                    backgroundColor: 'rgba(220, 53, 69, 0.4)',
                    borderColor: '#dc3545',
                    borderWidth: 1
                },
                {
                    label: 'Current Month',
                    data: [30000, 45000, 42000, 75000],
                    backgroundColor: 'rgba(40, 167, 69, 0.4)',
                    borderColor: '#28a745',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    labels: { color: '#703803' }
                },
                tooltip: {
                    callbacks: {
                        label: (tooltipItem) =>
                            `${tooltipItem.dataset.label}: ₱${tooltipItem.raw.toLocaleString()}`
                    }
                },
                title: {
                    display: true,
                    text: 'Financial Report — Previous vs Current Month',
                    color: '#703803',
                    font: { size: 16, weight: 'bold' }
                }
            },
            scales: {
                x: {
                    grid: { color: 'rgba(200, 200, 200, 0.2)' },
                    ticks: { color: '#703803' }
                },
                y: {
                    min: 10000,   // ✅ Start at ₱10,000
                    max: 100000,  // ✅ End at ₱100,000
                    ticks: {
                        stepSize: 10000, // ✅ ₱10k intervals
                        color: '#703803',
                        callback: (value) => '₱' + value.toLocaleString()
                    },
                    grid: { color: 'rgba(200, 200, 200, 0.2)' }
                }
            }
        }
    });
}


//For Table 
 const viewButtons = document.querySelectorAll(".financial-report-view-btn");
  const modal = document.getElementById("financial-report-table-container-modal-id");
  const modalBody = document.getElementById("financial-detailed-report-body");
  const closeBtn = document.getElementById("financial-report-table-close-modal-btn");

  // Sample data for each service
  const serviceDetails = {
    "Oral Prophylaxis": [
      { service: "Oral Prophylaxis", id: "P-125", name: "Dracy Malibu", dentist: "Mapru", fee: "₱600", addFee: "₱0" },
      { service: "Oral Prophylaxis", id: "P-127", name: "Kyle Dela Cruz", dentist: "Mapru", fee: "₱600", addFee: "₱100" },
    ],
    "Deep Scaling": [
      { service: "Deep Scaling", id: "P-150", name: "Andrea Vega", dentist: "Santos", fee: "₱500", addFee: "₱50" },
    ],
    "Tooth Filling": [
      { service: "Tooth Filling", id: "P-200", name: "Lia Navarro", dentist: "Reyes", fee: "₱600", addFee: "₱0" },
      { service: "Tooth Filling", id: "P-201", name: "Kenjie Dela Rosa", dentist: "Reyes", fee: "₱700", addFee: "₱50" },
    ],
    "Teeth Whitening": [
      { service: "Teeth Whitening", id: "P-250", name: "Mariel Tan", dentist: "Gomez", fee: "₱600", addFee: "₱200" },
    ],
  };


  // Show modal when clicking "View Detail"
  viewButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const serviceName = btn.getAttribute("data-service");
      const details = serviceDetails[serviceName] || [];

      // Clear previous rows
      modalBody.innerHTML = "";

      // Populate modal rows
      details.forEach(row => {
        const tr = document.createElement("tr");
        tr.innerHTML = `
          <td>${row.service}</td>
          <td>${row.id}</td>
          <td>${row.name}</td>
          <td>${row.dentist}</td>
          <td>${row.fee}</td>
          <td>${row.addFee}</td>
        `;
        modalBody.appendChild(tr);
      });

      // Show modal
      modal.classList.add("active");
    });
  });


  // Close modal
closeBtn.addEventListener("click", () => {
  modal.classList.remove("active");
});

}

document.addEventListener('DOMContentLoaded', initAdminFinancialReport);
