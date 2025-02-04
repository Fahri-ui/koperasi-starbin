<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpanan Wajib</title>

    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/css/main/app-dark.css')}}">
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
                    <li>{{ session('error') }}</li>
                </ul>
            </div>
            @endif

            <!-- Jika berhasil -->
            @if (Session::has('success'))
            <div class="alert alert-success" style="background-color: lightgreen; color:aliceblue; border-radius:20px;">
                {{ Session::get('success') }}
            </div>
            @endif


            <h2 style="margin-bottom: 50px;">Simpanan Wajib</h2>

            <!-- Definisi Simpanan Pokok -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Definisi</h5>
                        <p>Simpanan Wajib adalah simpanan yang harus dibayarkan setiap bulan oleh anggota koperasi dengan nominal sebesar <strong>Rp 50,000</strong>.</p>
                    </div>
                </div>
            </section>

            <!-- ✅ Status Pembayaran -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Status Pembayaran</h5>
                        <div class="alert alert-{{ $statusPembayaran }}" role="alert">
                            {{ $statusPesan }}
                            @if($statusPembayaran === 'warning')
                            <a href="#bayar" class="alert-link">Bayar Sekarang</a>.
                            @endif
                        </div>
                    </div>
                </div>
            </section>

            <!-- Saldo Simpanan Wajib -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>Total Simpanan Wajib Anda</h5>
                        <h2 class="font-extrabold mt-3">Rp {{ number_format($totalWajib, 0, ',', '.') }}</h2>
                        <p class="text-muted">Saldo total Anda saat ini</p>
                    </div>
                </div>
            </section>

            <!-- Riwayat Transaksi -->
            <section class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Daftar Simpanan Sukarela</h5>
                        <div style="height: 400px; overflow-y: auto;"> <!-- Wrapper untuk overflow -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Kode Transaksi</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($wajib as $data)
                                    <tr>
                                        <td>{{ $data->kode_transaksi }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->tanggal_transaksi)->translatedFormat('d F Y') }}</td>
                                        <td>{{ ucfirst($data->jenis_transaksi) }}</td> <!-- Tampilkan jenis transaksi -->
                                        <td>{{ number_format($data->jumlah, 0, ',', '.') }}</td>
                                        <td>{{ ucfirst($data->status) }}</td> <!-- Tampilkan status -->
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5">Belum ada data transaksi.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Formulir Penyetoran dan Penarikan -->
            <section class="mb-4" id="bayar">
                <div class="card">
                    <div class="card-body">
                        <h5>Formulir Penyetoran / Penarikan</h5>
                        <form action="{{ route('simpanan.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="jenis" value="wajib"> <!-- Jenis simpanan -->

                            <div class="form-group">
                                <label for="jenis_transaksi">Jenis Transaksi</label>
                                <select name="jenis_transaksi" id="jenis_transaksi" class="form-control" required>
                                    <option value="penyetoran">Penyetoran</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" id="jumlah" class="form-control" required min="50000" max="50000">
                            </div>

                            <div class="form-group">
                                <label for="metode_pembayaran">Metode Pembayaran</label>
                                <select name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
                                    <option value="cash">Cash</option>
                                    <option value="transfer-bank">Transfer Bank</option>
                                    <option value="ewallet">E-Wallet</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Konfirmasi Transaksi</button>
                        </form>

                    </div>
                </div>
            </section>

        </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start" style="margin-left: 26%;">
                    <p>2025 &copy; STARBIN</p>
                </div>
                <div class="float-end" style="margin-right: 30px;">
                    <p>Dibuat dengan <span class="text-danger"><i class="bi bi-heart"></i></span> oleh <a
                            href="https://saugi.me">Bagas & Fahri</a></p>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="{{asset('dist/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('dist/assets/js/app.js')}}"></script>
    <script src="{{asset('dist/assets/js/simpanan-wajib.js')}}"></script>

</body>

</html>