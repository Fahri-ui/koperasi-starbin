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
    <link rel="stylesheet" href="{{ asset('dashboard-user/assets/css/css-profil/style.css') }}">
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

            <li class="sidebar-item active">
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
    <h3>Selamat Datang {{Auth::user()->fullname}}</h3>
</div>


<div class="head-profil">
    <div class="poto-user">
        <img src="{{asset('picture/account/'. Auth::user()->gambar)}}" alt="">
    </div>
    <span>
      <h1 class="username">{{Auth::user()->fullname}}</h1>
      <p class="email">{{Auth::user()->email}}</p>
      <p class="nomor">{{Auth::user()->phone}}</p>
      <p class="alamat">{{Auth::user()->address}}</p>
      <div class="clear"></div>
    </span>
    <div class="garis"></div>
</div>

<div class="profile-footer">
    <!-- Statistik Aktivitas -->
    <div class="user-stats">
        <h3>Aktivitas Anda</h3>
        <p><strong>Total Simpanan:</strong> Rp10.000.000</p>
        <p><strong>Total Pinjaman:</strong> Rp5.000.000</p>
        <p><strong>Tanggal Bergabung:</strong> 15 Januari 2025</p>
    </div>

    <!-- Riwayat Transaksi -->
    <div class="transaction-history">
        <h3>Riwayat Transaksi</h3>
        <table>
            <tr>
                <th>Tanggal</th>
                <th>Jenis</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td>12 Jan 2025</td>
                <td>Simpanan</td>
                <td>Rp500.000</td>
            </tr>
            <tr>
                <td>10 Jan 2025</td>
                <td>Pinjaman</td>
                <td>Rp1.000.000</td>
            </tr>
        </table>
    </div>

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
