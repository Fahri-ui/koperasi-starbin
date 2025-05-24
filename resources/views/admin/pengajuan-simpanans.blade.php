<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pengajuan Koperasi STARBIN</title>

    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/data-pengajuan.css')}}">

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
                        <li class="sidebar-item ">
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
                        <li class="sidebar-item active">
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
                        <li class="sidebar-item ">
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
            <div class="container mt-4">
                <div class="page-header mb-4">
                    <h3 class="fw-bold">
                        <i class="bi bi-clipboard-check"></i> Kelola Pengajuan Simpanan
                    </h3>
                </div>
                <hr style="border-top: 2px solid black; margin-bottom: 30px;">

                <!-- Ringkasan Pengajuan -->
                <section class="mb-4">
                    <div class="card shadow" style="border: 1px solid #435ebe;">
                        <div class="card-body">
                            <h5 class="fw-bold d-flex align-items-center">
                                <i class="bi bi-journal-text me-2" style="margin-top: -10px;"></i> Ringkasan Pengajuan Simpanan
                            </h5>
                            <hr style="border-top: 2px solid #25396f; border-radius: 5px;">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card shadow" style="border-left: 5px solid #007bff; border-radius: 10px;">
                                        <div class="card-body text-center">
                                            <h6 style="color: #007bff;"><i class="bi bi-list-ul me-2"></i>Total Pengajuan</h6>
                                            <p><strong>{{ $totalPengajuan }} Pengajuan</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow" style="border-left: 5px solid #ffc107; border-radius: 10px;">
                                        <div class="card-body text-center">
                                            <h6 style="color: #ffc107;"><i class="bi bi-hourglass-split me-2"></i>Menunggu</h6>
                                            <p><strong>{{ $menunggu }} Pengajuan</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow" style="border-left: 5px solid #28a745; border-radius: 10px;">
                                        <div class="card-body text-center">
                                            <h6 style="color: #28a745;"><i class="bi bi-check-circle me-2"></i>Disetujui</h6>
                                            <p><strong>{{ $disetujui }} Pengajuan</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card shadow" style="border-left: 5px solid #dc3545; border-radius: 10px;">
                                        <div class="card-body text-center">
                                            <h6 style="color: #dc3545;"><i class="bi bi-x-circle me-2"></i>Ditolak</h6>
                                            <p><strong>{{ $ditolak }} Pengajuan</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Tabel Pengajuan -->
                <section class="mb-4">
                    <div class="card shadow" style="border: 1px solid #435ebe;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 text-white">
                                <i class="bi bi-table" style="margin-top: -30px;"></i> Data Pengajuan Simpanan
                            </h5>
                        </div>
                        <div class="card-body">
                            <div style="max-height: 750px; overflow:auto; font-size:.9rem;">
                                <table class="table table-hover">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Anggota</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Jumlah</th>
                                            <th>Metode</th>
                                            <th>Tipe Pengajuan</th>
                                            <th>Status</th>
                                            <th>Bukti</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanSimpanans as $key => $data)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $data->user->fullname }}</td>
                                            <td>{{ \Carbon\Carbon::parse($data->tanggal_transaksi)->format('Y-m-d') }}</td>
                                            <td>Rp {{ number_format($data->jumlah, 0, ',', '.') }}</td>
                                            <td>{{ $data->metode_pembayaran }}</td>
                                            <td>
                                                <span class="badge bg-secondary">
                                                    <i class="bi bi-wallet2"></i> Simpanan ({{ ucfirst($data->jenis) }})
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge bg-{{ $data->status == 'Dalam Proses' ? 'warning' : ($data->status == 'Berhasil' ? 'success' : 'danger') }}">
                                                    <i class="bi {{ $data->status == 'Dalam Proses' ? 'bi-hourglass-split' : ($data->status == 'Berhasil' ? 'bi-check-circle' : 'bi-x-circle') }}"></i> {{ $data->status }}
                                                </span>
                                            </td>
                                            <td>
                                                @if ($data->bukti)
                                                <a href="{{ route('admin.bukti.pembayaran', ['bukti' => basename($data->bukti)]) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                @else
                                                <span class="badge bg-danger">
                                                    <i class="bi bi-x-circle"></i> <br>
                                                </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($data->status == 'Dalam Proses')
                                                <form action="{{ route('updateStatusSimpanan', $data->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <input type="hidden" name="action" value="approve">
                                                    <button type="submit" class="btn btn-sm btn-success">
                                                        <i class="bi bi-check-lg"></i> Setujui
                                                    </button>
                                                </form>

                                                <form action="{{ route('updateStatusSimpanan', $data->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <input type="hidden" name="action" value="reject">
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-x-lg"></i> Tolak
                                                    </button>
                                                </form>
                                                @else
                                                <button class="btn btn-sm btn-secondary" disabled>
                                                    <i class="bi bi-lock"></i>
                                                </button>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>