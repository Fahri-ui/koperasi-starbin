<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pinjaman Anda</title>

    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app')}}.css">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark')}}.css">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('dist/assets/css/pinjaman.css')}}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <!-- Sidebar Header -->
                <div class="sidebar-header position-relative border-bottom hidden-content">
                    <div class="user-info text-center mt-3 pb-3">
                        <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" class="rounded-circle hidden-content" alt="User Avatar" style="width: 150px; height: 150px; object-fit: cover;">
                        <h3 class="mt-2 mb-0  hidden-content">{{ Auth::user()->fullname }}</h3>
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

                        <li class="sidebar-item  hidden-content">
                            <a href="{{route('user')}}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item hidden-content">
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

                        <li class="sidebar-item active hidden-content">
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

                            <button type="submit" class="hidden-content-right btn btn-primary w-100"><i class="bi bi-send"></i> Bayar Sekarang</button>
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

                            <div class="form-group mb-3 hidden-content-right">
                                <label for="payment-proof">Unggah Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                                <small class="text-muted" style="font-size:.8rem;"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG (max 2MB)</small>
                            </div>

                            <button type="submit" class="hidden-content-right btn btn-primary w-100"><i class="bi bi-send"></i> Bayar Sekarang</button>
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

            <div class="page-heading d-flex align-items-center pb-3 border-bottom">
                <i class="bi bi-cash-coin me-2 fs-3 text-primary" style="margin-top: -30px; padding-right: 30px;"></i>
                <h2 class="mb-0 fw-bold">Pinjaman</h2>
            </div>

            @if($pinjamanAktif->total_denda > 0)
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

            <section class="mb-4 hidden-content-right">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white hidden-content-right">
                            <i class="bi bi-cash-coin" style="margin-top: -30px;"></i> Formulir Pembayaran Pinjaman
                        </h5>
                    </div>
                    <div class="card-body hidden-content-right">
                        @if ($pembayaranProses)
                        <!-- Notifikasi jika ada pembayaran dalam proses -->
                        <div class="alert text-center p-4 rounded hidden-content-right" style="border: 1px solid #0dcaf0; background-color: #d1f2fa;">
                            <h4 class="fw-bold text-uppercase text-info hidden-content-right">
                                <i class="bi bi-hourglass-split"></i> Menunggu Konfirmasi Admin
                            </h4>
                            <hr>
                            <p class="mb-2 hidden-content-right">
                                Pengajuan <strong>pembayaran denda</strong> Anda telah berhasil dikirim dan saat ini sedang dalam proses pemeriksaan oleh <strong>admin kami</strong>.
                            </p>
                            <p class="mb-2 hidden-content-right">
                                Mohon tunggu untuk proses verifikasi. Setelah disetujui, Anda melanjutkan transaksi berikutnya.
                            </p>
                            <p class="mb-2 hidden-content-right">
                                Jika Anda tidak kunjung menerima konfirmasi dalam waktu yang cukup lama, silakan hubungi tim administrasi melalui <strong>halaman Bantuan</strong> atau kunjungi kantor kami secara langsung.
                            </p>
                            <p class="fw-bold text-info hidden-content-right">
                                Trimakasih telah mengikuti ketentuan koperasi kami
                            </p>
                        </div>
                        @else
                        <!-- Info Denda -->
                        <div class="alert text-center p-4 rounded hidden-content-right" style="border: 1px solid #dc3545; background-color: #f8d7da;">
                            <h4 class="fw-bold text-uppercase text-danger hidden-content-right">
                                <i class="bi bi-exclamation-triangle-fill"></i> Perhatian!
                            </h4>
                            <hr>
                            <p class="mb-2 hidden-content-right">
                                <strong>Ini bukan formulir pembayaran Simpanan Wajib, melainkan formulir pembayaran pinjaman.</strong>
                            </p>
                            <p class="mb-2 hidden-content-right">
                                Anda memiliki denda pada pinjaman yang belum diselesaikan sebesar
                                <strong>Rp {{ number_format($pinjamanAktif->total_denda, 0, ',', '.') }}</strong>. Oleh karena itu, pembayaran Simpanan Wajib
                                tidak dapat dilakukan sebelum Anda melunasi denda terlebih dahulu.
                            </p>
                            <p class="mb-2 hidden-content-right">
                                Jika Simpanan Wajib tidak dibayarkan hingga batas waktu yang telah ditentukan (Bulan Depan), akun Anda berisiko
                                dinonaktifkan dan jaminan pinjaman aktif dapat digunakan sebagai kompensasi. Mohon segera selesaikan
                                kewajiban Anda untuk menghindari konsekuensi lebih lanjut.
                            </p>
                            <hr>
                            <h5 class="fw-bold text-primary hidden-content-right">
                                <i class="bi bi-info-circle-fill"></i> Informasi Pembayaran
                            </h5>
                            <p class="mb-2 hidden-content-right">
                                Anda <strong>tidak perlu membayar total angsuran</strong> pada tahap ini. Saat ini, Anda hanya diwajibkan untuk
                                melunasi <strong>total denda</strong> yang masih tertunggak.
                            </p>
                            <p class="mb-2 hidden-content-right">
                                Setelah denda dilunasi, Anda dapat kembali melakukan pembayaran Simpanan Wajib sesuai ketentuan yang berlaku.
                            </p>
                            <p class="fw-bold text-primary hidden-content-right">
                                Silakan selesaikan pembayaran denda terlebih dahulu untuk menghindari kendala pada transaksi berikutnya.
                            </p>
                        </div>

                        <form action="{{ route('pinjaman.bayar') }}" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">
                            @csrf
                            <div class="row hidden-content-right">
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="loan-code" class="form-label">Kode Pinjaman</label>
                                    <input type="text" class="form-control" id="loan-code" name="loan-code" value="{{ $pinjamanAktif->id }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="payment-amount" class="form-label">Jumlah Pembayaran</label>
                                    <input type="number" class="form-control" id="payment-amount" name="payment-amount" placeholder="Masukkan jumlah pembayaran" min="10000" step="10000" required>
                                    <small class="text-muted"><i class="bi bi-info-circle"></i> Minimal Rp 10.000 dan kelipatan Rp 10.000.</small>
                                </div>
                            </div>
                            <div class="row hidden-content-right">
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="payment-method" class="form-label">Pilih Metode Pembayaran</label>
                                    <select class="form-select" id="payment-method" name="payment-method" required>
                                        <option value="cash">Tunai (Bayar Langsung)</option>
                                        <option value="transfer-bank">Transfer Bank</option>
                                        <option value="ewallet">E-Wallet (OVO, GoPay, Dana)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="payment-proof" class="form-label">Unggah Bukti Pembayaran</label>
                                    <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group text-center mt-4 hidden-content-right">
                                <button type="submit" class="hidden-content-right btn btn-success">
                                    <i class="bi bi-check-circle"></i> Konfirmasi Pembayaran
                                </button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </section>
            @elseif ($statusWajib && $statusWajib->status === 'Dalam Proses')
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

                        <button type="submit" class="hidden-content-right btn btn-primary w-100">
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

                        <button type="submit" class="hidden-content-right btn btn-primary w-100">
                            <i class="bi bi-check-circle-fill"></i> Konfirmasi Pembayaran
                        </button>
                    </form>
                </div>
            </div>
            @endif

            <div class="container mt-5" style="font-size:.9rem;">
                <!-- Definisi Pinjaman -->
                <section class="mb-4 hidden-content-right">
                    <div class="card shadow" style="border: 1px solid #435ebe;">
                        <div class="card-body">
                            <h5 class="fw-bold d-flex align-items-center hidden-content-right">
                                <i class="bi bi-book me-2 hidden-content-right" style="margin-top: -10px;"></i> Definisi Pinjaman
                            </h5>
                            <hr style="border-top: 2px solid #25396f; border-radius: 5px;">
                            <p class="hidden-content-right">
                                Pinjaman adalah fasilitas yang diberikan kepada anggota koperasi untuk memenuhi kebutuhan finansial mereka dengan ketentuan bunga ringan. Semua anggota dapat mengajukan pinjaman sesuai plafon yang ditentukan.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Total Pinjaman -->
                <section class="mb-4 hidden-content-right">
                    <div class="card shadow" style="border: 1px solid #435ebe;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold d-flex align-items-center justify-content-center hidden-content-right">
                                <i class="bi bi-cash-stack me-2" style="margin-top: -10px;"></i> Total Pinjaman Anda
                            </h5>
                            <hr>
                            <h2 class="font-extrabold mt-3 hidden-content-right">Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</h2>
                        </div>
                    </div>
                </section>

                @if ($pinjamanAktif)
                <section class="mb-4 hidden-content-right">
                    <div class="card" style="border: 2px solid #ff6b6b; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <div class="card-body text-center p-5" style=" color: #ff6b6b; border-radius: 15px;">
                            <div class="d-flex flex-column align-items-center hidden-content-right">
                                <i class="bi bi-exclamation-triangle-fill fs-1 mb-3" style="color: #ff6b6b; padding-bottom:50px;"></i>
                                <h1 style="font-weight: bold; text-shadow: 1px 1px 6px rgba(255, 107, 107, 0.2);"> Tidak Bisa Memulai Pinjaman </h1>
                            </div>
                            <hr style="border: 1px solid #ff6b6b; margin: 20px auto; width: 60%;">
                            <div class="p-3 hidden-content-right" style="border-radius: 10px; border: 1px solid #ffb3b3;">
                                <h5 style="font-weight: 500; color: #d9534f;">
                                    Anda masih memiliki angsuran yang belum diselesaikan.<br>
                                    Segera lunasi angsuran Anda untuk mengajukan pinjaman baru.
                                </h5>
                            </div>
                            <br>
                        </div>
                    </div>
                </section>

                @endif

                @if ($pinjamandalamproses)
                <section class="d-flex align-items-center justify-content-center p-4 hidden-content-right" style=" margin-bottom: 40px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06);">
                    <div class="w-100 hidden-content-right" style="border: 1px solid rgb(255, 213, 44); border-radius: 15px; overflow: hidden;  box-shadow: 0 2px 8px 1px rgba(0, 0, 0, 0.06);">
                        <div class="text-center p-4 d-flex flex-column align-items-center hidden-content-right justify-content-center" style="background: linear-gradient(135deg, rgb(255, 213, 44), rgb(255, 218, 52)); border-radius: 15px 15px 0 0; position: relative;">
                            <i class="bi bi-hourglass-split fs-1 mb-3 text-warning" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);"></i>
                            <h2 style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1); margin-top:-25px;">⏳ Pengajuan Pinjaman Sedang Diproses</h2>
                        </div>
                        <div class="p-3 text-center hidden-content-right" style=" border-radius: 0 0 15px 15px;">
                            <p class="mb-3 hidden-content-right" style="font-size: 1.2rem; color: #555;">
                                Mohon bersabar, pengajuan Anda sedang menunggu persetujuan admin.
                                <span class="fw-bold" style="color: rgb(255, 213, 44);">Notifikasi akan muncul secara otomatis</span> jika ada pembaruan terbaru dari kami terkait status pengajuan Anda.
                            </p>
                            <a href="{{ route('notifikasi') }}">
                                <div class="d-flex justify-content-center hidden-content-right">
                                    <i class="bi bi-bell-fill text-warning me-2 fs-5" style="margin-top: -3px;"></i>
                                    <span style="color: #777; font-size: 1rem;">Lihat halaman Notifikasi</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                @endif

                @if(!$statusWajib)
                <section class="d-flex hidden-content-right align-items-center justify-content-center p-4 shadow" style=" margin-bottom: 40px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06);">
                    <div class="w-100 hidden-content-right" style="border: 1px solid #ff6b6b; border-radius: 15px; overflow: hidden; box-shadow: 0 2px 8px 1px rgba(0, 0, 0, 0.06);">
                        <div class="text-center hidden-content-right p-4 d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(135deg, #ff6b6b, #ff8787); border-radius: 15px 15px 0 0; position: relative;">
                            <h2 style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1); margin-top: 10px;">🚫 Simpanan Wajib Belum Dibayar</h2>
                        </div>
                        <div class="p-3 text-center" style=" border-radius: 0 0 15px 15px;">
                            <p class="mb-3 hidden-content-right" style="font-size: 1.2rem;">
                                Anda belum melakukan pembayaran simpanan wajib untuk bulan ini. Pembayaran simpanan wajib adalah syarat utama untuk mengajukan pinjaman.
                            </p>
                            <p style="font-size: 1rem;" class="hidden-content-right">
                                Segera lakukan pembayaran agar pengajuan pinjaman Anda dapat diproses tanpa kendala.
                            </p>
                        </div>
                    </div>
                </section>
                @endif

                <!-- Formulir Pengajuan Pinjaman -->
                @if (!$pinjamanAktif && !$pinjamandalamproses && $statusWajib)
                <section class="mb-4 hidden-content-right">
                    <div class="card mb-4 shadow" style="border: 1px solid #435ebe; border-radius: 10px;">
                        <div class="card-header bg-primary text-white">
                            <h5 class="text-white hidden-content-right"><i class="bi bi-file-earmark-text me-2"></i> Formulir Pengajuan Pinjaman</h5>
                        </div>
                        <div class="card-body hidden-content-right" style="margin-top: 20px;">
                            <form action="{{ route('pinjaman.ajukan') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Jumlah Pinjaman -->
                                <div class="mb-3 hidden-content-right">
                                    <label for="loan-amount" class="form-label"><i class="bi bi-cash"></i> Jumlah Pinjaman</label>
                                    <input type="number" class="form-control" id="loan-amount" name="jumlah_pinjaman" placeholder="Masukkan jumlah pinjaman" min="100000" step="50000" required>
                                    <small class="text-muted"><i class="bi bi-info-circle"></i> Minimal Rp 100.000 dan kelipatan Rp 50.000.</small>
                                </div>

                                <!-- Jenis Jaminan -->
                                <div class="mb-3 hidden-content-right">
                                    <label for="jenis-jaminan" class="form-label"><i class="bi bi-shield-lock"></i> Jenis Jaminan</label>
                                    <select class="form-control" id="jenis-jaminan" name="jenis_jaminan" required>
                                        <option value="" disabled selected>Pilih jenis jaminan</option>
                                        <option value="BPKB Kendaraan">BPKB Kendaraan</option>
                                        <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                        <option value="Kartu Keluarga">Kartu Keluarga</option>
                                    </select>
                                </div>

                                <!-- Upload Jaminan -->
                                <div class="mb-3 hidden-content-right">
                                    <label for="file-jaminan" class="form-label"><i class="bi bi-upload"></i> Upload Jaminan (JPG, PNG, JPEG, maks 2MB)</label>
                                    <input type="file" class="form-control" id="jaminan-proof" name="jaminan-proof" accept="image/*" required>
                                </div>

                                <!-- Tombol Submit -->
                                <div class="text-end hidden-content-right">
                                    <button type="submit" class="hidden-content-right btn btn-primary">
                                        <i class="bi bi-send me-2"></i> Ajukan Pinjaman
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                @endif

                <!-- Status Pinjaman Aktif -->
                @if ($pinjamanAktif)
                <section class="mb-4 hidden-content-right">
                    <div class="card shadow p-4" style="border: 1px solid #435ebe;">
                        <h5 class="text-center hidden-content-right mb-3  fw-bold d-flex align-items-center pb-3" style="border-bottom: 2px solid #e0e0e0;">
                            <i class="bi bi-list-check me-2" style="margin-top: -10px; padding-right:20px;"></i> Detail Pinjaman Aktif
                        </h5>
                        <div class="row g-3 hidden-content-right" style="font-size: 1.1rem;">
                            <div class="col-12 hidden-content-right">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold"><i class="bi bi-tag me-2"></i>Kode Pinjaman</div>
                                    <div class="text-primary">{{ $pinjamanAktif->id }}</div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12 hidden-content-right">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold"><i class="bi bi-cash-stack me-2"></i>Jumlah Pinjaman</div>
                                    <div class="text-success">Rp {{ number_format($pinjamanAktif->jumlah_pinjaman, 0, ',', '.') }}</div>
                                </div>
                                <hr>
                            </div>
                            <div class="col-12 hidden-content-right">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold"><i class="bi bi-arrow-down-circle me-2"></i>Sisa Angsuran</div>
                                    <div class="text-warning">Rp {{ number_format($pinjamanAktif->sisa_angsuran > 0 ? $pinjamanAktif->sisa_angsuran : $pinjamanAktif->jumlah_pinjaman, 0, ',', '.') }}</div>
                                </div>
                                <hr>
                            </div>
                            @if ($pinjamanAktif->total_denda < 0)
                                <div class="col-12 hidden-content-right">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="fw-bold"><i class="bi bi-arrow-down-circle me-2"></i>Total Denda</div>
                                    <div class="text-warning">Rp {{ number_format($pinjamanAktif->total_denda > 0 ? $pinjamanAktif->total_denda : 0) }}
                                    </div>
                                </div>
                                <hr>
                        </div>
                        @endif
                        <div class="col-12 hidden-content-right">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold"><i class="bi bi-info-circle me-2"></i>Status</div>
                                <div class="text-danger">{{ $pinjamanAktif->status }}</div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-12 hidden-content-right">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold"><i class="bi bi-calendar-event me-2"></i>Tanggal Jatuh Tempo</div>
                                <div class="text-info">{{ \Carbon\Carbon::parse($pinjamanAktif->tanggal_jatuh_tempo)->format('d F Y') }}</div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            @endif

            <!-- Riwayat Transaksi (Pengajuan dan Pembayaran) -->
            <section class="mb-4 hidden-content-right">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white hidden-content-right">
                            <i class="bi bi-clock-history"></i> Riwayat Transaksi Pinjaman
                        </h5>
                    </div>
                    <div class="card-body hidden-content-right">
                        <!-- Input Pencarian -->
                        <div style="margin-bottom: 20px; position: relative;">
                            <div class="input-group hidden-content-right">
                                <input
                                    type="text"
                                    id="search-transaksi"
                                    class="form-control"
                                    placeholder="Cari berdasarkan ID Pinjaman, Tanggal, atau Status..."
                                    onkeyup="searchTransaksi()"
                                    style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                                <button
                                    class="btn btn-danger"
                                    onclick="resetSearchTransaksi()"
                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                    <i class="bi bi-x-circle"></i> Bersihkan
                                </button>
                            </div>
                        </div>

                        <div style="max-height: 700px; overflow:auto; font-size:.8rem;">
                            <table class="table table-hover hidden-content-right">
                                <thead class="table-primary hidden-content-right">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Pinjaman</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Tipe</th>
                                        <th>Jenis Jaminan</th>
                                        <th>Bukti Jaminan</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="data-transaksi" class="hidden-content-right">
                                    @forelse ($riwayatTransaksi as $index => $transaksi)
                                    <tr>
                                        <td class="hidden-content-right">{{ $index + 1 }}</td>
                                        <td class="hidden-content-right">{{ $transaksi['kode'] }}</td>
                                        <td class="hidden-content-right">{{ \Carbon\Carbon::parse($transaksi->tanggal)->format('Y-m-d') }}</td>
                                        <td class="hidden-content-right">
                                            <span class="badge bg-{{ $transaksi['jumlah'] >= 0 ? 'success' : 'danger' }}">
                                                Rp {{ number_format($transaksi['jumlah'], 0, ',', '.') }}
                                            </span>
                                        </td>
                                        <td class="hidden-content-right">{{ $transaksi['tipe'] }}</td>
                                        <td class="hidden-content-right">{{ $transaksi['jenis_jaminan'] ?? '-' }}</td>
                                        <td class="hidden-content-right">
                                            @if($transaksi->file_jaminan)
                                            <a href="{{ route('bukti.jaminan', ['bukti' => basename($transaksi->file_jaminan)]) }}" target="_blank" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </a>
                                            @else
                                            <span class="badge bg-secondary">Tidak Ada</span>
                                            @endif
                                        </td>
                                        <td class="hidden-content-right">
                                            @if(!empty($transaksi->bukti))
                                            <a href="{{ route('bukti.pembayaran', ['bukti' => basename($transaksi->bukti)]) }}" target="_blank" class="btn btn-sm btn-outline-success">
                                                <i class="bi bi-file-earmark-text"></i>
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
                                            'Aktif' => 'info',
                                            'Lunas' => 'success',
                                            'Berhasil' => 'primary'
                                            ];
                                            $badgeColor = $statusColors[$transaksi['status']] ?? 'secondary';
                                            @endphp
                                            <span class="badge bg-{{ $badgeColor }}">{{ $transaksi['status'] }}</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">
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
            </section>

            <!-- Formulir Pembayaran Pinjaman -->
            @if ($pinjamanAktif)
            <section class="mb-4 hidden-content-right">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white hidden-content-right">
                            <i class="bi bi-cash-coin" style="margin-top: -30px;"></i> Formulir Pembayaran Pinjaman
                        </h5>
                    </div>
                    <div class="card-body hidden-content-right">
                        @if($pembayaranProses)
                        <!-- Notifikasi jika ada pembayaran dalam proses -->
                        <div class="alert alert-warning d-flex align-items-center hidden-content-right" role="alert">
                            <i class="bi bi-hourglass-split me-2" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5 class="alert-heading hidden-content-right">Pembayaran Sedang Diproses</h5>
                                <p class="hidden-content-right">
                                    Anda sudah mengajukan pembayaran sebelumnya dan saat ini masih dalam proses verifikasi. Silakan tunggu hingga pembayaran diverifikasi oleh admin sebelum mengajukan pembayaran baru.
                                </p>
                            </div>
                        </div>
                        @else
                        <!-- Info Denda -->
                        @if($pinjamanAktif->total_denda > 0)
                        <div class="alert alert-warning hidden-content-right">
                            <strong>Info Denda:</strong> Anda memiliki denda sebesar
                            <b>Rp {{ number_format($pinjamanAktif->total_denda, 0, ',', '.') }}</b>.
                        </div>
                        @endif

                        <!-- Form Pembayaran -->
                        <form action="{{ route('pinjaman.bayar') }}" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">
                            @csrf
                            <div class="row hidden-content-right">
                                <div class="col-md-6 mb-3">
                                    <label for="loan-code" class="form-label">Kode Pinjaman</label>
                                    <input type="text" class="form-control" id="loan-code" name="loan-code" value="{{ $pinjamanAktif->id }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="payment-amount" class="form-label">Jumlah Pembayaran</label>
                                    <input type="number" class="form-control" id="payment-amount" name="payment-amount" placeholder="Masukkan jumlah pembayaran" min="10000" step="10000" required>
                                    <small class="text-muted"><i class="bi bi-info-circle"></i> Minimal Rp 10.000 dan kelipatan Rp 10.000.</small>
                                </div>
                            </div>
                            <div class="row hidden-content-right">
                                <div class="col-md-6 mb-3">
                                    <label for="payment-method" class="form-label">Pilih Metode Pembayaran</label>
                                    <select class="form-select" id="payment-method" name="payment-method" required>
                                        <option value="cash">Tunai (Bayar Langsung)</option>
                                        <option value="transfer-bank">Transfer Bank</option>
                                        <option value="ewallet">E-Wallet (OVO, GoPay, Dana)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="payment-proof" class="form-label">Unggah Bukti Pembayaran</label>
                                    <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group text-center mt-4">
                                <button type="submit" class="hidden-content-right btn btn-success">
                                    <i class="bi bi-check-circle"></i> Konfirmasi Pembayaran
                                </button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </section>
            @endif
        </div>

        @elseif (auth()->user()->status === 'Nonaktif')
        {{-- Tampilkan pesan akun nonaktif --}}
        <h3 class="text-red-500 text-center">Akun Anda Nonaktif. Silakan hubungi admin untuk informasi lebih lanjut.</h3>

        @else

        <div class="page-heading d-flex align-items-center pb-3 border-bottom hidden-content-right">
            <i class="bi bi-cash-coin me-2 fs-3 text-primary" style="margin-top: -30px; padding-right: 30px;"></i>
            <h2 class="mb-0 fw-bold">Pinjaman</h2>
        </div>

        <div class="container mt-5" style="font-size:.9rem;">
            <!-- Definisi Pinjaman -->
            <section class="mb-4 hidden-content-right">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-body hidden-content-right">
                        <h5 class="fw-bold d-flex align-items-center hidden-content-right">
                            <i class="bi bi-book me-2" style="margin-top: -10px;"></i> Definisi Pinjaman
                        </h5>
                        <hr style="border-top: 2px solid #25396f; border-radius: 5px;">
                        <p class="hidden-content-right">
                            Pinjaman adalah fasilitas yang diberikan kepada anggota koperasi untuk memenuhi kebutuhan finansial mereka dengan ketentuan bunga ringan. Semua anggota dapat mengajukan pinjaman sesuai plafon yang ditentukan.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Total Pinjaman -->
            <section class="mb-4 hidden-content-right">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-body text-center hidden-content-right">
                        <h5 class="fw-bold d-flex align-items-center justify-content-center hidden-content-right">
                            <i class="bi bi-cash-stack me-2" style="margin-top: -10px;"></i> Total Pinjaman Anda
                        </h5>
                        <hr>
                        <h2 class="font-extrabold mt-3 hidden-content-right">Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</h2>
                    </div>
                </div>
            </section>

            @if ($pinjamanAktif)
            <section class="mb-4 hidden-content-right">
                <div class="card" style="border: 2px solid #ff6b6b; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-body text-center p-5 hidden-content-right" style=" color: #ff6b6b; border-radius: 15px;">
                        <div class="d-flex flex-column align-items-center hidden-content-right">
                            <i class="bi bi-exclamation-triangle-fill fs-1 mb-3" style="color: #ff6b6b; padding-bottom:50px;"></i>
                            <h1 style="font-weight: bold; text-shadow: 1px 1px 6px rgba(255, 107, 107, 0.2);"> Tidak Bisa Memulai Pinjaman </h1>
                        </div>
                        <hr style="border: 1px solid #ff6b6b; margin: 20px auto; width: 60%;">
                        <div class="p-3 hidden-content-right" style="border-radius: 10px; border: 1px solid #ffb3b3;">
                            <h5 style="font-weight: 500; color: #d9534f;">
                                Anda masih memiliki angsuran yang belum diselesaikan.<br>
                                Segera lunasi angsuran Anda untuk mengajukan pinjaman baru.
                            </h5>
                        </div>
                        <br>
                    </div>
                </div>
            </section>
            @endif

            @if ($pinjamandalamproses)
            <div class="card shadow-lg border-0 mb-4 text-center hidden-content-right" style="border: 1px solid rgb(255, 213, 44); border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); padding: 20px;">
                <div class="card-body bg-warning text-dark" style="border: 1px solid rgb(255, 200, 40); border-radius: 10px;">
                    <div class="d-flex align-items-start justify-content-center hidden-content-right">
                        <div>
                            <h4 class="fw-bold hidden-content-right">⏳ Pengajuan Pinjaman Sedang Diproses</h4>
                            <hr style="border: 1px solid rgb(0, 0, 0);">
                            <p class="hidden-content-right">
                                Mohon bersabar, pengajuan Anda sedang menunggu persetujuan admin.
                                <br> <span class="fw-bold">Notifikasi akan muncul secara otomatis</span> jika ada pembaruan terbaru dari kami terkait status pengajuan Anda.
                            </p>
                        </div>
                    </div>
                    <div class="mt-3 hidden-content-right">
                        <a href="{{ route('notifikasi') }}" class="d-flex justify-content-center align-items-center text-decoration-none">
                            <i class="bi bi-bell-fill text-dark me-2 fs-5" style="margin-top: -10px;"></i>
                            <span style="color: #555; font-size: 1rem;">Lihat halaman Notifikasi</span>
                        </a>
                    </div>
                </div>
            </div>
            @endif

            @if($statusWajibDalamproses)
            <div class="card shadow-lg border-0 mb- hidden-content-right4" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px;">
                <div class="card-body bg-info text-dark" style="border: 1px solid #17a2b8; border-radius: 10px;">
                    <div class="d-flex align-items-start hidden-content-right">
                        <i class="bi bi-hourglass-split text-white fs-1 me-3" style="margin-top: -20px;"></i>
                        <div>
                            <h4 class="fw-bold hidden-content-right">Pembayaran Simpanan Wajib Sedang Diproses</h4>
                            <hr style="border: 2px solid #17a2b8;">
                            <p class="hidden-content-right">
                                Terima kasih telah melakukan pembayaran simpanan wajib bulan ini. Saat ini, pembayaran Anda sedang dalam proses verifikasi oleh admin.
                                Harap bersabar, proses ini biasanya memakan waktu sekitar <strong>1-2 hari kerja</strong>.
                                <br><br>
                                Anda akan menerima notifikasi otomatis setelah pembayaran berhasil diverifikasi. Jika ada kendala, silakan hubungi kami melalui <strong>halaman Bantuan</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(!$statusWajibinfo)
            <div class="card shadow-lg border-0 mb-4 hidden-content-right" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px;">
                <div class="card-body bg-danger text-white" style="border: 1px solid #ff6b6b; border-radius: 10px;">
                    <div class="d-flex align-items-start hidden-content-right">
                        <i class="bi bi-exclamation-circle text-white fs-1 me-3" style="margin-top: -20px;"></i>
                        <div>
                            <h4 class="fw-bold hidden-content-right">Simpanan Wajib Belum Dibayar</h4>
                            <hr style="border: 2px solid #ff6b6b;">
                            <p class="hidden-content-right">
                                Anda belum melakukan pembayaran simpanan wajib untuk bulan ini. Pembayaran simpanan wajib adalah syarat utama untuk mengajukan pinjaman.
                                <br><br>
                                Segera lakukan pembayaran agar pengajuan pinjaman Anda dapat diproses tanpa kendala.
                                Jika membutuhkan bantuan, silakan kunjungi <strong>halaman Bantuan</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($isDitolak)
            <!-- Card Peringatan Pengajuan Ditolak -->
            <div class="card shadow mb-3 hidden-content-right">
                <div class="card-body bg-danger text-white hidden-content-right" style="padding: 30px; border-radius: 10px;text-align:center;">
                    <div class="d-flex align-items-center hidden-content-right">
                        <i class="bi bi-x-circle-fill me-4" style="font-size: 2rem; margin-top:-150px;"></i>
                        <div>
                            <strong style="font-size: 2rem; display: block; margin-bottom: 10px;">Pengajuan Simpanan Wajib Anda Ditolak!</strong>
                            <p style="font-size: 1.2rem; line-height: 1.5; margin: 0;" class="hidden-content-right">
                                Mohon maaf, pengajuan simpanan wajib Anda tidak dapat diproses. Silakan periksa kembali data yang Anda kirimkan atau lakukan pembayaran ulang sesuai ketentuan koperasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Formulir Pengajuan Pinjaman -->
            @if (!$pinjamanAktif && !$pinjamandalamproses && $statusWajib)
            <section class="mb-4 hidden-content-right">
                <div class="card mb-4 shadow" style="border: 1px solid #435ebe; border-radius: 10px;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="text-white hidden-content-right"><i class="bi bi-file-earmark-text me-2"></i> Formulir Pengajuan Pinjaman</h5>
                    </div>
                    <div class="card-body hidden-content-right" style="margin-top: 20px;">
                        <form action="{{ route('pinjaman.ajukan') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Jumlah Pinjaman -->
                            <div class="mb-3 hidden-content-right">
                                <label for="loan-amount" class="form-label"><i class="bi bi-cash"></i> Jumlah Pinjaman</label>
                                <input type="number" class="form-control" id="loan-amount" name="jumlah_pinjaman" placeholder="Masukkan jumlah pinjaman" min="100000" step="50000" required>
                                <small class="text-muted"><i class="bi bi-info-circle"></i> Minimal Rp 100.000 dan kelipatan Rp 50.000.</small>
                            </div>

                            <!-- Jenis Jaminan -->
                            <div class="mb-3 hidden-content-right">
                                <label for="jenis-jaminan" class="form-label"><i class="bi bi-shield-lock"></i> Jenis Jaminan</label>
                                <select class="form-control" id="jenis-jaminan" name="jenis_jaminan" required>
                                    <option value="" disabled selected>Pilih jenis jaminan</option>
                                    <option value="BPKB Kendaraan">BPKB Kendaraan</option>
                                    <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                    <option value="Kartu Keluarga">Kartu Keluarga</option>
                                    <option value="Sertifikat Rumah">Sertifikat Rumah</option>
                                </select>
                            </div>

                            <!-- Upload Jaminan -->
                            <div class="mb-3 hidden-content-right">
                                <label for="file-jaminan" class="form-label"><i class="bi bi-upload"></i> Upload Jaminan (JPG, PNG, JPEG, maks 2MB)</label>
                                <input type="file" class="form-control" id="jaminan-proof" name="jaminan-proof" accept="image/*" required>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="text-end">
                                <button type="submit" class="hidden-content-right btn btn-primary">
                                    <i class="bi bi-send me-2"></i> Ajukan Pinjaman
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            @endif

            <!-- Status Pinjaman Aktif -->
            @if ($pinjamanAktif)
            <section class="mb-4 hidden-content-right">
                <div class="card shadow p-4" style="border: 1px solid #435ebe;">
                    <h5 class="text-center hidden-content-right mb-3 fw-bold d-flex align-items-center pb-3" style="border-bottom: 2px solid #e0e0e0;">
                        <i class="bi bi-list-check me-2" style="margin-top: -10px; padding-right:20px;"></i> Detail Pinjaman Aktif
                    </h5>
                    <div class="row g-3 hidden-content-right" style="font-size: 1.1rem;">
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold"><i class="bi bi-tag me-2"></i>Kode Pinjaman</div>
                                <div class="text-primary">{{ $pinjamanAktif->id }}</div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold"><i class="bi bi-cash-stack me-2"></i>Jumlah Pinjaman</div>
                                <div class="text-success">Rp {{ number_format($pinjamanAktif->jumlah_pinjaman, 0, ',', '.') }}</div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-12 hidden-content-right">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold hidden-content-right"><i class="bi bi-arrow-down-circle me-2"></i>Sisa Angsuran</div>
                                <div class="text-warning hidden-content-right">Rp {{ number_format($pinjamanAktif->sisa_angsuran > 0 ? $pinjamanAktif->sisa_angsuran : $pinjamanAktif->jumlah_pinjaman, 0, ',', '.') }}</div>
                            </div>
                            <hr>
                        </div>
                        @if($pinjamanAktif->total_denda > 0)
                        <div class="col-12 hidden-content-right">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold hidden-content-right"><i class="bi bi-arrow-down-circle me-2"></i>Total Denda</div>
                                <div class="text-danger hidden-content-right">Rp {{ number_format($pinjamanAktif->total_denda > 0 ? $pinjamanAktif->total_denda : 0) }}
                                </div>
                            </div>
                            <hr>
                        </div>
                        @endif
                        <div class="col-12 hidden-content-right">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold hidden-content-right"><i class="bi bi-info-circle me-2"></i>Status</div>
                                <div class="text-info hidden-content-right">{{ $pinjamanAktif->status }}</div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-12 hidden-content-right">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fw-bold hidden-content-right"><i class="bi bi-calendar-event me-2"></i>Tanggal Jatuh Tempo</div>
                                <div class="text-info hidden-content-right">{{ \Carbon\Carbon::parse($pinjamanAktif->tanggal_jatuh_tempo)->format('d F Y') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif

            <!-- Riwayat Transaksi (Pengajuan dan Pembayaran) -->
            <section class="mb-4 hidden-content-right">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white hidden-content-right">
                            <i class="bi bi-clock-history"></i> Riwayat Transaksi Pinjaman
                        </h5>
                    </div>
                    <div class="card-body hidden-content-right">
                        <!-- Input Pencarian -->
                        <div style="margin-bottom: 20px; position: relative;">
                            <div class="input-group hidden-content-right">
                                <input
                                    type="text"
                                    id="search-transaksi"
                                    class="form-control"
                                    placeholder="Cari berdasarkan ID Pinjaman, Tanggal, atau Status..."
                                    onkeyup="searchTransaksi()"
                                    style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                                <button
                                    class="btn btn-danger"
                                    onclick="resetSearchTransaksi()"
                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                    <i class="bi bi-x-circle"></i> Bersihkan
                                </button>
                            </div>
                        </div>

                        <div style="max-height: 700px; overflow:auto; font-size:.8rem;">
                            <table class="table table-hover hidden-content-right">
                                <thead class="table-primary hidden-content-right">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Pinjaman</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Tipe</th>
                                        <th>Jenis Jaminan</th>
                                        <th>Bukti Jaminan</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="data-transaksi">
                                    @forelse ($riwayatTransaksi as $index => $transaksi)
                                    <tr>
                                        <td class="hidden-content-right">{{ $index + 1 }}</td>
                                        <td class="hidden-content-right">{{ $transaksi['kode'] }}</td>
                                        <td class="hidden-content-right">{{ \Carbon\Carbon::parse($transaksi->tanggal)->format('Y-m-d') }}</td>
                                        <td class="hidden-content-right">
                                            <span class="badge bg-{{ $transaksi['jumlah'] >= 0 ? 'success' : 'danger' }}">
                                                Rp {{ number_format($transaksi['jumlah'], 0, ',', '.') }}
                                            </span>
                                        </td>
                                        <td class="hidden-content-right">{{ $transaksi['tipe'] }}</td>
                                        <td class="hidden-content-right">{{ $transaksi['jenis_jaminan'] ?? '-' }}</td>
                                        <td class="hidden-content-right">
                                            @if($transaksi->file_jaminan)
                                            <a href="{{ route('bukti.jaminan', ['bukti' => basename($transaksi->file_jaminan)]) }}" target="_blank" class="btn btn-sm btn-outline-info">
                                                <i class="bi bi-file-earmark-text"></i>
                                            </a>
                                            @else
                                            <span class="badge bg-secondary">Tidak Ada</span>
                                            @endif
                                        </td>
                                        <td class="hidden-content-right">
                                            @if(!empty($transaksi->bukti))
                                            <a href="{{ route('bukti.pembayaran', ['bukti' => basename($transaksi->bukti)]) }}" target="_blank" class="btn btn-sm btn-outline-success">
                                                <i class="bi bi-file-earmark-text"></i>
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
                                            'Aktif' => 'info',
                                            'Lunas' => 'success',
                                            'Berhasil' => 'primary'
                                            ];
                                            $badgeColor = $statusColors[$transaksi['status']] ?? 'secondary';
                                            @endphp
                                            <span class="badge bg-{{ $badgeColor }}">{{ $transaksi['status'] }}</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">
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
            </section>

            <!-- Formulir Pembayaran Pinjaman -->
            @if ($pinjamanAktif)
            <section class="mb-4 hidden-content-right">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white hidden-content-right">
                            <i class="bi bi-cash-coin" style="margin-top: -30px;"></i> Formulir Pembayaran Pinjaman
                        </h5>
                    </div>
                    <div class="card-body hidden-content-right">
                        @if($pembayaranProses)
                        <!-- Notifikasi jika ada pembayaran dalam proses -->
                        <div class="alert alert-warning d-flex align-items-center hidden-content-right" role="alert">
                            <i class="bi bi-hourglass-split me-2" style="font-size: 1.5rem;"></i>
                            <div>
                                <h5 class="alert-heading hidden-content-right">Pembayaran Sedang Diproses</h5>
                                <p class="hidden-content-right">
                                    Anda sudah mengajukan pembayaran sebelumnya dan saat ini masih dalam proses verifikasi. Silakan tunggu hingga pembayaran diverifikasi oleh admin sebelum mengajukan pembayaran baru.
                                </p>
                            </div>
                        </div>
                        @else
                        <!-- Info Denda -->
                        @if($pinjamanAktif->total_denda > 0)
                        <div class="alert alert-warning hidden-content-right">
                            <strong>Info Denda:</strong> Anda memiliki denda sebesar
                            <b>Rp {{ number_format($pinjamanAktif->total_denda, 0, ',', '.') }}</b>.
                        </div>
                        @endif

                        <!-- Form Pembayaran -->
                        <form action="{{ route('pinjaman.bayar') }}" method="POST" enctype="multipart/form-data" style="margin-top: 20px;">
                            @csrf
                            <div class="row hidden-content-right">
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="loan-code" class="form-label">Kode Pinjaman</label>
                                    <input type="text" class="form-control" id="loan-code" name="loan-code" value="{{ $pinjamanAktif->id }}" readonly>
                                </div>
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="payment-amount" class="form-label">Jumlah Pembayaran</label>
                                    <input type="number" class="form-control" id="payment-amount" name="payment-amount" placeholder="Masukkan jumlah pembayaran" min="10000" step="10000" required>
                                    <small class="text-muted"><i class="bi bi-info-circle"></i> Minimal Rp 10.000 dan kelipatan Rp 10.000.</small>
                                </div>
                            </div>
                            <div class="row hidden-content-right">
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="payment-method" class="form-label">Pilih Metode Pembayaran</label>
                                    <select class="form-select" id="payment-method" name="payment-method" required>
                                        <option value="cash">Tunai (Bayar Langsung)</option>
                                        <option value="transfer-bank">Transfer Bank</option>
                                        <option value="ewallet">E-Wallet (OVO, GoPay, Dana)</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3 hidden-content-right">
                                    <label for="payment-proof" class="form-label">Unggah Bukti Pembayaran</label>
                                    <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                                </div>
                            </div>
                            <div class="form-group text-center mt-4 hidden-content-right">
                                <button type="submit" class="hidden-content-right btn btn-success">
                                    <i class="bi bi-check-circle"></i> Konfirmasi Pembayaran
                                </button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </section>
            @endif
        </div>
        @endif

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2025 &copy; SATRBIN</p>
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
    <script src="{{asset('dist/assets/js/pinjaman.js')}}"></script>
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
        // document.getElementById('loan-amount').addEventListener('input', function(e) {
        //     let value = e.target.value.replace(/\D/g, ''); // Hapus semua karakter kecuali angka
        //     value = new Intl.NumberFormat('id-ID').format(value); // Format angka dengan titik
        //     e.target.value = value;
        // });
        // document.getElementById('payment-amount').addEventListener('input', function(e) {
        //     let value = e.target.value.replace(/\D/g, ''); // Hapus semua karakter kecuali angka
        //     value = new Intl.NumberFormat('id-ID').format(value); // Format angka dengan titik
        //     e.target.value = value;
        // });
    </script>
    <script>
        function searchTransaksi() {
            let input = document.getElementById("search-transaksi").value.toLowerCase();
            let table = document.getElementById("data-transaksi");
            let rows = table.getElementsByTagName("tr");

            for (let i = 0; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName("td");
                let match = false;

                for (let j = 1; j < cells.length; j++) { // Mulai dari index 1 untuk menghindari nomor
                    if (cells[j] && cells[j].innerText.toLowerCase().includes(input)) {
                        match = true;
                        break;
                    }
                }

                rows[i].style.display = match ? "" : "none";
            }
        }

        function resetSearchTransaksi() {
            document.getElementById("search-transaksi").value = "";
            searchTransaksi();
        }
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