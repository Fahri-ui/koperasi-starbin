<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi Anda</title>

    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('dist/assets/css/profil.css')}}">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <!-- Sidebar Header -->
                <div class="sidebar-header position-relative border-bottom hidden-content">
                    <div class="user-info text-center mt-3 pb-3">
                        <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" class="rounded-circle hidden-content" alt="User Avatar" style="width: 150px; height: 150px; object-fit: cover;">
                        <h3 class="mt-2 mb-0 hidden-content">{{ Auth::user()->fullname }}</h3>
                        <small class="text-muted hidden-content">Anggota Koperasi</small>
                    </div>
                </div>

                <!-- Theme Toggle Dipindahkan ke Bawah -->
                <div class="sidebar-footer d-flex align-items-center justify-content-between py-3 border-bottom hidden-content">
                    <!-- Logo & Nama -->
                    <div class="d-flex align-items-center hidden-content" style="margin-left: 20px;">
                        <div class="logo" style="width: 40px; height: 40px;">
                            <img src="{{ asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-0" style="font-size: 12px;">Koperasi</h6>
                            <h5 class="mb-0" style="font-size: 14px; font-weight: bold;">STARBIN</h5>
                        </div>
                    </div>

                    <!-- Theme Toggle -->
                    <div class="theme-toggle d-flex align-items-center gap-2 hidden-content" style="margin-right: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" viewBox="0 0 21 21">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"></path>
                            </g>
                        </svg>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input me-0" type="checkbox" id="toggle-dark">
                            <label class="form-check-label"></label>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                        </svg>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="hidden-content sidebar-title mt-4">Menu</li>

                        <li class="sidebar-item hidden-content">
                            <a href="{{route('user')}}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item active hidden-content">
                            <a href="{{route('profil')}}" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub hidden-content">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-piggy-bank-fill"></i>
                                <span>Simpanan</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="{{route('simpananwajib')}}">Simpanan Wajib</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="{{route('simpanansukarela')}}">Simpanan Sukarela</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item hidden-content">
                            <a href="{{route('pinjaman')}}" class='sidebar-link'>
                                <i class="bi bi-cash-coin"></i>
                                <span>Pinjaman</span>
                            </a>
                        </li>

                        <li class="sidebar-item position-relative hidden-content">
                            <a href="{{ route('notifikasi') }}" class="sidebar-link">
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

                        <li class="sidebar-item hidden-content">
                            <a href="{{route('bantuan')}}" class='sidebar-link'>
                                <i class="bi bi-question-circle-fill"></i>
                                <span>Bantuan</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Logout -->
                <div class="sidebar-footer text-center py-3 border-top">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="hidden-content btn btn-link text-danger" style="text-decoration: none;">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Log Out</span>
                        </button>
                    </form>
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

            <div class="container mt-4 hidden-content-right">
                <!-- Card Peringatan -->
                <div class="card shadow-sm mb-3 hidden-content-right" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px;  padding: 20px;">
                    <div class="card-body bg-warning text-dark">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-exclamation-triangle-fill me-2 fs-4 hidden-content-right"></i>
                            <div class="hidden-content-right">
                                <strong>Akun Anda belum aktif!</strong> Untuk mengaktifkannya, silakan lakukan pembayaran simpanan anggota sesuai dengan ketentuan koperasi.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Form Pembayaran -->
                <div class="card shadow-sm hidden-content-right">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white;"><i class="bi bi-credit-card"></i> Pembayaran Simpanan Anggota</h5>
                    </div>
                    <div class="card-body hidden-content-right" style="margin-top: 30px; text-align: left;">
                        <form action="{{ route('simpanan.bayar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 hidden-content-right">
                                <label for="nominal" class="form-label"><i class="bi bi-cash-stack"></i> Nominal Pembayaran</label>
                                <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Masukkan jumlah simpanan" min="500000" max="500000" required>
                                <small class="text-muted"><i class="bi bi-info-circle"></i> Nominal wajib adalah Rp 500.000</small>
                            </div>

                            <div class="mb-3 hidden-content-right">
                                <label for="metode" class="form-label"><i class="bi bi-wallet2"></i> Metode Pembayaran</label>
                                <select id="metode" name="metode" class="form-select" required>
                                    <option value="cash">Tunai (Bayar Langsung)</option>
                                    <option value="bank">Transfer Bank</option>
                                    <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                                </select>
                            </div>

                            <div class="form-group mb-3 hidden-content-right">
                                <label for="payment-proof">Unggah Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                                <small class="text-muted" style="font-size:.8rem;"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG (max 2MB)</small>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 hidden-content-right"><i class="bi bi-send"></i> Bayar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>

            @elseif (auth()->user()->status === 'Ditolak')
            <div class="container mt-4 hidden-content-right">
                <!-- Card Peringatan Pengajuan Ditolak -->
                <div class="card shadow-sm mb-3 hidden-content-right">
                    <div class="card-body bg-danger text-white" style="padding: 30px; border-radius: 10px;">
                        <div class="d-flex align-items-center hidden-content-right">
                            <i class="bi bi-x-circle-fill me-4" style="font-size: 3rem; margin-top:-150px;"></i>
                            <div class="hidden-content-right">
                                <strong style="font-size: 2.5rem; display: block; margin-bottom: 10px;">Pengajuan Anda Ditolak!</strong>
                                <p style="font-size: 1.2rem; line-height: 1.5; margin: 0;">
                                    Mohon maaf, pengajuan simpanan anggota Anda tidak dapat diproses. Silakan periksa kembali data yang Anda kirimkan atau lakukan pembayaran ulang sesuai ketentuan koperasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Form Pembayaran -->
                <div class="card shadow-sm hidden-content-right">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0" style="color: white;"><i class="bi bi-credit-card"></i> Pembayaran Simpanan Anggota</h5>
                    </div>
                    <div class="card-body" style="margin-top: 30px; text-align: left;">
                        <form action="{{ route('simpanan.bayar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 hidden-content-right">
                                <label for="nominal" class="form-label"><i class="bi bi-cash-stack"></i> Nominal Pembayaran</label>
                                <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Masukkan jumlah simpanan" min="500000" max="500000" required>
                                <small class="text-muted"><i class="bi bi-info-circle"></i> Nominal wajib adalah Rp 500.000</small>
                            </div>

                            <div class="mb-3 hidden-content-right">
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
                                <small class="text-muted" style="font-size:.8rem;"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG (max 2MB)</small>
                            </div>

                            <button type="submit" class="btn btn-primary w-100"><i class="bi bi-send"></i> Bayar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>

            @elseif (auth()->user()->status === 'Pending')
            <div class="alert p-4 shadow hidden-content-right" style="background-color: #435ebe; color: #fff; border-radius: 10px;">
                <div class="d-flex align-items-start">
                    <i class="bi bi-hourglass-split fs-1 me-3 hidden-content-right" style="color: #ffdd57; margin-top:-15px; padding-right:30px;"></i>
                    <div class="hidden-content-right">
                        <h4 class="text-white">Status Pengajuan: <span class="badge" style="background-color: #ffdd57; color: #435ebe;">Pending</span></h4>
                        <p>Terima kasih telah mengajukan simpanan anggota. Formulir Anda sedang dalam proses verifikasi oleh admin.</p>
                        <p><i class="bi bi-clock"></i> Estimasi waktu persetujuan: <strong>3 hari kerja</strong></p>
                    </div>
                </div>
            </div>

            <div class="card mt-3 shadow text-center hidden-content-right" style="border: 2px solid #435ebe; border-radius: 10px;">
                <div class="card-header" style="background-color: #435ebe; color: #fff;">
                    <h5 class="text-white">
                        <i class="bi bi-file-text text-white hidden-content-right"></i> Detail Pengajuan
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

            <div class="page-heading d-flex align-items-center pb-3 border-bottom hidden-content-right">
                <i class="bi bi-person-circle me-2 fs-3 text-primary hidden-content-right" style="margin-top: -30px; padding-right: 30px;"></i>
                <h3 class="mb-0 fw-bold hidden-content-right">👋 Halo, {{ Auth::user()->fullname }}</h3>
            </div>

            @if ($statusWajib && $statusWajib->status === 'Dalam Proses')
            <div class="alert alert-warning shadow-sm hidden-content-right" role="alert" style="border-radius: 10px;">
                <!-- Header -->
                <div class="d-flex align-items-center p-3" style="border-bottom: 2px solid #d1a900; color:black;">
                    <i class="bi bi-hourglass-split me-3 fs-2" style="margin-top: -40px;"></i>
                    <h5 class="mb-0 fw-bold " style="color:black;">Pengajuan Dalam Proses</h5>
                </div>

                <!-- Isi Section -->
                <div class="p-3 hidden-content-right" style="text-align: justify; border-bottom: 2px solid #d1a900;">
                    <p class="mb-2">
                        Pengajuan penyetoran simpanan wajib Anda saat ini <strong>sedang dalam tahap verifikasi oleh admin</strong>.
                        Proses ini bertujuan untuk memastikan keakuratan data sebelum dana dikonfirmasi.
                    </p>
                    <p class="mb-2 hidden-content-right">
                        <i class="bi bi-clock-history"></i> <strong>Estimasi waktu:</strong> 1-2 hari kerja.
                    </p>
                </div>

                <!-- Footer -->
                <div class="p-3 text-center hidden-content-right" style="border-top: 2px solid #d1a900;">
                    <p class="mb-0 hidden-content-right">
                        Silakan <strong>periksa status pembayaran Anda secara berkala</strong>. Jika membutuhkan bantuan lebih lanjut,
                        hubungi <strong>admin koperasi</strong> atau kunjungi kantor kami.
                    </p>
                </div>
            </div>
            @elseif ($statusWajib && $statusWajib->status === 'Ditolak')
            <div class="alert alert-danger shadow-sm hidden-content-right" role="alert" style="border-radius: 10px;">
                <!-- Header -->
                <div class="d-flex align-items-center p-3 hidden-content-right" style="border-bottom: 2px solid #a94442;">
                    <i class="bi bi-x-circle me-3 fs-2 text-white" style="margin-top: -40px; padding-right:30px;"></i>
                    <h5 class="mb-0 fw-bold text-white">Pengajuan Ditolak</h5>
                </div>

                <!-- Isi Section -->
                <div class="p-3 hidden-content-right" style="text-align: justify; border-bottom: 2px solid #a94442;">
                    <p class="mb-2">
                        Pengajuan penyetoran simpanan wajib Anda <strong>ditolak oleh admin</strong>. Hal ini dapat terjadi karena beberapa alasan berikut:
                    </p>
                    <div class="mb-2 hidden-content-right">
                        <p><i class="bi bi-exclamation-triangle-fill text-white"></i> Data atau bukti pembayaran tidak valid.</p>
                        <p><i class="bi bi-x-circle-fill text-white"></i> Kesalahan dalam metode pembayaran atau transfer yang tidak terdeteksi.</p>
                    </div>
                    <p class="mb-2 hidden-content-right">
                        Silakan periksa kembali data Anda dan lakukan pengajuan ulang sesuai dengan ketentuan yang berlaku.
                    </p>
                </div>

                <!-- Footer -->
                <div class="p-3 text-center hidden-content-right" style="border-top: 2px solid #a94442;">
                    <p class="mb-0">
                        Jika Anda memerlukan bantuan, silakan hubungi <strong>admin koperasi</strong> atau datang langsung ke kantor kami untuk verifikasi lebih lanjut.
                    </p>
                </div>
            </div>
            <!-- Card Form Pembayaran Simpanan -->
            <div class="card shadow-lg border-0 hidden-content-right" id="bayar">
                <div class="card-header bg-gradient bg-primary text-white">
                    <h5 class="mb-0 text-white"><i class="bi bi-wallet-fill"></i> Form Pembayaran Simpanan</h5>
                </div>
                <div class="card-body" style="margin-top: 20px;">
                    <form action="{{ route('simpanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="jenis" value="wajib">
                        <input type="hidden" name="validasi" value="100000">

                        <div class="mb-3 hidden-content-right">
                            <label for="jenis_transaksi" class="form-label"><i class="bi bi-shuffle"></i> Jenis Transaksi</label>
                            <select name="jenis_transaksi" id="jenis_transaksi" class="form-select" required>
                                <option value="penyetoran">Penyetoran</option>
                            </select>
                        </div>

                        <div class="mb-3 hidden-content-right">
                            <label for="jumlah" class="form-label"><i class="bi bi-cash"></i> Jumlah (Rp)</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" required min="100000" max="100000" placeholder="Masukan Nominal Bayar">
                            <small class="text-muted"><i class="bi bi-info-circle"></i>Total bayar adalah tunggakan simpanan wajib 2 bulan, yaitu 100.000</small>
                        </div>

                        <div class="mb-3 hidden-content-right">
                            <label for="metode_pembayaran" class="form-label"><i class="bi bi-credit-card"></i> Metode Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
                                <option value="cash">Tunai (Bayar Langsung)</option>
                                <option value="transfer-bank">Transfer Bank</option>
                                <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                            </select>
                        </div>

                        <div class="mb-3 hidden-content-right">
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
            @else
            <!-- Section Peringatan Keterlambatan -->
            <div class="card shadow-lg border-0 mb-4 hidden-content-right" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px;  padding: 20px;">
                <div class="card-body bg-warning text-dark" style="border: 1px solid #435ebe; border-radius: 10px;">
                    <div class="d-flex align-items-start hidden-content-right">
                        <i class="bi bi-info-circle-fill text-primary fs-1 me-3 hidden-content-right" style="margin-top:-20px;"></i>
                        <div>
                            <h4 class="fw-bold hidden-content-right"> Peringatan: Keterlambatan Pembayaran Simpanan Wajib</h4>
                            <hr style="border: 2px solid rgb(0, 0, 0);">
                            <p class="hidden-content-right" style="color:rgb(80, 83, 85);">
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
            <div class="card shadow-lg border-0 hidden-content-right" id="bayar">
                <div class="card-header bg-gradient bg-primary text-white">
                    <h5 class="mb-0 text-white"><i class="bi bi-wallet-fill"></i> Form Pembayaran Simpanan</h5>
                </div>
                <div class="card-body" style="margin-top: 20px;">
                    <form action="{{ route('simpanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="jenis" value="wajib">
                        <input type="hidden" name="validasi" value="100000">

                        <div class="mb-3 hidden-content-right">
                            <label for="jenis_transaksi" class="form-label"><i class="bi bi-shuffle"></i> Jenis Transaksi</label>
                            <select name="jenis_transaksi" id="jenis_transaksi" class="form-select" required>
                                <option value="penyetoran">Penyetoran</option>
                            </select>
                        </div>

                        <div class="mb-3 hidden-content-right">
                            <label for="jumlah" class="form-label"><i class="bi bi-cash"></i> Jumlah (Rp)</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" required min="100000" max="100000" placeholder="Masukan Nominal Bayar">
                            <small class="text-muted"><i class="bi bi-info-circle"></i>Total bayar adalah tunggakan simpanan wajib 2 bulan, yaitu 100.000</small>
                        </div>

                        <div class="mb-3 hidden-content-right">
                            <label for="metode_pembayaran" class="form-label"><i class="bi bi-credit-card"></i> Metode Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required>
                                <option value="cash">Tunai (Bayar Langsung)</option>
                                <option value="transfer-bank">Transfer Bank</option>
                                <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                            </select>
                        </div>

                        <div class="mb-3 hidden-content-right">
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
            @endif

            <div class="page-content">
                <div class="container">
                    <div class="container hidden-content-right">
                        <div class="row hidden-content-right">
                            <!-- Profil Section -->
                            <div class="col-md-6 hidden-content-right">
                                <div class="card mb-4 shadow bg-primary hidden-content-right" style="color: #fff; border-radius: 10px;">
                                    <div class="card-body text-center hidden-content-right">
                                        <!-- Profil User (Klik untuk membuka pop-up) -->
                                        <div class="poto-profil text-center hidden-content-right">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalProfile">
                                                <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" alt="Foto Profil">
                                            </a>
                                        </div>
                                        <h3 class="mt-3 text-white hidden-content-right">{{ Auth::user()->fullname }}</h3>
                                        <p><i class="bi bi-envelope hidden-content-right"></i> {{ Auth::user()->email }}</p>
                                        <p><i class="bi bi-telephone hidden-content-right"></i> {{ Auth::user()->phone }}</p>
                                        <p><i class="bi bi-geo-alt hidden-content-right"></i> {{ Auth::user()->address }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistik Section -->
                            <div class="col-md-6 hidden-content-right">
                                <div class="row hidden-content-right">
                                    <!-- Card 1 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #007bff; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #007bff;"><i class="bi bi-calendar me-2"></i>Tanggal Bergabung</h6>
                                                <p>{{ Auth::user()->created_at->translatedFormat('d F Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #ffc107; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #ffc107;"><i class="hidden-content-right bi bi-clock-history me-2"></i>Terakhir Diperbarui</h6>
                                                <p>{{ Auth::user()->updated_at ? Auth::user()->updated_at->translatedFormat('d F Y') : 'Belum ada pembaruan' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #28a745; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #28a745;"><i class="hidden-content-right bi bi-piggy-bank me-2"></i>Total Simpanan</h6>
                                                <p><strong>Rp {{ number_format($totalSukarela ?? 0, 0, ',', '.') }}</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #dc3545; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #dc3545;"><i class="hidden-content-right bi bi-cash-stack me-2"></i>Total Pinjaman</h6>
                                                <p><strong>Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulir Edit Profil -->
                    <section class="mb-4 hidden-content-right">
                        <div class="card shadow hidden-content-right" style="border: 1px solid #435ebe;">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0 text-white hidden-content-right">
                                    <i class="bi bi-person-lines-fill"></i> Edit Profil
                                </h5>
                            </div>
                            <div class="card-body hidden-content-right">
                                <form id="edit-profile-form" enctype="multipart/form-data" method="POST" action="{{ route('edit.profil') }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">

                                    <div class="row hidden-content-right">
                                        <div class="col-md-6 mb-3">
                                            <label for="fullname" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama Lengkap" value="{{ old('fullname', Auth::user()->fullname) }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', Auth::user()->email) }}" required>
                                        </div>
                                    </div>

                                    <div class="row hidden-content-right">
                                        <div class="col-md-6 mb-3">
                                            <label for="password" class="form-label">Password (Opsional)</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                                            <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Konfirmasi password baru">
                                        </div>
                                    </div>

                                    <div class="row hidden-content-right">
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">Nomor Telepon</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon" value="{{ old('phone', Auth::user()->phone) }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="gambar" class="form-label">Foto Profil</label>
                                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="mb-3 hidden-content-right">
                                        <label for="address" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Alamat" required>{{ old('address', Auth::user()->address) }}</textarea>
                                    </div>

                                    <div class="text-center mt-4 hidden-content-right">
                                        <button type="subphp mit hidden-content-right" class="btn btn-success">
                                            <i class="bi bi-check-circle"></i> Konfirmasi Edit Profil
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            @elseif (auth()->user()->status === 'Nonaktif')
            {{-- Tampilkan pesan akun nonaktif --}}
            <h3 class="text-red-500 text-center">Akun Anda Nonaktif. Silakan hubungi admin untuk informasi lebih lanjut.</h3>

            @else

            <div class="page-heading d-flex align-items-center pb-3 border-bottom hidden-content-right">
                <i class="bi bi-person-circle me-2 fs-3 text-primary " style="margin-top: -30px; padding-right: 30px;"></i>
                <h3 class="mb-0 fw-bold">👋 Halo, {{ Auth::user()->fullname }}</h3>
            </div>

            <div class="page-content hidden-content-right">
                <div class="container hidden-content-right">
                    <div class="container hidden-content-right">
                        <div class="row hidden-content-right">
                            <!-- Profil Section -->
                            <div class="col-md-6 hidden-content-right">
                                <div class="card mb-4 shadow bg-primary hidden-content-right" style=" color: #fff; border-radius: 10px;">
                                    <div class="card-body text-center hidden-content-right">
                                        <!-- Profil User (Klik untuk membuka pop-up) -->
                                        <div class="poto-profil text-center hidden-content-right">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalProfile">
                                                <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" alt="Foto Profil">
                                            </a>
                                        </div>

                                        <h3 class="hidden-content-right mt-3 text-white">{{ Auth::user()->fullname }}</h3>
                                        <p><i class="hidden-content-right bi bi-envelope"></i> {{ Auth::user()->email }}</p>
                                        <p><i class="hidden-content-right bi bi-telephone"></i> {{ Auth::user()->phone }}</p>
                                        <p><i class="hidden-content-right bi bi-geo-alt"></i> {{ Auth::user()->address }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Statistik Section -->
                            <div class="col-md-6 hidden-content-right">
                                <div class="row hidden-content-right">
                                    <!-- Card 1 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #007bff; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #007bff;"><i class="bi bi-calendar me-2 hidden-content-right"></i>Tanggal Bergabung</h6>
                                                <p class="hidden-content-right">{{ Auth::user()->created_at->translatedFormat('d F Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 2 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #ffc107; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #ffc107;"><i class="bi bi-clock-history me-2 hidden-content-right"></i>Terakhir Diperbarui</h6>
                                                <p class="hidden-content-right">{{ Auth::user()->updated_at ? Auth::user()->updated_at->translatedFormat('d F Y') : 'Belum ada pembaruan' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 3 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #28a745; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #28a745;"><i class="bi bi-piggy-bank me-2 hidden-content-right"></i>Total Simpanan</h6>
                                                <p class="hidden-content-right"><strong>Rp {{ number_format($totalSukarela ?? 0, 0, ',', '.') }}</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card 4 -->
                                    <div class="col-12 col-lg-6 mb-4 hidden-content-right">
                                        <div class="card shadow" style="border-left: 5px solid #dc3545; border-radius: 10px;">
                                            <div class="card-body">
                                                <h6 style="color: #dc3545;"><i class="bi bi-cash-stack me-2 hidden-content-right"></i>Total Pinjaman</h6>
                                                <p class="hidden-content-right"><strong>Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Formulir Edit Profil -->
                    <section class="mb-4 hidden-content-right">
                        <div class="card shadow" style="border: 1px solid #435ebe;">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0 text-white hidden-content-right">
                                    <i class="bi bi-person-lines-fill"></i> Edit Profil
                                </h5>
                            </div>
                            <div class="card-body hidden-content-right">
                                <form id="edit-profile-form" enctype="multipart/form-data" method="POST" action="{{ route('edit.profil') }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">

                                    <div class="row hidden-content-right">
                                        <div class="col-md-6 mb-3">
                                            <label for="fullname" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama Lengkap" value="{{ old('fullname', Auth::user()->fullname) }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', Auth::user()->email) }}" required>
                                        </div>
                                    </div>

                                    <div class="row hidden-content-right">
                                        <div class="col-md-6 mb-3">
                                            <label for="password" class="form-label">Password (Opsional)</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                                            <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Konfirmasi password baru">
                                        </div>
                                    </div>

                                    <div class="row hidden-content-right">
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="form-label">Nomor Telepon</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon" value="{{ old('phone', Auth::user()->phone) }}" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="gambar" class="form-label">Foto Profil</label>
                                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                        </div>
                                    </div>

                                    <div class="mb-3 hidden-content-right">
                                        <label for="address" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Alamat" required>{{ old('address', Auth::user()->address) }}</textarea>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="subphp mit" class="btn btn-success">
                                            <i class="bi bi-check-circle"></i> Konfirmasi Edit Profil
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @endif
            <!-- Pop-up Profil User -->
            <div class="modal fade" id="modalProfile" tabindex="-1" aria-labelledby="modalProfileLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content border-0 shadow-lg">
                        <!-- Header -->
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title fw-bold text-white" style="font-size: 1.5rem;" id="modalProfileLabel">
                                <i class="bi bi-person-circle text-white me-2" style="font-size: 2rem;"></i> Profil Anda
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!-- Body -->
                        <div class="modal-body text-center p-4">
                            <img id="profileImage" src="{{ asset('picture/account/' . Auth::user()->gambar) }}"
                                alt="Profil User"
                                class="rounded-circle border shadow-sm"
                                style="width: 400px; height: 400px; object-fit: cover;">
                        </div>
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
    <script src="{{asset('dist/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('dist/assets/js/app.js')}}"></script>
    <script>
        // document.getElementById('nominal').addEventListener('input', function(e) {
        //     let value = e.target.value.replace(/\D/g, ''); // Hapus semua karakter kecuali angka
        //     value = new Intl.NumberFormat('id-ID').format(value); // Format angka dengan titik
        //     e.target.value = value;
        // });

        // document.getElementById('jumlah').addEventListener('input', function(e) {
        //     let value = e.target.value.replace(/\D/g, ''); // Hapus semua karakter kecuali angka
        //     value = new Intl.NumberFormat('id-ID').format(value); // Format angka dengan titik
        //     e.target.value = value;
        // });

        document.addEventListener("DOMContentLoaded", function() {
            let profileImage = document.getElementById("profileImage");
            let userImageSrc = "{{ asset('picture/account/' . Auth::user()->gambar) }}";

            // Pastikan gambar di pop-up sesuai dengan gambar pengguna
            profileImage.src = userImageSrc;
        });
    </script>
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
</body>

</html>