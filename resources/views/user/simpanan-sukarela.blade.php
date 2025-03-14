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
                            class="sidebar-item ">
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
                            class="sidebar-item  has-sub active">
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
                <div class="card shadow-sm mb-3" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #ffffff; padding: 20px;">
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

            <div class="container">
                <h2 class="pb-3 border-bottom">
                    <i class="bi bi-gem "></i> Simpanan Sukarela
                </h2>
            </div>

            <!-- Section Peringatan Keterlambatan -->
            <div class="card shadow-lg border-0 mb-4" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #ffffff; padding: 20px;">
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

            <!-- Definisi Simpanan Sukarela -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-body">
                        <span class="fw-bold d-flex align-items-center">
                            <i class="bi bi-bookmark-heart-fill text-primary" style="margin-top: -20px;"></i>
                            <h5 style="margin-left: 10px;">Definisi Simpanan Sukarela</h5>
                        </span>
                        <hr style="border-top: 2px solid #25396f; border-radius: 5px;">
                        <p style="color: #495057;">
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
                        <div style="max-height: 400px; overflow: auto; font-size: .9rem; text-align: left;">
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
                                <tbody>
                                    @forelse ($sukarela as $index => $data)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->kode_transaksi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_transaksi)->translatedFormat('d F Y') }}</td>
                                        <td>{{$data->metode_pembayaran}}</td>
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
                                            'Gagal' => 'danger'
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
                                    <option value="cash">Tunai (Bayar Langsung)</option>
                                    <option value="transfer-bank">Transfer Bank</option>
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
                        <p style="color: #495057;">
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
                        <div style="max-height: 400px; overflow: auto; font-size: .9rem; text-align: left;">
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
                                <tbody>
                                    @forelse ($sukarela as $index => $data)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $data->kode_transaksi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_transaksi)->translatedFormat('d F Y') }}</td>
                                        <td>{{$data->metode_pembayaran}}</td>
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
                                            'Gagal' => 'danger'
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
            <div class="card shadow-lg border-0 mb-4" style="text-align: center; border: 1px solid #d9d9d9; border-radius: 8px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); margin-bottom: 20px; background-color: #ffffff; padding: 20px;">
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
            <section class="d-flex align-items-center justify-content-center p-4 shadow" style="background-color: #ffffff; margin-bottom: 40px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06);">
                <div class="w-100" style="border: 1px solid #ff6b6b; border-radius: 15px; overflow: hidden; box-shadow: 0 2px 8px 1px rgba(0, 0, 0, 0.06);">
                    <div class="text-center p-4 d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(135deg, #ff6b6b, #ff8787); border-radius: 15px 15px 0 0; position: relative;">
                        <h2 style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1); margin-top: 10px;">🚫 Simpanan Wajib Belum Dibayar</h2>
                    </div>
                    <div class="p-3 text-center" style="background-color: #ffffff; border-radius: 0 0 15px 15px;">
                        <p class="mb-3" style="font-size: 1.2rem; color: #555;">
                            Anda belum melakukan pembayaran simpanan wajib untuk bulan ini. Pembayaran simpanan wajib adalah syarat utama untuk mengajukan pinjaman.
                        </p>
                        <p style="font-size: 1rem; color: #777;">
                            Segera lakukan pembayaran agar pengajuan pinjaman Anda dapat diproses tanpa kendala.
                        </p>
                    </div>
                </div>
            </section>
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
                                    <option value="cash">Tunai (Bayar Langsung)</option>
                                    <option value="transfer-bank">Transfer Bank</option>
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
    </script>
</body>

</html>