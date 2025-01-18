<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    
    <link rel="stylesheet" href="{{ asset('dashboard-user/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-user/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('dashboard-user/assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dashboard-user/assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('dashboard-user/assets/css/css-simpanan/style.css') }}">
    
<link rel="stylesheet" href="{{ asset('dashboard-user/assets/css/shared/iconly.css') }}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <h1>STARBIN</h1>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item  ">
                <a href="{{route('user')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a href="{{route('profil')}}" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Profil</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a href="{{route('simpanan')}}" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Simpanan</span>
                </a>
            </li>

            <li class="sidebar-item  ">
                <a href="{{route('pinjaman')}}" class='sidebar-link'>
                    <i class="bi bi-basket-fill"></i>
                    <span>Pinjaman</span>
                </a>
            </li>
            
            
            <li class="sidebar-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="sidebar-link" style="background: none; border: none; cursor: pointer;">
                        <i class="bi bi-x-octagon-fill"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>

            @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <ul>
                        <li>{{ Session::get('success') }}</li>
                    </ul>
                </div>
            @endif

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
            
<div class="page-heading">
    <h3>Simpanan</h3>
</div>
<div class="simpanan-info">
    <h1>Informasi Simpanan</h1>
    <div class="summary">
        <p><strong>Total Simpanan:</strong> Rp10.000.000</p>
        <p><strong>Jenis Simpanan:</strong> Simpanan Berjangka</p>
        <p><strong>Status:</strong> Aktif</p>
    </div>
</div>
<div class="simpanan-history">
    <h1>Riwayat Simpanan</h1>
    <table>
        <tr>
            <th>Tanggal</th>
            <th>Nominal</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>12 Jan 2025</td>
            <td>Rp1.000.000</td>
            <td>Setoran Bulanan</td>
        </tr>
        <tr>
            <td>10 Des 2024</td>
            <td>Rp500.000</td>
            <td>Setoran Tambahan</td>
        </tr>
    </table>
</div>
<div class="cta-buttons">
    <button>Tambah Simpanan</button>
    <button>Detail Simpanan</button>
</div>

<div class="simpanan-chart">
    <h1>Grafik Perkembangan Simpanan</h1>
    <canvas id="simpananChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('simpananChart').getContext('2d');
    const simpananChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Simpanan (Rp)',
                data: [1000000, 1500000, 2000000, 3000000, 4000000, 5000000],
                backgroundColor: 'rgba(255, 77, 77, 0.2)',
                borderColor: 'rgba(255, 77, 77, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<div class="tips-section">
    <h1>Tips Keuangan dan Informasi</h1>
    <ul>
        <li><strong>Tips:</strong> Sisihkan 20% pendapatan untuk tabungan.</li>
        <li><strong>Berita:</strong> Bunga simpanan naik menjadi 5% mulai bulan depan.</li>
        <li><strong>Info:</strong> Setoran minimum bulanan adalah Rp500.000.</li>
    </ul>
</div>
<div class="latest-simpanan">
    <h1>Simpanan Terbaru</h1>
    <div class="card">
        <p><strong>Tanggal:</strong> 15 Jan 2025</p>
        <p><strong>Nominal:</strong> Rp1.000.000</p>
        <p><strong>Keterangan:</strong> Setoran Bulanan</p>
    </div>
</div>

<div class="quick-nav">
    <!-- <button onclick="window.location.href='/laporan'">Lihat Laporan Simpanan</button> -->
    <button onclick="window.location.href='/pinjaman'">Ajukan Pinjaman</button>
</div>



            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p> &copy; 2025 Koperasi Starbin</p>
                    </div>
                    <div class="float-end">
                        <p>Dibuat Dengan <span class="text-danger"><i class="bi bi-heart"></i></span> oleh Bagas & Fahri</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('dashboard-user/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard-user/assets/js/app.js') }}"></script>
    
<!-- Need: Apexcharts -->
<script src="{{ asset('dashboard-user/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('dashboard-user/assets/js/pages/dashboard.js') }}"></script>

</body>

</html>
