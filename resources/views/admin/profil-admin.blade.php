<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi Anda</title>

    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/profil-admin.css')}}">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative hidden-content">
                    <div class="user-info text-center mt-3 pb-3 hidden-content">
                        <img src="{{ asset('picture/account/' . Auth::user()->gambar) }}" class="rounded-circle hidden-content" alt="User Avatar" style="width: 150px; height: 150px; object-fit: cover;">
                        <h3 class="mt-2 mb-0 hidden-content">{{ Auth::user()->fullname }}</h3>
                        <small class="text-muted hidden-content">{{ Auth::user()->role }}</small>
                    </div>
                </div>

                <div class="sidebar-footer d-flex align-items-center justify-content-between py-3 border-bottom">
                    <!-- Logo & Nama Koperasi -->
                    <div class="d-flex align-items-center ms-3 hidden-content">
                        <div class="logo" style="width: 40px; height: 40px;">
                            <img src="{{ asset('dist/assets/images/logo/Logo Koperasi STARBIN REAL (1).png') }}" class="hidden-content" alt="Logo" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="ms-2 hidden-content">
                            <h6 class="mb-0 text-muted" style="font-size: 12px;">Koperasi</h6>
                            <h5 class="mb-0 text-primary fw-bold" style="font-size: 14px;">STARBIN</h5>
                        </div>
                    </div>

                    <!-- Theme Toggle -->
                    <div class="theme-toggle d-flex align-items-center gap-2 me-3 hidden-content">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 21">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"></path>
                            </g>
                        </svg>
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input me-0" type="checkbox" id="toggle-dark">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                        </svg>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- MENU UTAMA -->
                        <li class="hidden-content sidebar-title border-bottom pb-2 text-uppercase text-secondary fw-bold fs-6 pt-3">Menu Utama</li>
                        <li class="sidebar-item  hidden-content">
                            <a href="{{ route('min') }}" class="sidebar-link">
                                <i class="bi bi-house-door-fill"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-4 active hidden-content">
                            <a href="{{ route('profiladmin') }}" class="sidebar-link">
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <!-- PENGELOLAAN DATA -->
                        <li class="hidden-content sidebar-title border-top border-bottom pb-2 pt-3 mt-4 text-uppercase text-secondary fw-bold fs-6">Pengelolaan Data</li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('dataanggota') }}" class="sidebar-link">
                                <i class="bi bi-person-lines-fill"></i>
                                <span>Data Anggota</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub hidden-content">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-wallet-fill"></i>
                                <span>Data Simpanan</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="{{ route('simpananwajibadmin') }}">Simpanan Wajib</a></li>
                                <li class="submenu-item"><a href="{{ route('simpanansukarelaadmin') }}">Simpanan Sukarela</a></li>
                                <li class="submenu-item"><a href="{{ route('simpanananggota') }}">Simpanan Anggota</a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('pinjamanadmin') }}" class="sidebar-link">
                                <i class="bi bi-cash-stack"></i>
                                <span>Data Pinjaman</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('dataangsuran') }}" class="sidebar-link">
                                <i class="bi bi-arrow-repeat"></i>
                                <span>Data Angsuran</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('denda') }}" class="sidebar-link">
                                <i class="bi bi-exclamation-circle"></i>
                                <span>Data Denda Pinjaman</span>
                            </a>
                        </li>

                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('simpanans') }}" class="sidebar-link position-relative">
                                <i class="bi bi-wallet-fill"></i>
                                <span>Data Pengajuan Simpanan</span>
                                @if ($jumlahSimpananDalamProses > 0)
                                <span class="badge bg-warning position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahSimpananDalamProses }}
                                </span>
                                @endif
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('pangajuan') }}" class="sidebar-link position-relative">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Data Pengajuan Pinjaman</span>
                                @if ($jumlahPengajuanDalamProses > 0)
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahPengajuanDalamProses }}
                                </span>
                                @endif
                            </a>
                        </li>
                        <li class="sidebar-item  hidden-content">
                            <a href="{{ route('angsuran') }}" class="sidebar-link position-relative">
                                <i class="bi bi-coin"></i>
                                <span>Data Pengajuan Angsuran</span>
                                @if ($jumlahAngsuranDalamProses > 0)
                                <span class="badge bg-warning position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahAngsuranDalamProses }}
                                </span>
                                @endif
                            </a>
                        </li>

                        <!-- KOMUNIKASI -->
                        <li class="hidden-content sidebar-title border-top border-bottom pb-2 pt-3 mt-4 text-uppercase text-secondary fw-bold fs-6">Komunikasi</li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('kontakkoperasi') }}" class="sidebar-link">
                                <i class="bi bi-envelope-paper"></i>
                                <span>Kelola Kontak Koperasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('sosmed') }}" class="sidebar-link">
                                <i class="bi bi-link-45deg"></i>
                                <span>Kelola Sosial Media</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('admin.sharemassage') }}" class="sidebar-link">
                                <i class="bi bi-send"></i>
                                <span>Kelola Pesan</span>
                            </a>
                        </li>
                        <li class="sidebar-item hidden-content">
                            <a href="{{ route('notifikasiadmin') }}" class="sidebar-link position-relative">
                                <i class="bi bi-bell-fill"></i>
                                <span>Notifikasi</span>
                                @if ($jumlahNotifikasiBaru > 0)
                                <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">
                                    {{ $jumlahNotifikasiBaru }}
                                </span>
                                @endif
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

            <!-- Jika ada error -->
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

            <div class="page-heading d-flex align-items-center pb-3 border-bottom hidden-content-right">
                <i class="bi bi-person-circle me-2 fs-3 text-primary" style="margin-top: -30px; padding-right: 30px;"></i>
                <h5 class="mb-0 fw-bold">👋 Halo, {{ Auth::user()->fullname }}</h5>
            </div>

            <div class="page-content">
                <div class="container">
                    <!-- Section Profil -->
                    <div class="col-12 hidden-content-right">
                        <div class="card mb-4 shadow bg-primary" style=" color: #fff; border-radius: 10px;">
                            <div class="card-body text-center">
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
                    <!-- Formulir Edit Profil -->
                    <section class="mb-4 hidden-content-right">
                        <div class="card shadow" style="border: 1px solid #435ebe;">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0 text-white hidden-content-right"> 
                                    <i class="bi bi-person-lines-fill"></i> Edit Profil
                                </h5>
                            </div>
                            <div class="card-body">
                                <form id="edit-profile-form" enctype="multipart/form-data" method="POST" action="{{ route('profil.update') }}">
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
    <script src="{{asset('admin-page/assets/js/bootstrap.')}}js"></script>
    <script src="{{asset('admin-page/assets/js/app.')}}js"></script>
    <script src="{{asset('admin-page/assets/js/profil.')}}js"></script>
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