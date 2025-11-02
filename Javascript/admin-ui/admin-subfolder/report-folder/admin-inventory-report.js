function initAdminInventoryReport() {

// ===================== DONUT CHARTS =====================

// MOST USED ITEM DONUT
const mostUsedCtx = document.getElementById('most-used-item-donut-id');
if (mostUsedCtx) {
  new Chart(mostUsedCtx, {
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
const leastUsedCtx = document.getElementById('least-used-item-donut-id');
if (leastUsedCtx) {
  new Chart(leastUsedCtx, {
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
          labels: { color: '#703803' }
        },
        title: {
          display: true,
          text: '',
          color: '#703803',
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
            color: '#703803'
          },
          ticks: { color: '#703803' },
          grid: { color: 'rgba(200, 200, 200, 0.2)' }
        },
        y: {
          title: {
            display: true,
            text: 'Stock Quantity',
            color: '#703803'
          },
          ticks: {
            color: '#703803',
            callback: value => value.toLocaleString() + ' pcs'
          },
          grid: { color: 'rgba(200, 200, 200, 0.2)' }
        }
      }
    }
  });
}

//Table Report
  const tableBody = document.getElementById("inventory-report-body-id");
  // Sample data (replace with real data from API/database)
  const inventoryData = [
    {
      category: "Cotton",
      quantity: 15,
      remaining: 1,
      quantityAdded: "50",
      date: "01/24/20",  // Assuming "Date" column
      auditedBy: "Mapru",
      totalQuantityStock: 105
    },
    // Add more rows as needed
    {
      category: "Silk",
      quantity: 20,
      remaining: 5,
      quantityAdded: "50",
      date: "02/15/20",
      auditedBy: "Jane Doe",
      totalQuantityStock: 120
    }
  ];
  // Clear existing rows (if any)
  tableBody.innerHTML = "";
  // Populate the table
  inventoryData.forEach(item => {
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${item.category}</td>
      <td>${item.quantity}</td>
      <td>${item.remaining}</td>
      <td>${item.quantityAdded}</td>
      <td>${item.date}</td>
      <td>${item.auditedBy}</td>
      <td>${item.totalQuantityStock}</td>
    `;
    tableBody.appendChild(row);
  });


}

document.addEventListener('DOMContentLoaded', initAdminInventoryReport);
