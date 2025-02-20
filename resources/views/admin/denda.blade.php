<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Koperasi STARBIN</title>

    <link rel="stylesheet" href="{{ asset('admin-page/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/css/denda.css') }}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo" style="width: 50px; height: 50px; margin-left: 15%;">
                            <img src="{{ asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" alt="Logo" srcset="" style="width: 100%; height: 100%; object-fit: cover;">
                            <h6 style="margin-top: 5px; margin-left: -15%;">Koperasi</h6>
                            <h5 style="margin-left: -35%; margin-top: -20%; ">STARBIN</h5>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu" style="margin-left: -10px;">
                    <ul class="menu">
                        <li class="sidebar-title" style="margin-top: 70px;">Menu</li>
                        <li
                            class="sidebar-item ">
                            <a href="{{route('min')}}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="{{route('profiladmin')}}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item ">
                            <a href="{{route('dataanggota')}}" class='sidebar-link'>
                                <i class="bi bi-person-lines-fill"></i>
                                <span>Data Anggota</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-wallet-fill"></i>
                                <span>Simpanan</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('simpananwajibadmin')}}">Simpanan Wajib</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('simpanansukarelaadmin')}}">Simpanan Sukarela</a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="{{route('pinjamanadmin')}}" class='sidebar-link'>
                                <i class="bi bi-cash-stack"></i>
                                <span>Pinjaman</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item ">
                            <a href="{{route('angsuran')}}" class='sidebar-link'>
                                <i class="bi bi-coin"></i>
                                <span>Angsuran</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item active">
                            <a href="{{route('denda')}}" class='sidebar-link'>
                                <i class="bi bi-exclamation-circle"></i>
                                <span>Denda</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ route('pangajuan') }}" class="sidebar-link">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Data Pengajuan</span>
                                @if ($jumlahPengajuanDalamProses > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $jumlahPengajuanDalamProses }}
                                    <span class="visually-hidden">pengajuan dalam proses</span>
                                </span>
                                @endif
                            </a>
                        </li>


                        <li
                            class="sidebar-item  ">
                            <a href="{{route('statistikkeuangan')}}" class='sidebar-link'>
                                <i class="bi bi-bar-chart-line-fill"></i>
                                <span>Statistik Keuangan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('admin.sharemassage') }}" class="sidebar-link">
                                <i class="bi bi-send"></i>
                                <span>Kelola Pesan</span>
                            </a>
                        </li>
                        <li class="nav-item sidebar-item position-relative">
                            <a href="{{ route('notifikasiadmin') }}" class="nav-link sidebar-link">
                                <i class="bi bi-bell-fill"></i>
                                <span>Notifikasi</span>
                                @if ($jumlahNotifikasiBaru > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $jumlahNotifikasiBaru }}
                                    <span class="visually-hidden">notifikasi baru</span>
                                </span>
                                @endif
                            </a>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="{{route('laporan')}}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-bar-graph-fill"></i>
                                <span>Laporan</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="margin-left: -10px; margin-top:30px;">
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-link sidebar-link" style="padding: 0; color: inherit; text-decoration: none;">
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <span>Log Out</span>
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
            <div class="container mt-4" style="font-size: .9rem;">
                <h4>Laporan Denda Pinjaman</h4>
                <p>Halaman ini menampilkan daftar anggota yang memiliki denda akibat keterlambatan pembayaran pinjaman.</p>

                <div class="container mt-4">
                    <h4>Ringkasan Denda</h4>
                    <div class="row text-center">
                        <!-- Total Denda Keseluruhan -->
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6>Total Denda Keseluruhan</h6>
                                    <p><strong>Rp {{ number_format($totalDenda, 0, ',', '.') }}</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6>Total Pinjaman Bermasalah</h6>
                                    <p><strong>{{ $jumlahPinjamanBermasalah }} Pinjaman</strong></p>
                                </div>
                            </div>
                        </div>

                        <!-- Total Anggota Kena Denda -->
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h6>Total Anggota Kena Denda</h6>
                                    <p><strong>{{ $jumlahAnggotaDenda }} Anggota</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Filter Pencarian -->
                <div class="filter-denda mb-4">
                    <input type="text" id="search-denda" class="form-control" placeholder="Cari berdasarkan Nama, ID Pinjaman, atau Status">
                </div>

                <!-- Detail Laporan Denda -->
                <div class="card">
                    <div class="card-body">
                        <h5>Detail Laporan Denda</h5>
                        <div style="max-height: 450px; overflow:auto;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Anggota</th>
                                        <th>ID Pinjaman</th>
                                        <th>Tanggal Jatuh Tempo</th>
                                        <th>Jumlah Pinjaman</th>
                                        <th>Denda</th>
                                        <th>Total Bayar</th>
                                        <th>Sisa Angsuran</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="denda-table-body">
                                    @foreach($laporanDenda as $index => $data)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->id_pinjaman }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_jatuh_tempo)->format('d M Y') }}</td>
                                        <td>Rp {{ number_format($data->jumlah_pinjaman, 0, ',', '.') }}</td>
                                        <td>Rp {{ number_format($data->denda, 0, ',', '.') }}</td>
                                        <td>Rp {{ number_format($data->total_bayar, 0, ',', '.') }}</td>
                                        <td>Rp {{ number_format($data->sisa_angsuran, 0, ',', '.') }}</td>
                                        <td>{{ ucfirst($data->status) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted" style="margin-top: 365px;">
                    <div class="float-start">
                        <p>2025 &copy; STARBIN</p>
                    </div>
                    <div class="float-end" style="margin-right: 30px;">
                        <p>Dibuat dengan <span class="text-danger"><i class="bi bi-heart"></i></span> oleh <a
                                href="https://saugi.me">Bagas & Fahri</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('admin-page/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin-page/assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("search-denda");
            const tableRows = document.querySelectorAll("#denda-table-body tr");

            searchInput.addEventListener("keyup", function() {
                let filter = searchInput.value.toLowerCase();

                tableRows.forEach(row => {
                    let nama = row.cells[1].textContent.toLowerCase();
                    let idPinjaman = row.cells[2].textContent.toLowerCase();
                    let status = row.cells[7].textContent.toLowerCase();

                    if (nama.includes(filter) || idPinjaman.includes(filter) || status.includes(filter)) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        });
    </script>
</body>

</html>