<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Koperasi STARBIN</title>

    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap Icons -->

    <link rel="stylesheet" href="{{asset('admin-page/assets/css/dashboard.css')}}">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative ">
                    <div class="user-info text-center mt-3 pb-3">
                        <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" class="rounded-circle" alt="User Avatar" style="width: 150px; height: 150px; object-fit: cover;">
                        <h3 class="mt-2 mb-0 ">{{ Auth::user()->fullname }}</h3>
                        <small class="text-muted">{{ Auth::user()->role }}</small>
                    </div>
                </div>

                <div class="sidebar-footer d-flex align-items-center justify-content-between py-3 border-bottom">
                    <!-- Logo & Nama Koperasi -->
                    <div class="d-flex align-items-center ms-3">
                        <div class="logo" style="width: 40px; height: 40px;">
                            <img src="{{ asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-0 text-muted" style="font-size: 12px;">Koperasi</h6>
                            <h5 class="mb-0 text-primary fw-bold" style="font-size: 14px;">STARBIN</h5>
                        </div>
                    </div>

                    <!-- Theme Toggle -->
                    <div class="theme-toggle d-flex align-items-center gap-2 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 21">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"></path>
                            </g>
                        </svg>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input me-0" type="checkbox" id="toggle-dark">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                        </svg>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- MENU UTAMA -->
                        <li class="sidebar-title border-bottom pb-2 text-uppercase text-secondary fw-bold fs-6 pt-3">Menu Utama</li>
                        <li class="sidebar-item active">
                            <a href="{{ route('min') }}" class="sidebar-link">
                                <i class="bi bi-house-door-fill"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-4">
                            <a href="{{ route('profiladmin') }}" class="sidebar-link">
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <!-- PENGELOLAAN DATA -->
                        <li class="sidebar-title border-top border-bottom pb-2 pt-3 mt-4 text-uppercase text-secondary fw-bold fs-6">Pengelolaan Data</li>
                        <li class="sidebar-item">
                            <a href="{{ route('dataanggota') }}" class="sidebar-link">
                                <i class="bi bi-person-lines-fill"></i>
                                <span>Data Anggota</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-wallet-fill"></i>
                                <span>Data Simpanan</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="{{ route('simpananwajibadmin') }}">Simpanan Wajib</a></li>
                                <li class="submenu-item"><a href="{{ route('simpanansukarelaadmin') }}">Simpanan Sukarela</a></li>
                                <li class="submenu-item"><a href="{{ route('simpanananggota') }}">Simpanan Anggota</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('pinjamanadmin') }}" class="sidebar-link">
                                <i class="bi bi-cash-stack"></i>
                                <span>Data Pinjaman</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('denda') }}" class="sidebar-link">
                                <i class="bi bi-exclamation-circle"></i>
                                <span>Data Denda Pinjaman</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('simpanans') }}" class="sidebar-link position-relative">
                                <i class="bi bi-wallet-fill"></i>
                                <span>Data Pengajuan Simpanan</span>
                                @if ($jumlahSimpananDalamProses > 0)
                                <span class="badge bg-warning position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahSimpananDalamProses }}
                                </span>
                                @endif
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('pangajuan') }}" class="sidebar-link position-relative">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Data Pengajuan Pinjaman</span>
                                @if ($jumlahPengajuanDalamProses > 0)
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahPengajuanDalamProses }}
                                </span>
                                @endif
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('angsuran') }}" class="sidebar-link position-relative">
                                <i class="bi bi-coin"></i>
                                <span>Data Pengajuan Angsuran</span>
                                @if ($jumlahAngsuranDalamProses > 0)
                                <span class="badge bg-warning position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahAngsuranDalamProses }}
                                </span>
                                @endif
                            </a>
                        </li>

                        <!-- KOMUNIKASI -->
                        <li class="sidebar-title border-top border-bottom pb-2 pt-3 mt-4 text-uppercase text-secondary fw-bold fs-6">Komunikasi</li>
                        <li class="sidebar-item">
                            <a href="{{ route('kontakkoperasi') }}" class="sidebar-link">
                                <i class="bi bi-envelope-paper"></i>
                                <span>Kelola Kontak Koperasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('sosmed') }}" class="sidebar-link">
                                <i class="bi bi-link-45deg"></i>
                                <span>Kelola Sosial Media</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.sharemassage') }}" class="sidebar-link">
                                <i class="bi bi-send"></i>
                                <span>Kelola Pesan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('notifikasiadmin') }}" class="sidebar-link position-relative">
                                <i class="bi bi-bell-fill"></i>
                                <span>Notifikasi</span>
                                @if ($jumlahNotifikasiBaru > 0)
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahNotifikasiBaru }}
                                </span>
                                @endif
                            </a>
                        </li>

                        <!-- KELUAR -->
                        <li class="sidebar-item border-top pt-3 mt-4">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link sidebar-link text-danger">
                                    <i class="bi bi-box-arrow-right text-danger"></i>
                                    <span>Keluar</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @if (Session::has('error'))
            <div class="alert alert-danger d-flex align-items-center shadow p-3 mb-3" style="background: linear-gradient(135deg, #ff7f7f, #ff4d4d); color: #fff; border-radius: 20px; border: 2px solid #ff4d4d;">
                <i class="bi bi-exclamation-triangle-fill me-3 fs-4" style="margin-top: -20px;"></i>
                <div>
                    <h5 class="mb-1">🚨 Oops! Terjadi Kesalahan</h5>
                    <p class="mb-0">⚠️ {{ Session::get('error') }}</p>
                </div>
            </div>
            @endif

            @if (Session::has('success'))
            <div class="alert alert-success d-flex align-items-center shadow p-3 mb-3" style="background: linear-gradient(135deg, #66cc66, #33b233); color: #fff; border-radius: 20px; border: 2px solid #33b233;">
                <i class="bi bi-check-circle-fill me-3 fs-4" style="margin-top: -20px;"></i>
                <div>
                    <h5 class="mb-1">🌟 Yeay! Berhasil</h5>
                    <p class="mb-0">✅ {{ Session::get('success') }}</p>
                </div>
            </div>
            @endif

             <div class="page-heading d-flex align-items-center pb-3 border-bottom">
                <i class="bi bi-house-door me-2 fs-3 text-primary" style="margin-top: -30px; padding-right: 30px;"></i>
                <h5 class="mb-0 fw-bold">Selamat Datang, Admin</h5>
            </div>

            <div class="container mt-4" style="font-size: .7rem;">
                <div class="container mt-5">
                    <div class="row">
                        <!-- Kartu Profil -->
                        <div class="col-md-4">
                            <div class="card shadow p-4" style="border: none; border-radius: 12px; border: 1px solid #435ebe;">
                                <div class="text-center">
                                    <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" alt="Foto Profil" class="rounded-circle" style=" width: 150px; height: 150px; object-fit: cover;">
                                    <h4 class="fw-bold" style="margin-top: 10px;"> {{ Auth::user()->fullname }}</h4>
                                    <p class="text-muted" style="font-size: 1.2rem;">Role : {{ Auth::user()->role }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Informasi Detail Profil -->
                        <div class="col-md-8">
                            <div class="card shadow p-4" style="border: 1px solid #435ebe;">
                                <h5 class="fw-bold mb-3">Informasi Akun</h5>
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Nama Lengkap
                                        <span>{{ Auth::user()->fullname }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Email
                                        <span>{{ Auth::user()->email }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        No Telepon
                                        <span>{{ Auth::user()->phone }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Alamat
                                        <span>{{ Auth::user()->address }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Bergabung Sejak
                                        <span>{{ Auth::user()->created_at->translatedFormat('d F Y') }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Terakhir Di Perbarui
                                        <span>{{ Auth::user()->updated_at ? Auth::user()->updated_at->translatedFormat('d F Y') : 'Belum ada pembaruan' }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card shadow p-4 text-center position-relative" style="border-radius: 12px; color: #435ebe; border: 1px solid #435ebe;">
                            <h5 class="fw-bold text-primary">
                                <i class="bi  bi-bank me-2"></i>Total Keuangan
                            </h5>
                            <h1 class="fw-bold" id="animatedAmount" style="color: #28a745;">Rp 0</h1>
                            <p class="text-secondary" style="font-size: 1rem;">Total saldo keuangan saat ini</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Statistik Keuangan (Bar Chart) -->
                    <div class="col-md-8">
                        <div class="card shadow p-4" style="border: 1px solid #435ebe; height: 580px;">
                            <h5 class="fw-bold d-flex align-items-center">
                                <i class="bi bi-graph-up me-2 text-primary" style="margin-top: -15px; padding-right:20px;"></i> Statistik Keuangan
                            </h5>
                            <canvas id="barChart" class="mt-2" style="max-height: 450px;"></canvas>
                            <p class="text-muted  text-center" style="font-size: 13px;">
                                <i class="bi bi-calendar3"></i> Direset per bulan
                            </p>
                        </div>
                    </div>

                    <!-- 3 Card di Kiri, Tinggi Sama dengan Bar Chart -->
                    <div class="col-md-4 d-flex flex-column">
                        <div class="card shadow p-3 flex-fill" style="border-left: 5px solid #007bff; border-radius: 10px;">
                            <div class="card-body text-center">
                                <h6 style="color: #007bff;"><i class="bi bi-people-fill me-2"></i>Total Simpanan Anggota</h6>
                                <h4 class="text-success">Rp {{ number_format($SeluruhtotalSimpananAnggota, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                        <div class="card shadow p-3 flex-fill mt-2" style="border-left: 5px solid #28a745; border-radius: 10px;">
                            <div class="card-body text-center">
                                <h6 style="color: #28a745;"><i class="bi bi-wallet2 me-2"></i>Total Simpanan Wajib</h6>
                                <h4 class="text-success">Rp {{ number_format($SeluruhtotalSimpananWajib, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                        <div class="card shadow p-3 flex-fill mt-2" style="border-left: 5px solid #ffc107; border-radius: 10px;">
                            <div class="card-body text-center">
                                <h6 style="color: #ffc107;"><i class="bi bi-piggy-bank me-2"></i>Total Simpanan Sukarela</h6>
                                <h4 class="text-success">Rp {{ number_format($SeluruhtotalSimpananSukarela, 0, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>

                    <!-- 4 Card di Bawah (Lebarnya Sama dengan Konten Atas) -->
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card shadow p-3" style="border-left: 5px solid #dc3545; border-radius: 10px;">
                                    <div class="card-body text-center">
                                        <h6 style="color: #dc3545;"><i class="bi bi-cash-stack me-2"></i>Total Pinjaman</h6>
                                        <h4 class="text-success">Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow p-3" style="border-left: 5px solid #17a2b8; border-radius: 10px;">
                                    <div class="card-body text-center">
                                        <h6 style="color: #17a2b8;"><i class="bi bi-cash-coin me-2"></i>Total Angsuran</h6>
                                        <h4 class="text-success">Rp {{ number_format($totalAngsuran, 0, ',', '.') }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card shadow p-3" style="border-left: 5px solid #fd7e14; border-radius: 10px;">
                                    <div class="card-body text-center">
                                        <h6 style="color: #fd7e14;"><i class="bi bi-exclamation-triangle me-2"></i>Total Denda</h6>
                                        <h4 class="text-success">Rp {{ number_format($totalDenda, 0, ',', '.') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 
                <!-- Grafik Pinjaman & Angsuran (100% Width, Lebih Tinggi) -->
                <div class="col-md-12 mt-3">
                    <div class="card shadow p-4" style="border: 1px solid #435ebe; height: 500px;">
                        <h5 class="text-center">Grafik Pinjaman & Angsuran</h5>
                        <canvas id="lineChart" style="max-height: 450px;"></canvas>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2025 &copy; STARBIN</p>
                    </div>
                    <div class="float-end" style="margin-right: 30px;">
                        <p>Dibuat dengan
                            <span class="text-danger"><i class="bi bi-heart"></i></span>
                            oleh
                            <a href="https://bagas2908.github.io/Portofolio-Bagas-Adi/" target="_blank"> Bagas</a>
                            &
                            <a href="https://fahri-ui.github.io/Personal-Website-fahri/" target="_blank"> Fahri</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('admin-page/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin-page/assets/js/app.js')}}"></script>
    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Pastikan data dari backend tersedia
            let pinjamanData = {!! json_encode($pinjamanBulanan) !!};
            let angsuranData = {!! json_encode($angsuranBulanan) !!};
            let totalSimpananWajib = {{ $totalSimpananWajib }};
            let totalSimpananSukarela = {{ $totalSimpananSukarela }};
            let totalSimpananAnggota = {{ $totalSimpananAnggota }};
            let totalPinjaman = {{ $totalPinjaman }};
            let totalAngsuran = {{ $totalAngsuran }};
            let totalDenda = {{ $totalDenda }};

            // Ambil label bulan dan data hanya yang memiliki nilai
            let labelsBulan = Object.keys(pinjamanData); 
            let pinjamanValues = Object.values(pinjamanData);
            let angsuranValues = Object.values(angsuranData);

            // **LINE CHART** Pinjaman, Denda, Angsuran
            new Chart(document.getElementById("lineChart"), {
                type: "line",
                data: {
                    labels: labelsBulan, 
                    datasets: [
                        {
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
                        },
                        {
                            label: "Denda",
                            data: Array(labelsBulan.length).fill(totalDenda / labelsBulan.length),
                            backgroundColor: "rgba(255, 99, 132, 0.2)",
                            borderColor: "rgba(255, 99, 132, 1)",
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
                                return context.datasetIndex === 0 ? "#007bff" : context.datasetIndex === 1 ? "#ff9f40" : "#ff6384";
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

            // **BAR CHART** Simpanan Anggota, Wajib, Sukarela
            new Chart(document.getElementById("barChart"), {
                type: "bar",
                data: {
                    labels: ["Simpanan Anggota", "Simpanan Wajib", "Simpanan Sukarela"],
                    datasets: [{
                        data: [totalSimpananAnggota, totalSimpananWajib, totalSimpananSukarela],
                        backgroundColor: ["#435ebe", "#4CAF50", "#FF9800"],
                        borderColor: ["#435ebe", "#4CAF50", "#FF9800"],
                        borderWidth: 1
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
                            display: false // Menghilangkan label "Nominal (Rp)"
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
         // Animasi angka berjalan
        function animateValue(id, start, end, duration) {
            let obj = document.getElementById(id);
            let range = end - start;
            let current = start;
            let increment = range / (duration / 50);
            let stepTime = 50;
            let timer = setInterval(function () {
                current += increment;
                obj.innerHTML = "Rp " + new Intl.NumberFormat('id-ID').format(Math.floor(current));
                if (current >= end) {
                    clearInterval(timer);
                    obj.innerHTML = "Rp " + new Intl.NumberFormat('id-ID').format(end);
                }
            }, stepTime);
        }
        
        // Jalankan animasi setelah halaman selesai dimuat
        document.addEventListener("DOMContentLoaded", function () {
            animateValue("animatedAmount", 0, {{ $totalKeuangan }}, 2000);
        });
    </script>

</body>

</html>