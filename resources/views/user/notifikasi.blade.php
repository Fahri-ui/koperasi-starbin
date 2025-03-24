<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengingat dan Informasi</title>

    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app.css/')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark.css/')}}">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('dist/assets/css/notifikasi.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<style>
    .card {
        width: 100%;
        max-width: 1000px;
        min-width: 400px;
    }
</style>

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

                        <li class="sidebar-item  hidden-content">
                            <a href="{{route('user')}}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span>Beranda</span>
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

                        <li class="sidebar-item hidden-content">
                            <a href="{{route('pinjaman')}}" class='sidebar-link'>
                                <i class="bi bi-cash-coin"></i>
                                <span>Pinjaman</span>
                            </a>
                        </li>

                        <li class="sidebar-item position-relative active hidden-content">
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
            @if (auth()->user()->status === 'Belum_Bayar_Simpanan_Wajib')

            <div class="mb-4 pb-2 border-bottom">
                <h2 class="text-center fw-bold">
                    <i class="bi bi-bell-fill me-2 "></i> Halaman Notifikasi
                </h2>
            </div>

            @if($pinjamanAktif && $pinjamanAktif->total_denda > 0)
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

            <div class="container ">
                <div class="d-flex flex-column align-items-center ">
                    @foreach ($notifikasiPerBulan as $bulan => $notifikasi)
                    <div class="w-100 hidden-content-right">
                        <h4 class="text-primary fw-bold mt-4 border-bottom pb-2 hidden-content-right">
                            <i class="bi bi-calendar3 me-2"></i>
                            {{ \Carbon\Carbon::parse($bulan . '-01')->translatedFormat('F Y') }}
                        </h4>
                    </div>

                    @foreach ($notifikasi as $item)
                    @if ($item->type !== 'info')
                    <div class="card shadow-sm p-0 mb-4 rounded border-1 {{ $item->is_read ? '' : 'border-primary' }} hidden-content-right">
                        <!-- Header notifikasi dengan warna sesuai tipe -->
                        <div class="card-header bg-{{ $item->type }} text-white">
                            <h4 class="fw-bold mb-0 text-white hidden-content-right">
                                <i class="bi {{ $item->icon }} me-2"></i>
                                {{ $item->user_id == 0 ? 'Pesan Umum' : 'Pesan Untuk Anda' }}
                            </h4>
                        </div>

                        <!-- Isi notifikasi -->
                        <div class="card-body hidden-content-right" style="margin-top: 20px;">
                            <p class="mb-3 pb-2 border-bottom hidden-content-right">
                                {{ $item->message }}
                                @if (!$item->is_read)
                                <span class="badge bg-primary ms-2 hidden-content-right">Baru</span>
                                @endif
                            </p>

                            <!-- Bagian tanggal diterima -->
                            <div class="d-flex justify-content-between align-items-center hidden-content-right">
                                <small class="text-muted hidden-content-right">
                                    <i class="bi bi-clock-history me-1 "></i>
                                    Diterima: {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y - H:i') }}
                                </small>
                                <small class="text-muted hidden-content-right">
                                    <i class="bi bi-eye{{ $item->is_read ? '-fill' : '' }} me-1"></i>
                                    {{ $item->is_read ? 'Sudah Dibaca' : 'Belum Dibaca' }}
                                </small>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach

                    @if ($notifikasiPerBulan->isEmpty())
                    <div class="alert alert-info text-center mt-4 hidden-content-right">
                        <i class="bi bi-info-circle-fill"></i> Tidak ada notifikasi terbaru.
                    </div>
                    @endif
                </div>
            </div>


            @elseif (auth()->user()->status === 'Nonaktif')
            {{-- Tampilkan pesan akun nonaktif --}}
            <h3 class="text-red-500 text-center">Akun Anda Nonaktif. Silakan hubungi admin untuk informasi lebih lanjut.</h3>

            @else
            <div class="container">
                <div class="mb-4 pb-2 border-bottom hidden-content-right">
                    <h2 class="text-center fw-bold">
                        <i class="bi bi-bell-fill me-2 "></i> Halaman Notifikasi
                    </h2>
                </div>

                <div class="d-flex flex-column align-items-center">
                    @foreach ($notifikasiPerBulan as $bulan => $notifikasi)
                    <div class="w-100 hidden-content-right">
                        <h4 class="text-primary fw-bold mt-4 border-bottom pb-2">
                            <i class="bi bi-calendar3 me-2"></i>
                            {{ \Carbon\Carbon::parse($bulan . '-01')->translatedFormat('F Y') }}
                        </h4>
                    </div>

                    @foreach ($notifikasi as $item)
                    @if ($item->type !== 'info')
                    <div class="card shadow mb-4 rounded border-1 {{ $item->is_read ? '' : 'border-primary' }} hidden-content-right">
                        <!-- Header notifikasi dengan warna sesuai tipe -->
                        <div class="card-header bg-{{ $item->type }} text-white">
                            <h4 class="fw-bold mb-0 text-white hidden-content-right">
                                <i class="bi {{ $item->icon }} me-2"></i>
                                {{ $item->user_id == 0 ? 'Pesan Umum' : 'Pesan Untuk Anda' }}
                            </h4>
                        </div>

                        <!-- Isi notifikasi -->
                        <div class="card-body hidden-content-right" style="margin-top: 20px;">
                            <p class="mb-3 pb-2 border-bottom hidden-content-right">
                                {{ $item->message }}
                                @if (!$item->is_read)
                                <span class="badge bg-primary ms-2">Baru</span>
                                @endif
                            </p>

                            <!-- Bagian tanggal diterima -->
                            <div class="d-flex justify-content-between align-items-center hidden-content-right">
                                <small class="text-muted ">
                                    <i class="bi bi-clock-history me-1"></i>
                                    Diterima: {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y - H:i') }}
                                </small>
                                <small class="text-muted">
                                    <i class="bi bi-eye{{ $item->is_read ? '-fill' : '' }} me-1"></i>
                                    {{ $item->is_read ? 'Sudah Dibaca' : 'Belum Dibaca' }}
                                </small>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @endforeach

                    @if ($notifikasiPerBulan->isEmpty())
                    <div class="alert alert-info text-center mt-4">
                        <i class="bi bi-info-circle-fill"></i> Tidak ada notifikasi terbaru.
                    </div>
                    @endif
                </div>
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
        <script src="{{asset('dist/assets/js/bootstrap.js')}}"></script>
        <script src="{{asset('dist/assets/js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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