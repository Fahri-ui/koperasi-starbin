<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angsuran Koperasi STARBIN</title>

    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/angsuran.css')}}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative hidden-content">
                    <div class="user-info text-center mt-3 pb-3">
                        <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" class="rounded-circle hidden-content" alt="User Avatar" style="width: 90px; height: 90px; object-fit: cover;">
                        <h3 class="mt-2 mb-0 hidden-content">{{ Auth::user()->fullname }}</h3>
                        <small class="text-muted hidden-content">Admin</small>
                    </div>
                </div>

                <div class="sidebar-footer d-flex align-items-center justify-content-between py-3 border-bottom hidden-content">
                    <!-- Logo & Nama Koperasi -->
                    <div class="d-flex align-items-center ms-3 hidden-content">
                        <div class="logo" style="width: 40px; height: 40px;">
                            <img src="{{ asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-0 text-muted" style="font-size: 12px;">Koperasi</h6>
                            <h5 class="mb-0 text-primary fw-bold" style="font-size: 14px;">STARBIN</h5>
                        </div>
                    </div>

                    <!-- Theme Toggle -->
                    <div class="theme-toggle d-flex align-items-center gap-2 me-3 hidden-content">
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
                        <li class="hidden-content sidebar-title border-bottom pb-2 text-uppercase text-secondary fw-bold fs-6 pt-3">Menu Utama</li>
                        <li class="sidebar-item  hidden-content">
                            <a href="{{ route('min') }}" class="sidebar-link">
                                <i class="bi bi-house-door-fill"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-4 hidden-content">
                            <a href="{{ route('profiladmin') }}" class="sidebar-link">
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <!-- PENGELOLAAN DATA -->
                        <li class="hidden-content sidebar-title border-top border-bottom pb-2 pt-3 mt-4 text-uppercase text-secondary fw-bold fs-6">Pengelolaan Data</li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('dataanggota') }}" class="sidebar-link">
                                <i class="bi bi-person-lines-fill"></i>
                                <span>Data Anggota</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub hidden-content">
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
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('pinjamanadmin') }}" class="sidebar-link">
                                <i class="bi bi-cash-stack"></i>
                                <span>Data Pinjaman</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('dataangsuran') }}" class="sidebar-link">
                                <i class="bi bi-arrow-repeat"></i>
                                <span>Data Angsuran</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('denda') }}" class="sidebar-link">
                                <i class="bi bi-exclamation-circle"></i>
                                <span>Data Denda Pinjaman</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
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
                        <li class="sidebar-item hidden-content">
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
                        <li class="sidebar-item active hidden-content">
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
                        <li class="hidden-content sidebar-title border-top border-bottom pb-2 pt-3 mt-4 text-uppercase text-secondary fw-bold fs-6">Komunikasi</li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('kontakkoperasi') }}" class="sidebar-link">
                                <i class="bi bi-envelope-paper"></i>
                                <span>Kelola Kontak Koperasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('sosmed') }}" class="sidebar-link">
                                <i class="bi bi-link-45deg"></i>
                                <span>Kelola Sosial Media</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('admin.sharemassage') }}" class="sidebar-link">
                                <i class="bi bi-send"></i>
                                <span>Kelola Pesan</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
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
                        <li class="sidebar-item border-top pt-3 mt-4 hidden-content">
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
            <div class="flash-message alert alert-danger shadow p-3 mb-3"
                style="background: linear-gradient(135deg, #ff7f7f, #ff4d4d); color: #fff; border-radius: 20px; border: 2px solid #ff4d4d; position: relative;">
                <div class="d-flex align-items-start">
                    <i class="bi bi-exclamation-triangle-fill me-3 fs-4 mt-1"></i>
                    <div>
                        <h5 class="mb-1">🚨 Oops! Terjadi Kesalahan</h5>
                        <p class="mb-0">⚠️ {{ Session::get('error') }}</p>
                    </div>
                </div>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                    onclick="this.parentElement.style.display='none';" aria-label="Close"></button>
            </div>
            @endif

            @if (Session::has('success'))
            <div class="flash-message alert alert-success shadow p-3 mb-3"
                style="background: linear-gradient(135deg, #66cc66, #33b233); color: #fff; border-radius: 20px; border: 2px solid #33b233; position: relative;">
                <div class="d-flex align-items-start">
                    <i class="bi bi-check-circle-fill me-3 fs-4 mt-1"></i>
                    <div>
                        <h5 class="mb-1">🌟 Yeay! Berhasil</h5>
                        <p class="mb-0">✅ {{ Session::get('success') }}</p>
                    </div>
                </div>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3"
                    onclick="this.parentElement.style.display='none';" aria-label="Close"></button>
            </div>
            @endif
            <div class="container mt-4">
                <div class="page-header mb-4 hidden-content-right">
                    <h3 class="fw-bold">
                        <i class="bi bi-clipboard-check"></i> Kelola Persetujuan Angsuran
                    </h3>
                </div>
                <hr style="border-top: 2px solid black; margin-bottom: 30px;">

                <section class="mb-4">
                    <div class="card shadow hidden-content-right" style="border: 1px solid #435ebe;">
                        <div class="card-body">
                            <h5 class="fw-bold d-flex align-items-center hidden-content-right">
                                <i class="bi bi-info-circle me-2" style="margin-top: -10px;"></i> Deskripsi
                            </h5>
                            <hr style="border-top: 2px solid #25396f; border-radius: 5px;">
                            <p class="hidden-content-right">
                                Halaman ini digunakan untuk mengelola pengajuan Angsuran. Di dalamnya terdapat daftar pengajuan, status persetujuan. Admin dapat menyetujui, atau menolak pengajuan sesuai kebijakan yang berlaku.
                                <br><br>
                                Catatan : Semua data yang tampil dihalaman ini <span class="badge bg-info">Di reset setiap hari</span>
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Statistik Ringkasan -->
                <section class="mb-4 hidden-content-right">
                    <div class="card shadow hidden-content-right" style="border: 1px solid #435ebe;">
                        <div class="card-body hidden-content-right">
                            <h5 class="fw-bold d-flex align-items-center hidden-content-right">
                                <i class="bi bi-bar-chart-line me-2" style="margin-top: -10px;"></i> Statistik Ringkasan Angsuran
                            </h5>
                            <hr style="border-top: 2px solid #25396f; border-radius: 5px;">

                            <div class="row hidden-content-right">
                                <div class="col-md-4">
                                    <div class="card shadow" style="border-left: 5px solid #28a745; border-radius: 10px;">
                                        <div class="card-body text-center">
                                            <h6 style="color: #28a745;"><i class="bi bi-check-circle me-2"></i>Total Angsuran Disetujui</h6>
                                            <p><strong>Rp {{ number_format($totalDisetujui, 0, ',', '.') }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow" style="border-left: 5px solid #ffc107; border-radius: 10px;">
                                        <div class="card-body text-center">
                                            <h6 style="color: #ffc107;"><i class="bi bi-hourglass-split me-2"></i>Total Angsuran Tertunda</h6>
                                            <p><strong>Rp {{ number_format($totalTertunda, 0, ',', '.') }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow" style="border-left: 5px solid #007bff; border-radius: 10px;">
                                        <div class="card-body text-center">
                                            <h6 style="color: #007bff;"><i class="bi bi-list-ol me-2"></i>Jumlah Transaksi Angsuran</h6>
                                            <p><strong>{{ number_format($jumlahTransaksi, 0, ',', '.') }} Transaksi</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <!-- Tabel Persetujuan -->
                <section class="mb-4 hidden-content-right">
                    <div class="card shadow hidden-content-right" style="border: 1px solid #435ebe;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 text-white">
                                <i class="bi bi-table" style="margin-top: -30px;"></i> Data Angsuran untuk Persetujuan
                            </h5>
                        </div>
                        <div class="card-body hidden-content-right">
                            <div style="max-height: 1000px; overflow: auto; font-size: .8rem; text-align: left;">
                                <table class="table table-hover hidden-content-right">
                                    <thead class="table-primary hidden-content-right">
                                        <tr>
                                            <th>No</th>
                                            <th>ID Pinjaman</th>
                                            <th>Nama</th>
                                            <th>Nominal</th>
                                            <th>Tanggal</th>
                                            <th>Sisa Angsuran</th>
                                            <th>Sisa Denda</th>
                                            <th>Metode</th>
                                            <th>Bukti</th>
                                            <th>Status</th>
                                            <th>Aksi Admin</th>
                                        </tr>
                                    </thead>
                                    <tbody class="hidden-content-right">
                                        @forelse ($angsuran as $index => $data)
                                        <tr>
                                            <td class="hidden-content-right">{{ $index + 1 }}</td>
                                            <td class="hidden-content-right">{{ $data->pinjaman_id }}</td>
                                            <td class="hidden-content-right">{{ $data->user->fullname }}</td>
                                            <td class="hidden-content-right">
                                                <span class="badge bg-success">
                                                    Rp {{ number_format($data->jumlah_pembayaran, 0, ',', '.') }}
                                                </span>
                                            </td>
                                            <td class="hidden-content-right">{{ \Carbon\Carbon::parse($data->tanggal_bayar)->format('d-m-Y') }}</td>
                                            <td class="hidden-content-right">
                                                <span class="badge {{ $data->pinjaman->sisa_angsuran > 0 ? 'bg-warning' : 'bg-primary' }}">
                                                    {{ $data->pinjaman->sisa_angsuran > 0 ? 'Rp ' . number_format($data->pinjaman->sisa_angsuran, 0, ',', '.') : 'Sudah Lunas' }}
                                                </span>
                                            </td>
                                            <td class="hidden-content-right">
                                                <span class="badge {{ $data->pinjaman->total_denda > 0 ? 'bg-danger' : 'bg-primary' }}">
                                                    Rp {{ number_format($data->pinjaman->total_denda, 0, ',', '.') }}
                                                </span>
                                            </td>
                                            <td class="hidden-content-right">{{ $data->metode_pembayaran }}</td>
                                            <td class="hidden-content-right">
                                                @if(!empty($data->bukti_pembayaran))
                                                <a href="{{ route('admin.bukti.pembayaran', ['bukti' => basename($data->bukti_pembayaran)]) }}" target="_blank" class="btn btn-sm btn-outline-info">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                @else
                                                <span class="badge bg-secondary">Tidak Ada</span>
                                                @endif
                                            </td>
                                            <td class="hidden-content-right">
                                                @php
                                                $statusColors = [
                                                'Dalam Proses' => 'warning',
                                                'Ditolak' => 'danger',
                                                'Berhasil' => 'success'
                                                ];
                                                $badgeColor = $statusColors[$data->status] ?? 'secondary';
                                                @endphp
                                                <span class="badge bg-{{ $badgeColor }}">{{ $data->status }}</span>
                                            </td>
                                            <td class="hidden-content-right">
                                                @if($data->status === 'Dalam Proses')
                                                <form action="{{ route('admin.setujui.angsuran', $data->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">Setujui</button>
                                                </form>
                                                <form action="{{ route('admin.tolak.angsuran', $data->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                                                </form>
                                                @else
                                                <span class="text-muted">Tidak Ada Aksi</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td class="hidden-content-right" colspan="12" style="text-align: center;">
                                                <span class="badge bg-warning">
                                                    <i class="bi bi-exclamation-circle"></i> Tidak ada riwayat pinjaman.
                                                </span>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted hidden-content-right">
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const hiddenElements = document.querySelectorAll(".hidden-content");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show-content");
                    } else {
                        entry.target.classList.remove("show-content"); // Sembunyikan kembali saat keluar dari layar
                    }
                });
            }, {
                threshold: 0.2
            });

            hiddenElements.forEach(el => observer.observe(el));
        });
    </script>

    <style>
        .hidden-content {
            opacity: 0;
            transform: translateX(-50px);
            /* Awalnya elemen bergeser ke kiri */
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .show-content {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const rightHiddenElements = document.querySelectorAll(".hidden-content-right");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show-content-right");
                    } else {
                        entry.target.classList.remove("show-content-right"); // Sembunyikan kembali saat keluar dari layar
                    }
                });
            }, {
                threshold: 0.2
            });

            rightHiddenElements.forEach(el => observer.observe(el));
        });
    </script>

    <style>
        .hidden-content-right {
            opacity: 0;
            transform: translateX(50px);
            /* Awalnya elemen bergeser ke kanan */
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .show-content-right {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
    <script>
        setTimeout(() => {
            document.querySelectorAll('.flash-message').forEach(el => {
                el.style.transition = "opacity 0.5s ease";
                el.style.opacity = "0";
                setTimeout(() => el.remove(), 500); // hapus elemen dari DOM setelah transisi
            });
        }, 5000); // auto hide setelah 5 detik
    </script>

</body>

</html>