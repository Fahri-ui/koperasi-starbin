<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan</title>

    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('dist/assets/css/bantuan.css')}}">

</head>

<style>
    /* Style untuk Card */
    .card {
        border: 1px solid #d9d9d9;
        border-radius: 8px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        background-color: #ffffff;
        padding: 20px;
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
                            class="sidebar-item">
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
                            <a href="" class='sidebar-link'>
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
                            class="sidebar-item active ">
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
                <div class="card shadow-sm mb-3" style="text-align: center;">
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
            <div class="card shadow-lg border-0 mb-4" style="text-align: center;">
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

            <div class="container mt-4">
                <!-- Judul Halaman -->
                <div class="mb-4 pb-2 border-bottom text-center">
                    <h2 class="fw-bold">
                        <i class="bi bi-question-circle me-2"></i> Pusat Bantuan
                    </h2>
                    <p class="text-muted">
                        Kami di sini untuk membantu Anda. Temukan jawaban atas pertanyaan Anda atau hubungi kami langsung.
                    </p>
                </div>

                <!-- Daftar FAQ -->
                <section class="mb-4">
                    <div class="accordion mb-4" id="helpAccordion">

                        <!-- Pertanyaan 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    <i class="bi bi-credit-card me-2"></i> Apa itu Simpanan Wajib
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body border-bottom" style="background:rgb(230, 231, 249); border-left: 5px solid rgb(13, 0, 197); padding: 15px;">
                                    Adalah Simpanan yang harus di bayarakan rutin perbulan agar akun tetap aktif
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-journal-check me-2"></i> Bagaimana cara mengajukan pinjaman?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#helpAccordion">
                                <div class="accordion-body border-bottom" style="background: #e6f9ed; border-left: 5px solid #198754; padding: 15px;">
                                    Anda dapat mengajukan pinjaman melalui halaman pinjaman di sistem kami atau datang langsung ke kantor koperasi untuk konsultasi.
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-warning text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="bi bi-exclamation-triangle me-2"></i> Apakah ada denda keterlambatan pembayaran angsuran?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#helpAccordion">
                                <div class="accordion-body border-bottom" style="background:rgb(252, 255, 205); border-left: 5px solid rgb(255, 239, 15); padding: 15px;">
                                    Ya, denda dihitung sejak lewat tanggal jatuh tempo sebesar 2%. Nilai ini akan terus naik per minggu jika tidak segera dilunasi.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefor" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-journal-check me-2"></i> Apa yang terjadi ketika akun dinonaktifkan
                                </button>
                            </h2>
                            <div id="collapsefor" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#helpAccordion">
                                <div class="accordion-body border-bottom" style="background:rgb(249, 230, 230); border-left: 5px solid rgb(211, 2, 2); padding: 15px;">
                                    Anda tidak akan bisa login dan jika ada pinjaman aktif, jaminan darinya kita sita.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Formulir Hubungi Kami -->
                <section class="mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 text-white"><i class="bi bi-envelope me-2"></i> Hubungi Kami</h5>
                        </div>
                        <div class="card-body" style="margin-top: 10px;">
                            <form action="{{ route('user.kirim-pesan') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="message" class="form-label"><i class="bi bi-chat-text me-2"></i> Pesan Anda</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success"><i class="bi bi-send me-2"></i> Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </section>

                <!-- Informasi Kontak dalam Card -->
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 30px;">
                        <div class="row gy-4">

                            <!-- Alamat -->
                            <div class="col-lg-4">
                                <div class="card text-center shadow p-3 border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="mb-0 text-white"><i class="bi bi-geo-alt me-2"></i> Alamat</h5>
                                    </div>
                                    <div class="card-body">
                                        <i class="bi bi-map fs-2 text-primary"></i>
                                        <p class="card-text mt-2">Kec. Binong, Kab. Subang, Prov. Jawa Barat</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-map-fill me-1"></i> Lihat di Peta
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Kontak -->
                            <div class="col-lg-4">
                                <div class="card text-center shadow p-3 border-success">
                                    <div class="card-header bg-success text-white">
                                        <h5 class="mb-0 text-white"><i class="bi bi-telephone me-2"></i> Nomor Telepon</h5>
                                    </div>
                                    <div class="card-body">
                                        <i class="bi bi-phone fs-2 text-success"></i>
                                        <p class="card-text mt-2">
                                            62839320338692
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://wa.me/62839320338692" target="_blank" class="btn btn-outline-success btn-sm">
                                            <i class="bi bi-whatsapp me-1"></i> Hubungi via WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-lg-4">
                                <div class="card text-center shadow p-3 border-danger">
                                    <div class="card-header bg-danger text-white">
                                        <h5 class="mb-0 text-white"><i class="bi bi-envelope me-2"></i> Email</h5>
                                    </div>
                                    <div class="card-body">
                                        <i class="bi bi-file-earmark-text fs-2 text-danger"></i>
                                        <p class="card-text mt-2">
                                            example@gmail.com
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="mailto:fahriabdurohman@gmail.com" class="btn btn-outline-danger btn-sm">
                                            <i class="bi bi-send me-1"></i> Kirim Email
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            @elseif (auth()->user()->status === 'Nonaktif')
            {{-- Tampilkan pesan akun nonaktif --}}
            <h3 class="text-red-500 text-center">Akun Anda Nonaktif. Silakan hubungi admin untuk informasi lebih lanjut.</h3>

            @else
             <div class="container mt-4">
                <!-- Judul Halaman -->
                <div class="mb-4 pb-2 border-bottom text-center">
                    <h2 class="fw-bold">
                        <i class="bi bi-question-circle me-2"></i> Pusat Bantuan
                    </h2>
                    <p class="text-muted">
                        Kami di sini untuk membantu Anda. Temukan jawaban atas pertanyaan Anda atau hubungi kami langsung.
                    </p>
                </div>

                <!-- Daftar FAQ -->
                <section class="mb-4">
                    <div class="accordion mb-4" id="helpAccordion">

                        <!-- Pertanyaan 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    <i class="bi bi-credit-card me-2"></i> Apa itu Simpanan Wajib
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body border-bottom" style="background:rgb(230, 231, 249); border-left: 5px solid rgb(13, 0, 197); padding: 15px;">
                                    Adalah Simpanan yang harus di bayarakan rutin perbulan agar akun tetap aktif
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-journal-check me-2"></i> Bagaimana cara mengajukan pinjaman?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#helpAccordion">
                                <div class="accordion-body border-bottom" style="background: #e6f9ed; border-left: 5px solid #198754; padding: 15px;">
                                    Anda dapat mengajukan pinjaman melalui halaman pinjaman di sistem kami atau datang langsung ke kantor koperasi untuk konsultasi.
                                </div>
                            </div>
                        </div>

                        <!-- Pertanyaan 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-warning text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="bi bi-exclamation-triangle me-2"></i> Apakah ada denda keterlambatan pembayaran angsuran?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#helpAccordion">
                                <div class="accordion-body border-bottom" style="background:rgb(252, 255, 205); border-left: 5px solid rgb(255, 239, 15); padding: 15px;">
                                    Ya, denda dihitung sejak lewat tanggal jatuh tempo sebesar 2%. Nilai ini akan terus naik per minggu jika tidak segera dilunasi.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-danger text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefor" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="bi bi-journal-check me-2"></i> Apa yang terjadi ketika akun dinonaktifkan
                                </button>
                            </h2>
                            <div id="collapsefor" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#helpAccordion">
                                <div class="accordion-body border-bottom" style="background:rgb(249, 230, 230); border-left: 5px solid rgb(211, 2, 2); padding: 15px;">
                                    Anda tidak akan bisa login dan jika ada pinjaman aktif, jaminan darinya kita sita.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Formulir Hubungi Kami -->
                <section class="mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0 text-white"><i class="bi bi-envelope me-2"></i> Hubungi Kami</h5>
                        </div>
                        <div class="card-body" style="margin-top: 10px;">
                            <form action="{{ route('user.kirim-pesan') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="message" class="form-label"><i class="bi bi-chat-text me-2"></i> Pesan Anda</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success"><i class="bi bi-send me-2"></i> Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </section>

                <!-- Informasi Kontak dalam Card -->
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 30px;">
                        <div class="row gy-4">

                            <!-- Alamat -->
                            <div class="col-lg-4">
                                <div class="card text-center shadow p-3 border-primary">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="mb-0 text-white"><i class="bi bi-geo-alt me-2"></i> Alamat</h5>
                                    </div>
                                    <div class="card-body">
                                        <i class="bi bi-map fs-2 text-primary"></i>
                                        <p class="card-text mt-2">Kec. Binong, Kab. Subang, Prov. Jawa Barat</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://maps.google.com" target="_blank" class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-map-fill me-1"></i> Lihat di Peta
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Kontak -->
                            <div class="col-lg-4">
                                <div class="card text-center shadow p-3 border-success">
                                    <div class="card-header bg-success text-white">
                                        <h5 class="mb-0 text-white"><i class="bi bi-telephone me-2"></i> Nomor Telepon</h5>
                                    </div>
                                    <div class="card-body">
                                        <i class="bi bi-phone fs-2 text-success"></i>
                                        <p class="card-text mt-2">
                                            62839320338692
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="https://wa.me/62839320338692" target="_blank" class="btn btn-outline-success btn-sm">
                                            <i class="bi bi-whatsapp me-1"></i> Hubungi via WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-lg-4">
                                <div class="card text-center shadow p-3 border-danger">
                                    <div class="card-header bg-danger text-white">
                                        <h5 class="mb-0 text-white"><i class="bi bi-envelope me-2"></i> Email</h5>
                                    </div>
                                    <div class="card-body">
                                        <i class="bi bi-file-earmark-text fs-2 text-danger"></i>
                                        <p class="card-text mt-2">
                                            example@gmail.com
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="mailto:fahriabdurohman@gmail.com" class="btn btn-outline-danger btn-sm">
                                            <i class="bi bi-send me-1"></i> Kirim Email
                                        </a>
                                    </div>
                                </div>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>