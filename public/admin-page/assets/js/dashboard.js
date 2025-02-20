    // Pie Chart (Simpanan Wajib vs Sukarela)
    var ctxPie = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Simpanan Wajib', 'Simpanan Sukarela'],
            datasets: [{
                data: [{{ $totalSimpananWajib }}, {{ $totalSimpananSukarela }}],
                backgroundColor: ['#28a745', '#ffc107']
            }]
        }
    });

    // Line Chart (Pinjaman vs Angsuran)
    var ctxLine = document.getElementById('lineChart').getContext('2d');
    var lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
            datasets: [
                {
                    label: 'Total Pinjaman',
                    data: [12000000, 15000000, 13000000, 18000000, {{ $totalPinjaman }}],
                    borderColor: '#dc3545',
                    fill: false
                },
                {
                    label: 'Total Angsuran',
                    data: [9000000, 11000000, 9500000, 14000000, {{ $totalAngsuran }}],
                    borderColor: '#17a2b8',
                    fill: false
                }
            ]
        }
    });
