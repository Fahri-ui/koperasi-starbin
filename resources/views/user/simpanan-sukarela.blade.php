<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Simpanan Sukarela</title>

    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app')}}.css">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark')}}.css">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <!-- Sidebar Header -->
                <div class="sidebar-header position-relative border-bottom ">
                    <div class="user-info text-center mt-3 pb-3">
                        <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" class="rounded-circle" alt="User Avatar" style="width: 150px; height: 150px; object-fit: cover;">
                        <h3 class="mt-2 mb-0 ">{{ Auth::user()->fullname }}</h3>
                        <small class="text-muted">Anggota Koperasi</small>
                    </div>
                </div>
                <!-- Theme Toggle Dipindahkan ke Bawah -->
                <div class="sidebar-footer d-flex align-items-center justify-content-between py-3 border-bottom">
                    <!-- Logo & Nama -->
                    <div class="d-flex align-items-center" style="margin-left: 20px;">
                        <div class="logo" style="width: 40px; height: 40px;">
                            <img src="{{ asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="ms-2">
                            <h6 class="mb-0" style="font-size: 12px;">Koperasi</h6>
                            <h5 class="mb-0" style="font-size: 14px; font-weight: bold;">STARBIN</h5>
                        </div>
                    </div>

                    <!-- Theme Toggle -->
                    <div class="theme-toggle d-flex align-items-center gap-2" style="margin-right: 20px;">
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
                        <li class="sidebar-title mt-4">Menu</li>

                        <li class="sidebar-item ">
                            <a href="{{route('user')}}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('profil')}}" class='sidebar-link'>
                                <i class="bi bi-person-circle"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub active">
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

                        <li class="sidebar-item">
                            <a href="{{route('pinjaman')}}" class='sidebar-link'>
                                <i class="bi bi-cash-coin"></i>
                                <span>Pinjaman</span>
                            </a>
                        </li>

                        <li class="sidebar-item position-relative">
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

                        <li class="sidebar-item">
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
                        <button type="submit" class="btn btn-link text-danger" style="text-decoration: none;">
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

            @if (auth()->user()->status === 'Belum_Aktif')

            <div class="container mt-4">
                <!-- Card Peringatan -->
                <div class="card shadow-sm mb-3" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px;  padding: 20px;">
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
                    <div class="card-body" style="margin-top: 30px; text-align: left;">
                        <form action="{{ route('simpanan.bayar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nominal" class="form-label"><i class="bi bi-cash-stack"></i> Nominal Pembayaran</label>
                                <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Masukkan jumlah simpanan" min="500000" max="500000" required>
                                <small class="text-muted"><i class="bi bi-info-circle"></i> Nominal wajib adalah Rp 500.000</small>
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
                                <small class="text-muted" style="font-size:.8rem;"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG (max 2MB)</small>
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
                    <div class="card-body bg-danger text-white" style="padding: 30px; border-radius: 10px;text-align:center;">
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
                    <div class="card-body" style="margin-top: 30px; text-align: left;">
                        <form action="{{ route('simpanan.bayar') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nominal" class="form-label"><i class="bi bi-cash-stack"></i> Nominal Pembayaran</label>
                                <input type="number" id="nominal" name="nominal" class="form-control" placeholder="Masukkan jumlah simpanan" min="500000" max="500000" required>
                                <small class="text-muted"><i class="bi bi-info-circle"></i> Nominal wajib adalah Rp 500.000</small>
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
                                <small class="text-muted" style="font-size:.8rem;"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG (max 2MB)</small>
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

            <div class="container">
                <h2 class="pb-3 border-bottom">
                    <i class="bi bi-gem "></i> Simpanan Sukarela
                </h2>
            </div>

            @if ($telatwajib && $telatwajib->status === 'Dalam Proses')
            <!-- Jika pembayaran masih dalam proses -->
            <div class="alert alert-warning shadow-sm" role="alert" style="border-radius: 10px;">
                <!-- Header -->
                <div class="d-flex align-items-center p-3" style="border-bottom: 2px solid #d1a900; color:black;">
                    <i class="bi bi-hourglnjass-split me-3 fs-2" style="margin-top: -40px;"></i>
                    <h5 class="mb-0 fw-bold " style="color:black;">Pengajuan Dalam Proses</h5>
                </div>

                <!-- Isi Section -->
                <div class="p-3" style="text-align: justify; border-bottom: 2px solid #d1a900;">
                    <p class="mb-2">
                        Pengajuan penyetoran simpanan wajib Anda saat ini <strong>sedang dalam tahap verifikasi oleh admin</strong>.
                        Proses ini bertujuan untuk memastikan keakuratan data sebelum dana dikonfirmasi.
                    </p>
                    <p class="mb-2">
                        <i class="bi bi-clock-history"></i> <strong>Estimasi waktu:</strong> 1-2 hari kerja.
                    </p>
                </div>

                <!-- Footer -->
                <div class="p-3 text-center" style="border-top: 2px solid #d1a900;">
                    <p class="mb-0">
                        Silakan <strong>periksa status pembayaran Anda secara berkala</strong>. Jika membutuhkan bantuan lebih lanjut,
                        hubungi <strong>admin koperasi</strong> atau kunjungi kantor kami.
                    </p>
                </div>
            </div>
            @elseif ($telatwajib && $telatwajib->status === 'Ditolak')
            <div class="alert alert-danger shadow-sm" role="alert" style="border-radius: 10px;">
                <!-- Header -->
                <div class="d-flex align-items-center p-3" style="border-bottom: 2px solid #a94442;">
                    <i class="bi bi-x-circle me-3 fs-2 text-white" style="margin-top: -40px; padding-right:30px;"></i>
                    <h5 class="mb-0 fw-bold text-white">Pengajuan Ditolak</h5>
                </div>

                <!-- Isi Section -->
                <div class="p-3" style="text-align: justify; border-bottom: 2px solid #a94442;">
                    <p class="mb-2">
                        Pengajuan penyetoran simpanan wajib Anda <strong>ditolak oleh admin</strong>. Hal ini dapat terjadi karena beberapa alasan berikut:
                    </p>
                    <div class="mb-2">
                        <p><i class="bi bi-exclamation-triangle-fill text-white"></i> Data atau bukti pembayaran tidak valid.</p>
                        <p><i class="bi bi-x-circle-fill text-white"></i> Kesalahan dalam metode pembayaran atau transfer yang tidak terdeteksi.</p>
                    </div>
                    <p class="mb-2">
                        Silakan periksa kembali data Anda dan lakukan pengajuan ulang sesuai dengan ketentuan yang berlaku.
                    </p>
                </div>

                <!-- Footer -->
                <div class="p-3 text-center" style="border-top: 2px solid #a94442;">
                    <p class="mb-0">
                        Jika Anda memerlukan bantuan, silakan hubungi <strong>admin koperasi</strong> atau datang langsung ke kantor kami untuk verifikasi lebih lanjut.
                    </p>
                </div>
            </div>
            <!-- Card Form Pembayaran Simpanan -->
            <div class="card shadow-lg border-0" id="bayar">
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
                            <small class="text-muted"><i class="bi bi-info-circle"></i>Total bayar adalah tunggakan simpanan wajib 2 bulan, yaitu 100.000</small>
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
            @else
            <!-- Section Peringatan Keterlambatan -->
            <div class="card shadow-lg border-0 mb-4" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px;  padding: 20px;">
                <div class="card-body bg-warning text-dark" style="border: 1px solid #435ebe; border-radius: 10px;">
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
            <div class="card shadow-lg border-0" id="bayar">
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
                            <small class="text-muted"><i class="bi bi-info-circle"></i>Total bayar adalah tunggakan simpanan wajib 2 bulan, yaitu 100.000</small>
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
            @endif

            <!-- Definisi Simpanan Sukarela -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-body">
                        <span class="fw-bold d-flex align-items-center">
                            <i class="bi bi-bookmark-heart-fill text-primary" style="margin-top: -20px;"></i>
                            <h5 style="margin-left: 10px;">Definisi Simpanan Sukarela</h5>
                        </span>
                        <hr style="border-top: 2px solid #25396f; border-radius: 5px;">
                        <p>
                            <i class="bi bi-info-circle-fill text-primary"></i> Simpanan Sukarela adalah simpanan fleksibel yang dapat disetor atau ditarik kapan saja oleh anggota koperasi. Nominal simpanan tidak dibatasi dan dapat digunakan sebagai tabungan atau investasi.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Saldo Simpanan Sukarela -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-body text-center">
                        <h5 class="pb-2 mb-3 border-bottom">
                            <i class="bi bi-wallet2 text-success"></i> Saldo Simpanan Sukarela
                        </h5>
                        <h2 class="font-extrabold mt-3 text-primary">
                            <i class="bi bi-cash-stack"></i> Rp {{ number_format($totalSukarela, 0, ',', '.') }}
                        </h2>
                        <p class="text-muted">
                            <i class="bi bi-info-circle"></i> Saldo total Anda saat ini
                        </p>
                    </div>
                </div>
            </section>

            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white">
                            <i class="bi bi-piggy-bank-fill"></i> Daftar Simpanan Sukarela
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- Input Pencarian -->
                        <div style="margin-bottom: 20px; position: relative;">
                            <div class="input-group">
                                <input
                                    type="text"
                                    id="search-sukarela"
                                    class="form-control"
                                    placeholder="Cari berdasarkan Kode Transaksi, Tanggal, atau Status..."
                                    onkeyup="searchSukarela()"
                                    style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                                <button
                                    class="btn btn-danger"
                                    onclick="resetSearchSukarela()"
                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                    <i class="bi bi-x-circle"></i> Bersihkan
                                </button>
                            </div>
                        </div>

                        <div style="max-height: 400px; overflow:auto; font-size:.9rem;">
                            <table class="table table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Metode</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Bukti</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="data-sukarela">
                                    @forelse ($sukarela as $index => $data)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->kode_transaksi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_transaksi)->translatedFormat('d F Y') }}</td>
                                        <td>{{ $data->metode_pembayaran }}</td>
                                        <td>
                                            <span class="badge bg-info">
                                                <i class="bi {{ $data->jenis_transaksi === 'penyetoran' ? 'bi-arrow-down-circle' : 'bi-arrow-up-circle' }}"></i>
                                                {{ ucfirst($data->jenis_transaksi) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if(!empty($data->bukti))
                                            <a href="{{ route('bukti.pembayaran', ['bukti' => basename($data->bukti)]) }}" target="_blank" class="btn btn-sm btn-outline-success">Lihat Bukti</a>
                                            @else
                                            <span class="badge bg-secondary">Tidak Ada</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $data->jumlah >= 0 ? 'success' : 'primary' }}">
                                                Rp {{ number_format($data->jumlah, 0, ',', '.') }}
                                            </span>
                                        </td>
                                        <td>
                                            @php
                                            $statusColors = [
                                            'Berhasil' => 'success',
                                            'Dalam Proses' => 'warning',
                                            'Ditolak' => 'danger'
                                            ];
                                            $badgeColor = $statusColors[$data->status] ?? 'secondary';
                                            @endphp
                                            <span class="badge bg-{{ $badgeColor }}">{{ ucfirst($data->status) }}</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <span class="badge bg-warning">
                                                <i class="bi bi-exclamation-circle"></i> Belum ada data transaksi
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

            @if (!!$telatwajib && !$telatwajib->status === 'Dalam Proses')
            <div class="alert p-4 shadow" style="background-color: #ff5733; color: #fff; border-radius: 10px;">
                <div class="d-flex align-items-start">
                    <i class="bi bi-exclamation-triangle-fill fs-1 me-3" style="color: #fff700; margin-top:-15px; padding-right:30px;"></i>
                    <div>
                        <h4 class="text-white">Penting: <span class="badge" style="background-color: #fff700; color: #ff5733;">Perhatian</span></h4>
                        <p style="text-align: justify;">
                            Silakan <strong>tarik Simpanan Sukarela</strong> jika tidak ingin membayar Simpanan Wajib lagi.
                            Akun akan <strong>dinonaktifkan secara otomatis</strong> jika hingga bulan depan belum membayar Simpanan Wajib.
                            Jika akun telah <strong>dinonaktifkan</strong> dan Anda belum menarik semua Simpanan Sukarela, Anda bisa mengajukan penarikan langsung di kantor kami.
                            <br>
                            <i class="bi bi-file-earmark-text"></i> <strong>Syarat:</strong> Bawa <strong>bukti tangkapan layar</strong> dari halaman ini pada bagian <strong>Saldo Simpanan Sukarela</strong> sebagai bukti kepemilikan Simpanan Sukarela.
                        </p>
                    </div>
                </div>
            </div>
            @endif

            <!-- Formulir Penyetoran dan Penarikan -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-gradient bg-primary text-white">
                        <h5 class="mb-0 text-white">
                            <i class="bi bi-wallet2"></i> Simpanan Sukarela
                        </h5>
                    </div>
                    <div class="card-body">
                        @if ($statusSukarela && $statusSukarela->status === 'Dalam Proses')
                        <!-- Jika ada transaksi dalam proses -->
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <i class="bi bi-hourglass-split me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5 class="alert-heading">Transaksi Sedang Diproses</h5>
                                <p>Anda memiliki transaksi yang masih dalam proses. Silakan tunggu hingga transaksi selesai sebelum mengajukan yang baru.</p>
                            </div>
                        </div>
                        @else
                        <!-- Jika tidak ada transaksi dalam proses, tampilkan form -->
                        <h5 class="pb-2 border-bottom" style="margin-top: 10px;"><i class="bi bi-file-earmark-text"></i> Formulir Penyetoran / Penarikan</h5>
                        <form action="{{ route('simpanan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="jenis" value="sukarela">

                            <div class="mb-3">
                                <label for="jenis_transaksi" class="form-label"><i class="bi bi-shuffle"></i> Jenis Transaksi</label>
                                <select name="jenis_transaksi" id="jenis_transaksi" class="form-select" required onchange="toggleBukti()">
                                    <option value="penarikan">Penarikan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="jumlah" class="form-label"><i class="bi bi-cash"></i> Jumlah (Rp)</label>
                                <input type="number" name="jumlah" id="jumlah" class="form-control" min="5000" step="5000" max="1000000000" required placeholder="Masukkan nominal transaksi">
                                <small class="text-muted"><i class="bi bi-info-circle"></i> Minimal Rp 5.000 dan kelipatan Rp 5.000.</small>
                            </div>

                            <div class="mb-3">
                                <label for="metode_pembayaran" class="form-label"><i class="bi bi-credit-card"></i> Metode Pembayaran</label>
                                <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required onchange="toggleBukti()">
                                    <option value="transfer-bank">Transfer Bank</option>
                                    <option value="cash">Tunai (Bayar Langsung)</option>
                                    <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                                </select>
                            </div>

                            <!-- Input Bukti Pembayaran (Dinamis) -->
                            <div class="mb-3">
                                <label for="bukti" class="form-label"><i class="bi bi-upload"></i> Upload Bukti Pembayaran</label>
                                <input type="file" name="bukti" id="bukti" class="form-control" accept="image/jpeg, image/png, image/jpg">
                                <small class="text-muted"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG.</small>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-check-circle-fill"></i> Konfirmasi Transaksi
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </section>


            @elseif (auth()->user()->status === 'Nonaktif')
            {{-- Tampilkan pesan akun nonaktif --}}
            <h3 class="text-red-500 text-center">Akun Anda Nonaktif. Silakan hubungi admin untuk informasi lebih lanjut.</h3>

            @else

            <div class="container">
                <h2 class="pb-3 border-bottom">
                    <i class="bi bi-gem "></i> Simpanan Sukarela
                </h2>
            </div>

            <!-- Definisi Simpanan Sukarela -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-body">
                        <span class="fw-bold d-flex align-items-center">
                            <i class="bi bi-bookmark-heart-fill text-primary" style="margin-top: -20px;"></i>
                            <h5 style="margin-left: 10px;">Definisi Simpanan Sukarela</h5>
                        </span>
                        <hr style="border-top: 2px solid #25396f; border-radius: 5px;">
                        <p>
                            <i class="bi bi-info-circle-fill text-primary"></i> Simpanan Sukarela adalah simpanan fleksibel yang dapat disetor atau ditarik kapan saja oleh anggota koperasi. Nominal simpanan tidak dibatasi dan dapat digunakan sebagai tabungan atau investasi.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Saldo Simpanan Sukarela -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-body text-center">
                        <h5 class="pb-2 mb-3 border-bottom">
                            <i class="bi bi-wallet2 text-success"></i> Saldo Simpanan Sukarela
                        </h5>
                        <h2 class="font-extrabold mt-3 text-primary">
                            <i class="bi bi-cash-stack"></i> Rp {{ number_format($totalSukarela, 0, ',', '.') }}
                        </h2>
                        <p class="text-muted">
                            <i class="bi bi-info-circle"></i> Saldo total Anda saat ini
                        </p>
                    </div>
                </div>
            </section>

            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white">
                            <i class="bi bi-piggy-bank-fill"></i> Daftar Simpanan Sukarela
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- Input Pencarian -->
                        <div style="margin-bottom: 20px; position: relative;">
                            <div class="input-group">
                                <input
                                    type="text"
                                    id="search-sukarela"
                                    class="form-control"
                                    placeholder="Cari berdasarkan Kode Transaksi, Tanggal, atau Status..."
                                    onkeyup="searchSukarela()"
                                    style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                                <button
                                    class="btn btn-danger"
                                    onclick="resetSearchSukarela()"
                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                    <i class="bi bi-x-circle"></i> Bersihkan
                                </button>
                            </div>
                        </div>

                        <div style="max-height: 400px; overflow:auto; font-size:.9rem;">
                            <table class="table table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Metode</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Bukti</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="data-sukarela">
                                    @forelse ($sukarela as $index => $data)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->kode_transaksi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_transaksi)->translatedFormat('d F Y') }}</td>
                                        <td>{{ $data->metode_pembayaran }}</td>
                                        <td>
                                            <span class="badge bg-info">
                                                <i class="bi {{ $data->jenis_transaksi === 'penyetoran' ? 'bi-arrow-down-circle' : 'bi-arrow-up-circle' }}"></i>
                                                {{ ucfirst($data->jenis_transaksi) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if(!empty($data->bukti))
                                            <a href="{{ route('bukti.pembayaran', ['bukti' => basename($data->bukti)]) }}" target="_blank" class="btn btn-sm btn-outline-success">Lihat Bukti</a>
                                            @else
                                            <span class="badge bg-secondary">Tidak Ada</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-{{ $data->jumlah >= 0 ? 'success' : 'primary' }}">
                                                Rp {{ number_format($data->jumlah, 0, ',', '.') }}
                                            </span>
                                        </td>
                                        <td>
                                            @php
                                            $statusColors = [
                                            'Berhasil' => 'success',
                                            'Dalam Proses' => 'warning',
                                            'Ditolak' => 'danger'
                                            ];
                                            $badgeColor = $statusColors[$data->status] ?? 'secondary';
                                            @endphp
                                            <span class="badge bg-{{ $badgeColor }}">{{ ucfirst($data->status) }}</span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">
                                            <span class="badge bg-warning">
                                                <i class="bi bi-exclamation-circle"></i> Belum ada data transaksi
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

            @if($statusWajibDalamproses)
            <div class="card shadow-lg border-0 mb-4" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px;  padding: 20px;">
                <div class="card-body bg-info text-dark" style="border: 1px solid #17a2b8; border-radius: 10px;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-hourglass-split text-white fs-1 me-3" style="margin-top: -20px;"></i>
                        <div>
                            <h4 class="fw-bold">Pembayaran Simpanan Wajib Sedang Diproses</h4>
                            <hr style="border: 2px solid #17a2b8;">
                            <p style="color: rgb(80, 83, 85);">
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
            <div class="card shadow-lg border-0 mb-4" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; padding: 20px;">
                <div class="card-body bg-danger text-white" style="border: 1px solid #ff6b6b; border-radius: 10px;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-exclamation-circle text-white fs-1 me-3" style="margin-top: -20px;"></i>
                        <div>
                            <h4 class="fw-bold">Simpanan Wajib Belum Dibayar</h4>
                            <hr style="border: 2px solid #ff6b6b;">
                            <p style="color: rgb(255, 230, 230);">
                                Anda belum melakukan pembayaran simpanan wajib untuk bulan ini. Pembayaran simpanan wajib adalah syarat utama untuk melaukan tarnsaksi simpanan sukarela.
                                <br><br>
                                Segera lakukan pembayaran agar transaksi simpanan sukarela Anda dapat diproses tanpa kendala.
                                Jika membutuhkan bantuan, silakan kunjungi <strong>halaman Bantuan</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($isDitolak)
            <!-- Card Peringatan Pengajuan Ditolak -->
            <div class="card shadow mb-3">
                <div class="card-body bg-danger text-white" style="padding: 30px; border-radius: 10px;text-align:center;">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-x-circle-fill me-4" style="font-size: 2rem; margin-top:-150px;"></i>
                        <div>
                            <strong style="font-size: 2rem; display: block; margin-bottom: 10px;">Pengajuan Simpanan Wajib Anda Ditolak!</strong>
                            <p style="font-size: 1.2rem; line-height: 1.5; margin: 0;">
                                Mohon maaf, pengajuan simpanan wajib Anda tidak dapat diproses. Silakan periksa kembali data yang Anda kirimkan atau lakukan pembayaran ulang sesuai ketentuan koperasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($statusWajib)
            <!-- Formulir Penyetoran dan Penarikan -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-gradient bg-primary text-white">
                        <h5 class="mb-0 text-white">
                            <i class="bi bi-wallet2"></i> Simpanan Sukarela
                        </h5>
                    </div>
                    <div class="card-body">
                        @if ($statusSukarela && $statusSukarela->status === 'Dalam Proses')
                        <!-- Jika ada transaksi dalam proses -->
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <i class="bi bi-hourglass-split me-3" style="font-size: 2rem;"></i>
                            <div>
                                <h5 class="alert-heading">Transaksi Sedang Diproses</h5>
                                <p>Anda memiliki transaksi yang masih dalam proses. Silakan tunggu hingga transaksi selesai sebelum mengajukan yang baru.</p>
                            </div>
                        </div>
                        @else
                        <!-- Jika tidak ada transaksi dalam proses, tampilkan form -->
                        <h5 class="pb-2 border-bottom" style="margin-top: 10px;"><i class="bi bi-file-earmark-text"></i> Formulir Penyetoran / Penarikan</h5>
                        <form action="{{ route('simpanan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="jenis" value="sukarela">

                            <div class="mb-3">
                                <label for="jenis_transaksi" class="form-label"><i class="bi bi-shuffle"></i> Jenis Transaksi</label>
                                <select name="jenis_transaksi" id="jenis_transaksi" class="form-select" required onchange="toggleBukti()">
                                    <option value="penyetoran">Penyetoran</option>
                                    <option value="penarikan">Penarikan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="jumlah" class="form-label"><i class="bi bi-cash"></i> Jumlah (Rp)</label>
                                <input type="number" name="jumlah" id="jumlah" class="form-control" min="5000" step="5000" max="1000000000" required placeholder="Masukkan nominal transaksi">
                                <small class="text-muted"><i class="bi bi-info-circle"></i> Minimal Rp 5.000 dan kelipatan Rp 5.000.</small>
                            </div>

                            <div class="mb-3">
                                <label for="metode_pembayaran" class="form-label"><i class="bi bi-credit-card"></i> Metode Pembayaran</label>
                                <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" required onchange="toggleBukti()">
                                    <option value="transfer-bank">Transfer Bank</option>
                                    <option value="cash">Tunai (Bayar Langsung)</option>
                                    <option value="ewallet">E-Wallet (Dana, OVO, Gopay)</option>
                                </select>
                            </div>

                            <!-- Input Bukti Pembayaran (Dinamis) -->
                            <div class="mb-3">
                                <label for="bukti" class="form-label"><i class="bi bi-upload"></i> Upload Bukti Pembayaran</label>
                                <input type="file" name="bukti" id="bukti" class="form-control" accept="image/jpeg, image/png, image/jpg">
                                <small class="text-muted"><i class="bi bi-image"></i> Format yang didukung: JPG, JPEG, PNG.</small>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                <i class="bi bi-check-circle-fill"></i> Konfirmasi Transaksi
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </section>
            @endif
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
    <script>
        function toggleBukti() {
            const jenisTransaksi = document.getElementById('jenis_transaksi').value;
            const metodePembayaran = document.getElementById('metode_pembayaran').value;
            const buktiInput = document.getElementById('bukti');
            const buktiLabel = document.querySelector('label[for="bukti"]');

            // Sembunyikan bukti jika penarikan
            if (jenisTransaksi === 'penarikan') {
                buktiInput.removeAttribute('required');
                buktiInput.style.display = 'none';
                buktiLabel.style.display = 'none';
            } else if (metodePembayaran === 'cash') {
                buktiInput.removeAttribute('required');
                buktiInput.style.display = 'none';
                buktiLabel.style.display = 'none';
            } else {
                buktiInput.setAttribute('required', true);
                buktiInput.style.display = 'block';
                buktiLabel.style.display = 'block';
            }
        }

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
    </script>

    <script>
        function searchSukarela() {
            let input = document.getElementById("search-sukarela").value.toLowerCase();
            let table = document.getElementById("data-sukarela");
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

        function resetSearchSukarela() {
            document.getElementById("search-sukarela").value = "";
            searchSukarela();
        }
    </script>

</body>

</html>