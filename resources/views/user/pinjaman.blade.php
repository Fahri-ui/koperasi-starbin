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
    <link rel="stylesheet" href="{{ asset('dashboard-user/assets/css/css-pinjaman/style.css') }}">
    
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

            <li class="sidebar-item">
                <a href="{{route('simpanan')}}" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Simpanan</span>
                </a>
            </li>

            <li class="sidebar-item active ">
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
    <h3>Pinjaman</h3>
</div>
<div class="header-pinjaman">
    <h1>Pinjaman Anda</h1>
    <p>Kelola dan lihat informasi pinjaman Anda dengan mudah.</p>
</div>
<div class="riwayat-pinjaman">
    <h2>Riwayat Pinjaman</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nominal</th>
                <th>Jangka Waktu</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>10 Jan 2025</td>
                <td>Rp5.000.000</td>
                <td>12 Bulan</td>
                <td>Lunas</td>
            </tr>
            <tr>
                <td>2</td>
                <td>15 Jan 2025</td>
                <td>Rp10.000.000</td>
                <td>24 Bulan</td>
                <td>Belum Lunas</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="pinjaman-aktif">
    <h2>Pinjaman Aktif</h2>
    <div class="card">
        <p><strong>Nominal:</strong> Rp10.000.000</p>
        <p><strong>Tanggal Pengajuan:</strong> 15 Jan 2025</p>
        <p><strong>Sisa Cicilan:</strong> Rp6.000.000</p>
        <p><strong>Status:</strong> Belum Lunas</p>
    </div>
</div>
<div class="form-pinjaman">
    <h2>Ajukan Pinjaman Baru</h2>
    <form action="/ajukan-pinjaman" method="POST">
        <input type="number" name="nominal" placeholder="Nominal Pinjaman (Rp)" required>
        <select name="jangka-waktu" required>
            <option value="" disabled selected>Pilih Jangka Waktu</option>
            <option value="6">6 Bulan</option>
            <option value="12">12 Bulan</option>
            <option value="24">24 Bulan</option>
        </select>
        <textarea name="alasan" placeholder="Alasan Pinjaman" required></textarea>
        <button type="submit">Ajukan Pinjaman</button>
    </form>
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
