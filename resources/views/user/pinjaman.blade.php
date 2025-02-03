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
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
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

            <li
            class="sidebar-item  ">
            <a href="{{route('notifikasi')}}" class='sidebar-link'>
                <i class="bi bi-chat-dots-fill"></i>
                <span>Notifikasi</span>
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
@if (session('error'))
    <div class="alert alert-danger" style="background-color: salmon; color:aliceblue; border-radius:20px; margin-bottom:20px;">
        <ul>
            <li style="text-decoration: none;">{{ session('error') }}</li>
        </ul>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success" style="background-color: lightgreen; color:aliceblue; border-radius:20px;">
        {{ Session::get('success') }}
    </div>
@endif

<h2>Pinjaman</h2>

<div class="container mt-5">
  <!-- Notifikasi -->
    <section class="mb-4">
        <div class="card">
            <div class="card-body">
                <h5>Notifikasi</h5>
                <div class="alert alert-danger" role="alert">
                    Anda memiliki angsuran pinjaman yang jatuh tempo pada <strong>01 Februari 2025</strong>. Harap segera lakukan pembayaran untuk menghindari denda.
                </div>
                <div class="alert alert-info" role="alert">
                    Pinjaman Anda telah disetujui dengan kode transaksi <strong>PN-20250120-001</strong>. Silakan cek detail pinjaman Anda.
                </div>
            </div>
        </div>
    </section>

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
                <h5>Anda masih memiliki Angsuran, Selesaikan Angsuran Anda untuk memulai Pinjaman</h4>
                <br><br>
            </div>
        </div>
    </section>
    @endif

   <!-- Formulir Pengajuan Pinjaman -->
    @if (!$pinjamanAktif) 
        <section class="mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>Formulir Pengajuan Pinjaman</h5>
                    <form action="{{ route('pinjaman.ajukan') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="loan-amount">Jumlah Pinjaman</label>
                            <input type="number" class="form-control" id="loan-amount" name="loan-amount" placeholder="Masukkan jumlah pinjaman" min="10000" step="10000" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="loan-purpose">Tujuan Pinjaman</label>
                            <textarea class="form-control" id="loan-purpose" name="loan-purpose" placeholder="Jelaskan tujuan pinjaman Anda" rows="3" required></textarea>
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
                <div style="height: 400px; overflow-y: auto;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode Pinjaman</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Tipe</th>
                                <th>Metode</th>
                                <th>Bukti</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($riwayatTransaksi as $transaksi)
                                <tr>
                                    <td>{{ $transaksi['kode'] }}</td>
                                    <td>{{ date('d F Y H:i', strtotime($transaksi['tanggal'])) }}</td>
                                    <td>Rp {{ number_format($transaksi['jumlah'], 0, ',', '.') }}</td>
                                    <td>{{ $transaksi['tipe'] }}</td>
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
                                    <td colspan="7" class="text-center">Tidak ada transaksi.</td>
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
        <section class="mb-4">
            <div class="card">
                <div class="card-body">
                    <h5>Formulir Pembayaran Pinjaman</h5>
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
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2025 &copy; SATRBIN</p>
                    </div>
                    <div class="float-end">
                        <p>Dibuat dengan <span class="text-danger"><i class="bi bi-heart"></i></span> oleh <a
                                href="https://saugi.me">Bagas & Fahri</a></p>
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
