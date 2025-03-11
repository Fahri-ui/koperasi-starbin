<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ringkasan Koperasi Anda</title>

    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/assets/css/dashboard.css')}}">

</head>

<style>
    .poto-profil {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        margin-bottom: 30px;
    }

    .poto-profil img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo" style="width: 50px; height: 50px; margin-left: 15%;">
                            <img src="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" alt="Logo" srcset="" style="width: 100%; height: 100%; object-fit: cover;">
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
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title" style="margin-top: 70px;">Menu</li>
                        <li
                            class="sidebar-item active">
                            <a href="{{route('user')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item ">
                            <a href="{{route('profil')}}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Simpanan</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('simpananwajib')}}">Simpanan Wajib</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('simpanansukarela')}}">Simpanan Sukarela</a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="sidebar-item  ">
                            <a href="{{route('pinjaman')}}" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Pinjaman</span>
                            </a>
                        </li>
                        <li class="nav-item sidebar-item position-relative">
                            <a href="{{ route('notifikasi') }}" class="nav-link sidebar-link">
                                <i class="bi bi-bell"></i>
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
                            <a href="{{route('bantuan')}}" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Bantuan</span>
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
            @if (auth()->user()->status === 'Belum_Aktif')

            <div class="container mt-4">
                <!-- Card Peringatan -->
                <div class="card shadow-sm mb-3">
                    <div class="card-body bg-warning text-dark">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-exclamation-triangle-fill me-2 fs-4"></i>
                            <div>
                                <strong>Akun Anda belum aktif!</strong> Untuk mengaktifkannya, silakan lakukan pembayaran simpanan anggota sesuai dengan ketentuan koperasi.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Form Pembayaran -->
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white;"><i class="bi bi-credit-card"></i> Pembayaran Simpanan Anggota</h5>
                    </div>
                    <div class="card-body" style="margin-top: 30px;">
                        <form action="{{ route('simpanan.bayar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nominal" class="form-label"><i class="bi bi-cash-stack"></i> Nominal Pembayaran</label>
                                <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Masukkan jumlah simpanan" min="500000" max="500000" required>
                            </div>

                            <div class="mb-3">
                                <label for="metode" class="form-label"><i class="bi bi-wallet2"></i> Metode Pembayaran</label>
                                <select id="metode" name="metode" class="form-select" required>
                                    <option value="cash">Tunai (Bayar Langsung)</option>
                                    <option value="bank">Transfer Bank</option>
                                    <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="payment-proof">Unggah Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send"></i> Bayar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>

            @elseif (auth()->user()->status === 'Ditolak')
            <div class="container mt-4">
                <!-- Card Peringatan Pengajuan Ditolak -->
                <div class="card shadow-sm mb-3">
                    <div class="card-body bg-danger text-white" style="padding: 30px; border-radius: 10px;">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-x-circle-fill me-4" style="font-size: 3rem; margin-top:-150px;"></i>
                            <div>
                                <strong style="font-size: 2.5rem; display: block; margin-bottom: 10px;">Pengajuan Anda Ditolak!</strong>
                                <p style="font-size: 1.2rem; line-height: 1.5; margin: 0;">
                                    Mohon maaf, pengajuan simpanan anggota Anda tidak dapat diproses. Silakan periksa kembali data yang Anda kirimkan atau lakukan pembayaran ulang sesuai ketentuan koperasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Form Pembayaran -->
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white;"><i class="bi bi-credit-card"></i> Pembayaran Simpanan Anggota</h5>
                    </div>
                    <div class="card-body" style="margin-top: 30px;">
                        <form action="{{ route('simpanan.bayar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nominal" class="form-label"><i class="bi bi-cash-stack"></i> Nominal Pembayaran</label>
                                <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Masukkan jumlah simpanan" min="500000" max="500000" required>
                            </div>

                            <div class="mb-3">
                                <label for="metode" class="form-label"><i class="bi bi-wallet2"></i> Metode Pembayaran</label>
                                <select id="metode" name="metode" class="form-select" required>
                                    <option value="cash">Tunai (Bayar Langsung)</option>
                                    <option value="bank">Transfer Bank</option>
                                    <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="payment-proof">Unggah Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send"></i> Bayar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>

            @elseif (auth()->user()->status === 'Pending')
            <div class="alert p-4 shadow" style="background-color: #435ebe; color: #fff; border-radius: 10px;">
                <div class="d-flex align-items-start">
                    <i class="bi bi-hourglass-split fs-1 me-3" style="color: #ffdd57; margin-top:-15px; padding-right:30px;"></i>
                    <div>
                        <h4 class="text-white">Status Pengajuan: <span class="badge" style="background-color: #ffdd57; color: #435ebe;">Pending</span></h4>
                        <p>Terima kasih telah mengajukan simpanan anggota. Formulir Anda sedang dalam proses verifikasi oleh admin.</p>
                        <p><i class="bi bi-clock"></i> Estimasi waktu persetujuan: <strong>3 hari kerja</strong></p>
                    </div>
                </div>
            </div>

            <div class="card mt-3 shadow text-center" style="border: 2px solid #435ebe; border-radius: 10px;">
                <div class="card-header" style="background-color: #435ebe; color: #fff;">
                    <h5 class="text-white">
                        <i class="bi bi-file-text text-white"></i> Detail Pengajuan
                    </h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Jenis Simpanan:</strong> {{ $simpanan->jenis ?? '-' }}</li>
                    <li class="list-group-item"><strong>Jumlah:</strong> Rp {{ number_format($simpanan->jumlah, 0, ',', '.') ?? '-' }}</li>
                    <li class="list-group-item"><strong>Kode Transaksi:</strong> {{ $simpanan->kode_transaksi ?? '-' }}</li>
                    <li class="list-group-item"><strong>Tanggal Transaksi:</strong>{{ \Carbon\Carbon::parse($simpanan->tanggal_pengajuan)->format('Y-m-d') }}</li>
                    <li class="list-group-item"><strong>Bukti Pembayaran:</strong>
                        @if($simpanan->bukti)
                        <a href="{{ route('bukti.pembayaran', ['bukti' => basename($simpanan->bukti)]) }}" target="_blank" class="btn btn-outline-primary btn-sm" style="border-color: #435ebe; color: #435ebe;">
                            <i class="bi bi-eye"></i> Lihat Bukti
                        </a>
                        @else
                        Tidak ada
                        @endif
                    </li>
                </ul>
            </div>

            @elseif (auth()->user()->status === 'Belum_Bayar_Simpanan_Wajib')
            <!-- Section Peringatan Keterlambatan -->
            <div class="card shadow-lg border-0 mb-4">
                <div class="card-body bg-warning text-dark" style="border-radius: 10px;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-info-circle-fill text-primary fs-1 me-3" style="margin-top:-20px;"></i>
                        <div>
                            <h4 class="fw-bold"> Peringatan: Keterlambatan Pembayaran Simpanan Wajib</h4>
                            <hr style="border: 2px solid rgb(0, 0, 0);">
                            <p style="color:rgb(80, 83, 85);">
                                Anda memiliki keterlambatan pembayaran simpanan wajib selama <strong>2 bulan</strong> dengan total sebesar <strong>Rp 100.000</strong>.
                                Mohon segera melunasi sebelum <strong>bulan depan</strong> untuk mencegah akun menjadi <strong>nonaktif</strong>.
                                Jika tidak dapat membayar simpanan wajib, <strong>segera tarik simpanan sukarela</strong> Anda sebelum akun dinonaktifkan.
                                Apabila akun <strong>nonaktif</strong>, jaminan pada pinjaman aktif akan kami <strong>ambil</strong>.
                                Jika Anda memiliki saldo <strong>simpanan sukarela</strong>, Anda dapat mengunjungi kantor kami dengan membawa bukti tangkapan layar <strong>pada halaman Simpanan Sukarela</strong>.
                                <br><br>
                                Pastikan pembayaran tepat waktu agar status keanggotaan Anda tetap aktif.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Card Form Pembayaran Simpanan -->
            <div class="card shadow-lg border-0">
                <div class="card-header bg-gradient bg-primary text-white">
                    <h5 class="mb-0 text-white"><i class="bi bi-wallet-fill"></i> Form Pembayaran Simpanan</h5>
                </div>
                <div class="card-body" style="margin-top: 20px;">
                    <form action="{{ route('simpanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="jenis" value="wajib">
                        <input type="hidden" name="validasi" value="100000">

                        <div class="mb-3">
                            <label for="jenis_transaksi" class="form-label"><i class="bi bi-shuffle"></i> Jenis Transaksi</label>
                            <select name="jenis_transaksi" id="jenis_transaksi" class="form-select" required>
                                <option value="penyetoran">Penyetoran</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label"><i class="bi bi-cash"></i> Jumlah (Rp)</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" required min="100000" max="100000" placeholder="Masukan Nominal Bayar">
                            <small class="text-muted"><i class="bi bi-info-circle"></i> Jumlah simpanan adalah tunggakan simpanan wajib 2 bulan</small>
                        </div>

                        <div class="mb-3">
                            <label for="metode_pembayaran" class="form-label"><i class="bi bi-credit-card"></i> Metode Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
                                <option value="cash">Tunai (Bayar Langsung)</option>
                                <option value="transfer-bank">Transfer Bank</option>
                                <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="bukti" class="form-label"><i class="bi bi-upload"></i> Unggah Bukti Pembayaran</label>
                            <input type="file" name="bukti" id="bukti" class="form-control" required accept="image/jpeg, image/png, image/jpg">
                            <small class="text-muted"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG.</small>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-check-circle-fill"></i> Konfirmasi Pembayaran
                        </button>
                    </form>
                </div>
            </div>

            <br><br><br>

            <div class="page-heading d-flex align-items-center pb-3 border-bottom">
                <i class="bi bi-house-door me-2 fs-3 text-primary" style="margin-top: -30px; padding-right:30px;"></i>
                <h2 class="mb-0 fw-bold">Dashboard</h2>
            </div>
            <div class="row">
                <!-- Bagian Profil Pengguna (70%) -->
                <div class="col-20 col-lg-8 d-flex" style="height: 450px;">
                    <div class="card shadow mb-4 flex-grow-1" style="border: 1px solid rgb(7, 81, 160); border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
                        <div class="card-header" style="background-color: #435ebe; color: #fff;">
                            <h5 class="mb-0 text-white">
                                <i class="bi bi-person-circle"></i> Profil Pengguna
                            </h5>
                        </div>
                        <div class="card-body d-flex align-items-start justify-content-start p-4">
                            <div class="text-center me-4">
                                <div class="poto-profil">
                                    <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" alt="Foto Profil" class="rounded-circle" style="width: 180px; height: 180px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="ms-4">
                                <h3 class="fw-bold mb-3" style="font-size: 28px;">{{ Auth::user()->fullname }}</h3>
                                <p class="mb-3" style="font-size: 15px;">
                                    <i class="bi bi-envelope"></i> {{ Auth::user()->email }}
                                </p>
                                <p class="mb-3" style="font-size: 15px;">
                                    <i class="bi bi-phone"></i> {{ Auth::user()->phone }}
                                </p>
                                <p class="mb-3" style="font-size: 15px;">
                                    <i class="bi bi-geo-alt"></i> {{ Auth::user()->address }}
                                </p>
                                <p class="mb-0" style="font-size: 15px;">
                                    <i class="bi bi-person-badge"></i> Status:
                                    <span class="badge {{ Auth::user()->status == 'Aktif' ? 'bg-success' : 'bg-danger' }}" style="font-size: 13px; padding: 10px 20px;">
                                        {{ Auth::user()->status }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian Statistik (30%) -->
                <div class="col-12 col-lg-4 d-flex flex-column">
                    <div class="d-flex flex-column gap-3 h-100">
                        <!-- Card: Total Simpanan -->
                        <div class="card flex-grow-1">
                            <div class="card-body">
                                <div class="stats-icon blue">
                                    <i class="bi bi-wallet2" style="margin-right:10px; margin-bottom: 22px;"></i>
                                </div>
                                <h6 class="text-muted font-semibold">Total Simpanan</h6>
                                <h6 class="font-extrabold mb-0">Rp {{ number_format($totalSimpanan ?? 0, 0, ',', '.') }}</h6>
                            </div>
                        </div>

                        <!-- Card: Pinjaman -->
                        <div class="card flex-grow-1">
                            <div class="card-body">
                                <div class="stats-icon green">
                                    <i class="bi bi-cash" style="margin-right:10px; margin-bottom: 22px;"></i>
                                </div>
                                <h6 class="text-muted font-semibold">Pinjaman</h6>
                                <h6 class="font-extrabold mb-0">Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</h6>
                            </div>
                        </div>

                        <!-- Card: Notifikasi -->
                        <div class="card flex-grow-1">
                            <div class="card-body">
                                <div class="stats-icon orange">
                                    <i class="bi bi-bell" style="margin-right:10px; margin-bottom: 22px;"></i>
                                </div>
                                <h6 class="text-muted font-semibold">Notifikasi</h6>
                                <h6 class="font-extrabold mb-0">{{ $jumlahNotifikasiBaru }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <!-- Diagram & Aksi Cepat -->
                <div class="row">
                    <!-- Diagram -->
                    <div class="col-12 col-md-8">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="fw-bold d-flex align-items-center">
                                    <i class="bi bi-graph-up me-2 text-primary" style="margin-top: -15px;padding-right:20px;"></i> Statistik Simpanan dan Pinjaman
                                </h5>
                                <canvas id="financialChart"></canvas>
                                <p class="text-muted mt-3" style="font-size: 13px;">
                                    <i class="bi bi-calendar3"></i> Direset per bulan
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Aksi Cepat -->
                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body text-center">
                                <h5 class="fw-bold">
                                    <i class="bi bi-lightning-charge text-warning"></i> Aksi Cepat
                                </h5>
                                <a href="{{route('simpanansukarela')}}">
                                    <button class="btn btn-primary w-100 mb-2" id="btnStartSaving">
                                        <i class="bi bi-plus-circle"></i> Mulai Simpanan
                                    </button>
                                </a>
                                <a href="{{route('pinjaman')}}">
                                    <button class="btn btn-success w-100 mb-2" id="btnStartLoan">
                                        <i class="bi bi-arrow-up-circle"></i> Mulai Pinjaman
                                    </button>
                                </a>
                                <a href="{{route('bantuan')}}">
                                    <button class="btn btn-info w-100 mb-2" id="btnContactSupport">
                                        <i class="bi bi-chat-dots"></i> Bantuan
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white"><i class="bi bi-list-check" style="margin-top: -30px;"></i> Daftar Transaksi Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div style="max-height: 400px; overflow:auto; font-size:.9rem; text-align:left;">
                            <table class="table table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($riwayatTransaksis as $index => $transaksi)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $transaksi['deskripsi'] ?? '-' }}</td>
                                        <td>{{ \Carbon\Carbon::parse($transaksi['tanggal'])->format('Y-m-d') }}</td>
                                        <td>
                                            <span class="badge bg-{{ $transaksi['jumlah'] >= 0 ? 'success' : 'danger' }}">
                                                <i class="bi {{ $transaksi['jumlah'] >= 0 ? 'bi-arrow-down-circle' : 'bi-arrow-up-circle' }}"></i>
                                                Rp {{ number_format($transaksi['jumlah'], 0, ',', '.') }}
                                            </span>
                                        </td>
                                        <td>
                                            @php
                                            $statusColors = [
                                            'Dalam Proses' => 'warning',
                                            'Ditolak' => 'danger',
                                            'Aktif' => 'primary',
                                            'Lunas' => 'success',
                                            'Berhasil' => 'success'
                                            ];
                                            $badgeColor = $statusColors[$transaksi['status']] ?? 'secondary';
                                            @endphp
                                            <span class="badge bg-{{ $badgeColor }}">{{ $transaksi['status'] }}</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <span class="badge bg-warning">
                                                <i class="bi bi-exclamation-circle"></i> Belum ada transaksi
                                            </span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @elseif (auth()->user()->status === 'Nonaktif')
            <div style="background-color: #000; padding: 30px; border-radius: 10px;">
                <h2 class="fw-bold" style="color: #dc3545; font-size: 2rem;">
                    <i class="bi bi-x-circle-fill" style="color: #dc3545; font-size: 2.5rem;"></i> Akun Telah Dinonaktifkan
                </h2>
                <hr style="border: 2px solid #fff; margin: 15px 0;">
                <p style="color: #fff; font-size: 1.25rem; line-height: 1.6;">
                    Akun Anda telah <strong>dinonaktifkan</strong> karena keterlambatan pembayaran simpanan wajib selama lebih dari batas waktu yang ditentukan.
                    Jaminan pada pinjaman aktif telah diproses sesuai dengan ketentuan yang berlaku.
                </p>
                <p style="color: #fff; font-size: 1.25rem; line-height: 1.6;">
                    Jika Anda ingin mengaktifkan kembali akun, silakan mengunjungi kantor kami dengan membawa bukti pembayaran atau menghubungi layanan pelanggan untuk mendapatkan panduan lebih lanjut.
                </p>
            </div>

            <br><br><br>

            @else

            <div class="page-heading d-flex align-items-center pb-3 border-bottom">
                <i class="bi bi-house-door me-2 fs-3 text-primary" style="margin-top: -30px; padding-right:30px;"></i>
                <h2 class="mb-0 fw-bold">Dashboard</h2>
            </div>
            <div class="row">
                <!-- Bagian Profil Pengguna (70%) -->
                <div class="col-20 col-lg-8 d-flex" style="height: 450px;">
                    <div class="card shadow mb-4 flex-grow-1">
                        <div class="card-header" style="background-color: #435ebe; color: #fff;">
                            <h5 class="mb-0 text-white">
                                <i class="bi bi-person-circle"></i> Profil Pengguna
                            </h5>
                        </div>
                        <div class="card-body d-flex align-items-start justify-content-start p-4" style="border: 1px solid rgb(7, 81, 160); border-bottom-right-radius:20px;border-bottom-left-radius:20px;">
                            <div class="text-center me-4">
                                <div class="poto-profil">
                                    <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" alt="Foto Profil" class="rounded-circle" style="width: 180px; height: 180px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="ms-4">
                                <h3 class="fw-bold mb-3" style="font-size: 28px;">{{ Auth::user()->fullname }}</h3>
                                <p class="mb-3" style="font-size: 18px;">
                                    <i class="bi bi-envelope"></i> {{ Auth::user()->email }}
                                </p>
                                <p class="mb-3" style="font-size: 18px;">
                                    <i class="bi bi-phone"></i> {{ Auth::user()->phone }}
                                </p>
                                <p class="mb-3" style="font-size: 18px;">
                                    <i class="bi bi-geo-alt"></i> {{ Auth::user()->address }}
                                </p>
                                <p class="mb-0" style="font-size: 18px;">
                                    <i class="bi bi-person-badge"></i> Status:
                                    <span class="badge {{ Auth::user()->status == 'Aktif' ? 'bg-success' : 'bg-danger' }}" style="font-size: 16px; padding: 10px 20px;">
                                        {{ Auth::user()->status }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bagian Statistik (30%) -->
                <div class="col-12 col-lg-4 d-flex flex-column">
                    <div class="d-flex flex-column gap-3 h-100">
                        <!-- Card: Total Simpanan -->
                        <div class="card flex-grow-1">
                            <div class="card-body">
                                <div class="stats-icon blue">
                                    <i class="bi bi-wallet2" style="margin-right:10px; margin-bottom: 22px;"></i>
                                </div>
                                <h6 class="text-muted font-semibold">Total Simpanan</h6>
                                <h6 class="font-extrabold mb-0">Rp {{ number_format($totalSimpanan ?? 0, 0, ',', '.') }}</h6>
                            </div>
                        </div>

                        <!-- Card: Pinjaman -->
                        <div class="card flex-grow-1">
                            <div class="card-body">
                                <div class="stats-icon green">
                                    <i class="bi bi-cash" style="margin-right:10px; margin-bottom: 22px;"></i>
                                </div>
                                <h6 class="text-muted font-semibold">Pinjaman</h6>
                                <h6 class="font-extrabold mb-0">Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</h6>
                            </div>
                        </div>

                        <!-- Card: Notifikasi -->
                        <div class="card flex-grow-1">
                            <div class="card-body">
                                <div class="stats-icon orange">
                                    <i class="bi bi-bell" style="margin-right:10px; margin-bottom: 22px;"></i>
                                </div>
                                <h6 class="text-muted font-semibold">Notifikasi</h6>
                                <h6 class="font-extrabold mb-0">{{ $jumlahNotifikasiBaru }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content">
                <!-- Diagram & Aksi Cepat -->
                <div class="row">
                    <!-- Diagram -->
                    <div class="col-12 col-md-8">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="fw-bold d-flex align-items-center">
                                    <i class="bi bi-graph-up me-2 text-primary" style="margin-top: -15px;padding-right:20px;"></i> Statistik Simpanan dan Pinjaman
                                </h5>
                                <canvas id="financialChart"></canvas>
                                <p class="text-muted mt-3" style="font-size: 13px;">
                                    <i class="bi bi-calendar3"></i> Direset per bulan
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Aksi Cepat -->
                    <div class="col-12 col-md-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body text-center">
                                <h5 class="fw-bold">
                                    <i class="bi bi-lightning-charge text-warning"></i> Aksi Cepat
                                </h5>
                                <a href="{{route('simpanansukarela')}}">
                                    <button class="btn btn-primary w-100 mb-2" id="btnStartSaving">
                                        <i class="bi bi-plus-circle"></i> Mulai Simpanan
                                    </button>
                                </a>
                                <a href="{{route('pinjaman')}}">
                                    <button class="btn btn-success w-100 mb-2" id="btnStartLoan">
                                        <i class="bi bi-arrow-up-circle"></i> Mulai Pinjaman
                                    </button>
                                </a>
                                <a href="{{route('bantuan')}}">
                                    <button class="btn btn-info w-100 mb-2" id="btnContactSupport">
                                        <i class="bi bi-chat-dots"></i> Bantuan
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white"><i class="bi bi-list-check" style="margin-top: -30px;"></i> Daftar Transaksi Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div style="max-height: 400px; overflow:auto; font-size:.9rem; text-align:left;">
                            <table class="table table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($riwayatTransaksis as $index => $transaksi)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $transaksi['deskripsi'] ?? '-' }}</td>
                                        <td>{{ \Carbon\Carbon::parse($transaksi['tanggal'])->format('Y-m-d') }}</td>
                                        <td>
                                            <span class="badge bg-{{ $transaksi['jumlah'] >= 0 ? 'success' : 'danger' }}">
                                                <i class="bi {{ $transaksi['jumlah'] >= 0 ? 'bi-arrow-down-circle' : 'bi-arrow-up-circle' }}"></i>
                                                Rp {{ number_format($transaksi['jumlah'], 0, ',', '.') }}
                                            </span>
                                        </td>
                                        <td>
                                            @php
                                            $statusColors = [
                                            'Dalam Proses' => 'warning',
                                            'Ditolak' => 'danger',
                                            'Aktif' => 'primary',
                                            'Lunas' => 'success',
                                            'Berhasil' => 'success'
                                            ];
                                            $badgeColor = $statusColors[$transaksi['status']] ?? 'secondary';
                                            @endphp
                                            <span class="badge bg-{{ $badgeColor }}">{{ $transaksi['status'] }}</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <span class="badge bg-warning">
                                                <i class="bi bi-exclamation-circle"></i> Belum ada transaksi
                                            </span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif

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
    <script src="{{asset('dist/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('dist/assets/js/app.js')}}"></script>
    <script src="{{asset('dist/assets/js/dashboard.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById('financialChart').getContext('2d');

            var financialChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Simpanan Sukarela', 'Pinjaman'],
                    datasets: [{
                        data: [
                            <?php echo $totalSimpanan; ?>, // Data simpanan sukarela dari controller
                            <?php echo $totalPinjaman; ?> // Data pinjaman dari controller
                        ],
                        backgroundColor: ['#007bff', '#28a745'], // Warna untuk simpanan (biru) dan pinjaman (hijau)
                        borderColor: ['#007bff', '#28a745'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            display: false // Menghilangkan legenda
                        }
                    }
                }
            });
        });
    </script>


</body>

</html>