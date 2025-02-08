// Bar Chart (Simpanan, Pinjaman, Angsuran)
const barCtx = document.getElementById('barChart').getContext('2d');
new Chart(barCtx, {
  type: 'bar',
  data: {
    labels: ['Simpanan', 'Pinjaman', 'Angsuran'],
    datasets: [{
      label: 'Jumlah (Rp)',
      data: [200000000, 150000000, 100000000],
      backgroundColor: ['#4CAF50', '#FF9800', '#2196F3'],
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false }
    },
    scales: {
      y: { beginAtZero: true }
    }
  }
});

// Pie Chart (Komposisi Sumber Dana)
const pieCtx = document.getElementById('pieChart').getContext('2d');
new Chart(pieCtx, {
  type: 'pie',
  data: {
    labels: ['Simpanan Pokok', 'Simpanan Sukarela'],
    datasets: [{
      data: [120000000, 80000000],
      backgroundColor: ['#673AB7', '#03A9F4'],
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { position: 'bottom' }
    }
  }
});
