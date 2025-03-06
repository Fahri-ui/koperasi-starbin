 document.addEventListener("DOMContentLoaded", function() {
            // Pastikan data dari backend tersedia
            let pinjamanData = {!! json_encode($pinjamanBulanan) !!};
            let angsuranData = {!! json_encode($angsuranBulanan) !!};
            let totalSimpananWajib = {{ $totalSimpananWajib }};
            let totalSimpananSukarela = {{ $totalSimpananSukarela }};
            let totalPinjaman = {{ $totalPinjaman }};
            let totalAngsuran = {{ $totalAngsuran }};
            let totalDenda = {{ $totalDenda }};

            // Ambil label bulan dan data hanya yang memiliki nilai
            let labelsBulan = Object.keys(pinjamanData); // ["Jan", "Feb", "Mar", ...]
            let pinjamanValues = Object.values(pinjamanData);
            let angsuranValues = Object.values(angsuranData);

            // **PIE CHART** Simpanan
            new Chart(document.getElementById("pieChart"), {
                type: "pie",
                data: {
                    labels: ["Pinjaman", "Simpanan Sukarela"],
                    datasets: [{
                        data: [totalPinjaman, totalSimpananSukarela],
                        backgroundColor: ["#4CAF50", "#FF9800"],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            top: 20,
                            bottom: 20
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                padding: 20
                            }
                        }
                    }
                }
            });

            // **LINE CHART** Pinjaman & Angsuran
            new Chart(document.getElementById("lineChart"), {
                type: "line",
                data: {
                    labels: labelsBulan, // Hanya bulan dengan data
                    datasets: [{
                            label: "Pinjaman",
                            data: pinjamanValues,
                            backgroundColor: "rgba(54, 162, 235, 0.2)",
                            borderColor: "rgba(54, 162, 235, 1)",
                            borderWidth: 2,
                            tension: 0.4,
                            pointBackgroundColor: "black",
                            pointBorderColor: "black",
                            pointRadius: 5
                        },
                        {
                            label: "Angsuran",
                            data: angsuranValues,
                            backgroundColor: "rgba(255, 159, 64, 0.2)",
                            borderColor: "rgba(255, 159, 64, 1)",
                            borderWidth: 2,
                            tension: 0.4,
                            pointBackgroundColor: "black",
                            pointBorderColor: "black",
                            pointRadius: 5
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            bottom: 30
                        }
                    },
                    plugins: {
                        tooltip: {
                            enabled: false
                        },
                        datalabels: {
                            align: "top",
                            color: "#fff",
                            backgroundColor: function(context) {
                                return context.datasetIndex === 0 ? "#007bff" : "#6c757d";
                            },
                            borderRadius: 4,
                            font: {
                                weight: "bold"
                            },
                            formatter: function(value) {
                                return value;
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                padding: 10,
                                font: {
                                    size: 12
                                }
                            }
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });

            // **BAR CHART** Statistik Keuangan
            new Chart(document.getElementById("barChart"), {
                type: "bar",
                data: {
                    labels: ["Total Pinjaman", "Total Angsuran", "Total Denda"],
                    datasets: [{
                        label: "Nominal (Rp)",
                        data: [totalPinjaman, totalAngsuran, totalDenda],
                        backgroundColor: ["#FF5733", "#33FF57", "#FFC300"],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            bottom: 30
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                padding: 15
                            }
                        }
                    },
                    scales: {
                        x: {
                            ticks: {
                                padding: 10,
                                font: {
                                    size: 12
                                }
                            }
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    