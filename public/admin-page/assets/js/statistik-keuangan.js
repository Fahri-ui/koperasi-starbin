const totalSimpanan = {{ $totalSimpanan }};
const totalPinjaman = {{ $totalPinjaman }};
const totalAngsuran = {{ $totalAngsuran }};
const simpananWajib = {{ $simpananWajib }};
const simpananSukarela = {{ $simpananSukarela }};

// Bar Chart (Simpanan, Pinjaman, Angsuran)
const barCtx = document.getElementById('barChart').getContext('2d');
new Chart(barCtx, {
    type: 'bar',
    data: {
        labels: ['Simpanan', 'Pinjaman', 'Angsuran'],
        datasets: [{
            label: 'Jumlah (Rp)',
            data: [totalSimpanan, totalPinjaman, totalAngsuran],
            backgroundColor: ['#4CAF50', '#FF9800', '#2196F3'],
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
    }
});

// Pie Chart (Komposisi Simpanan)
const pieCtx = document.getElementById('pieChart').getContext('2d');
new Chart(pieCtx, {
    type: 'pie',
    data: {
        labels: ['Simpanan Wajib', 'Simpanan Sukarela'],
        datasets: [{
            data: [simpananWajib, simpananSukarela],
            backgroundColor: ['#673AB7', '#03A9F4'],
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { position: 'bottom' } }
    }
});
