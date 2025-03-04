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
                            class="sidebar-item active ">
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
                    <div class="card-body bg-danger text-white">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-x-circle-fill me-4 fs-2" style="margin-top: -30px;"></i>
                            <div>
                                <strong style="font-size: 2rem;">Pengajuan Anda Ditolak!</strong><br> Mohon maaf, pengajuan simpanan anggota Anda tidak dapat diproses. Silakan periksa kembali data yang Anda kirimkan atau lakukan pembayaran ulang sesuai ketentuan koperasi.
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

            @elseif (auth()->user()->status === 'Belum_Bayar_Simpanan')
            {{-- Tampilkan formulir pembayaran simpanan terakhir --}}
            @include('components.form_pembayaran_simpanan')

            @elseif (auth()->user()->status === 'Nonaktif')
            {{-- Tampilkan pesan akun nonaktif --}}
            <h3 class="text-red-500 text-center">Akun Anda Nonaktif. Silakan hubungi admin untuk informasi lebih lanjut.</h3>

            @else
            <h2>Pinjaman</h2>

            <div class="container mt-5" style="font-size:.9rem;">
                <!-- Definisi Pinjaman -->
                <section class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Definisi</h5>
                            <p>Pinjaman adalah fasilitas yang diberikan kepada anggota koperasi untuk memenuhi kebutuhan finansial mereka dengan ketentuan bunga ringan. Semua anggota dapat mengajukan pinjaman sesuai plafon yang ditentukan.</p>
                        </div>
                    </div>
                </section>

                <!-- Total Pinjaman -->
                <section class="mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5>Total Pinjaman Anda</h5>
                            <h2 class="font-extrabold mt-3">Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</h2>
                        </div>
                    </div>
                </section>

                @if ($pinjamanAktif)
                <section class="mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <br><br>
                            <h1>❗❗Tidak bisa memulai Pinjaman❗❗</h1>
                            <br><br><br>
                            <h5>Anda masih memiliki Angsuran, Selesaikan Angsuran Anda untuk memulai Pinjaman</h5>
                            <br><br>
                        </div>
                    </div>
                </section>
                @endif

                @if ($pinjamandalamproses)
                <section class="d-flex align-items-center justify-content-center p-4" style="background-color: #ffffff; margin-bottom: 40px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06);">
                    <div class="w-100" style="border: 1px solid rgb(255, 213, 44); border-radius: 15px; overflow: hidden;  box-shadow: 0 2px 8px 1px rgba(0, 0, 0, 0.2);">
                        <div class="text-center p-4 d-flex flex-column align-items-center justify-content-center" style="background: linear-gradient(135deg, rgb(255, 213, 44), rgb(255, 218, 52)); border-radius: 15px 15px 0 0; position: relative;">
                            <i class="bi bi-hourglass-split fs-1 mb-3 text-warning" style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);"></i>
                            <h2 style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1); margin-top:-25px;">⏳ Pengajuan Pinjaman Sedang Diproses</h2>
                        </div>
                        <div class="p-3 text-center" style="background-color: #ffffff; border-radius: 0 0 15px 15px;">
                            <p class="mb-3" style="font-size: 1.2rem; color: #555;">
                                Mohon bersabar, pengajuan Anda sedang menunggu persetujuan admin.
                                <span class="fw-bold" style="color: rgb(255, 213, 44);">Notifikasi akan muncul secara otomatis</span> jika ada pembaruan terbaru dari kami terkait status pengajuan Anda.
                            </p>
                            <a href="{{ route('notifikasi') }}">
                                <div class="d-flex justify-content-center">
                                    <i class="bi bi-bell-fill text-warning me-2 fs-5" style="margin-top: -3px;"></i>
                                    <span style="color: #777; font-size: 1rem;">Lihat halaman Notifikasi</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                @endif

                <!-- Formulir Pengajuan Pinjaman -->
                @if (!$pinjamanAktif && !$pinjamandalamproses)
                <section class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Formulir Pengajuan Pinjaman</h5>
                            <form action="{{ route('pinjaman.ajukan') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="loan-amount">Jumlah Pinjaman</label>
                                    <input type="number" class="form-control" id="loan-amount" name="jumlah_pinjaman" placeholder="Masukkan jumlah pinjaman" min="10000" step="10000" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alasan">Tujuan Pinjaman</label>
                                    <textarea class="form-control" id="alasan" name="alasan" placeholder="Jelaskan tujuan pinjaman Anda" rows="3" required></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary">Ajukan Pinjaman</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                @endif

                <!-- Status Pinjaman Aktif -->
                @if ($pinjamanAktif)
                <section class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Status Pinjaman Aktif</h5>
                            <br>
                            <p><strong>Kode Pinjaman:</strong> {{ $pinjamanAktif->id }}</p>
                            <p><strong>Jumlah Pinjaman:</strong> Rp {{ number_format($pinjamanAktif->jumlah_pinjaman, 0, ',', '.') }}</p>
                            <p><strong>Sisa Angsuran:</strong> Rp {{ number_format($pinjamanAktif->sisa_angsuran > 0 ? $pinjamanAktif->sisa_angsuran : $pinjamanAktif->jumlah_pinjaman, 0, ',', '.') }}</p>
                            <p><strong>Status:</strong> {{ $pinjamanAktif->status }}</p>
                            <p><strong>Tanggal Jatuh Tempo:</strong> {{ \Carbon\Carbon::parse($pinjamanAktif->tanggal_jatuh_tempo)->format('d F Y') }}</p>
                        </div>
                    </div>
                </section>
                @endif

                <!-- Riwayat Transaksi (Pengajuan dan Pembayaran) -->
                <section class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Riwayat Transaksi Pinjaman</h5>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th> <!-- Tambahkan kolom nomor -->
                                        <th> Pinjaman</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Tipe</th>
                                        <th>Tujuan</th> <!-- Tambahkan kolom baru -->
                                        <th>Metode</th>
                                        <th>Bukti</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($riwayatTransaksi as $transaksi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Nomor urut -->
                                        <td>{{ $transaksi['kode'] }}</td>
                                        <td>{{ \Carbon\Carbon::parse($transaksi->tanggal)->format('d F Y') }}</td>
                                        <td>Rp {{ number_format($transaksi['jumlah'], 0, ',', '.') }}</td>
                                        <td>{{ $transaksi['tipe'] }}</td>
                                        <td>{{ $transaksi['tujuan'] ?? '-' }}</td> <!-- Menampilkan alasan -->
                                        <td>{{ $transaksi['metode'] ?? '-' }}</td>
                                        <td>
                                            @if(!empty($transaksi->bukti))
                                            <a href="{{ route('bukti.pembayaran', ['bukti' => basename($transaksi->bukti)]) }}">Lihat Bukti</a>
                                            @else
                                            -
                                            @endif
                                        </td>
                                        <td>{{ ucfirst($transaksi['status']) ?? '-' }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada transaksi.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>
                </section>

                <!-- Formulir Pembayaran Pinjaman -->
                @if ($pinjamanAktif)
                <section class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Formulir Pembayaran Pinjaman</h5>

                            <!-- Tambahan Info Denda -->
                            @if($pinjamanAktif->total_denda > 0)
                            <div class="alert alert-warning">
                                <strong>Info Denda:</strong> Anda memiliki denda sebesar
                                <b>Rp {{ number_format($pinjamanAktif->total_denda, 0, ',', '.') }}</b>.
                            </div>
                            @endif

                            <form action="{{ route('pinjaman.bayar') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="loan-code">Kode Pinjaman</label>
                                    <input type="text" class="form-control" id="loan-code" name="loan-code" value="{{ $pinjamanAktif->id }}" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="payment-amount">Jumlah Pembayaran</label>
                                    <input type="number" class="form-control" id="payment-amount" name="payment-amount" placeholder="Masukkan jumlah pembayaran" min="10000" step="10000" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="payment-method">Pilih Metode Pembayaran</label>
                                    <select class="form-control" id="payment-method" name="payment-method" required>
                                        <option value="cash">Tunai (Bayar Langsung)</option>
                                        <option value="transfer-bank">Transfer Bank</option>
                                        <option value="ewallet">E-Wallet (OVO, GoPay, Dana)</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="payment-proof">Unggah Bukti Pembayaran</label>
                                    <input type="file" class="form-control" id="payment-proof" name="payment-proof" accept="image/*" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success" style="background-color:  #435ebe;">Konfirmasi Pembayaran</button>
                                </div>
                            </form>
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

</body>

</html>