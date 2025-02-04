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
                            class="sidebar-item active">
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

            <!-- Jika ada error -->
            @if ($errors->any())
            <div class="alert alert-danger" style="background-color: salmon; color:black; font-weight:bold; border-radius:20px; padding:10px; margin-bottom:20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Jika berhasil -->
            @if (Session::has('success'))
            <div class="alert alert-success" style="background-color: lightgreen; color:black; font-weight:bold; border-radius:20px;">
                {{ Session::get('success') }}
            </div>
            @endif

            <div class="page-heading">
                <center>
                    <h2>Selamat Datang {{Auth::user()->fullname}}</h2>
                </center>
            </div>

            <div class="page-content">
                <div class="container">
                    <!-- Kotak Pertama: Profil User -->
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <div class="poto-profil">
                                <img src="{{asset('picture/account/'. Auth::user()->gambar)}}" alt="Foto Profil">
                            </div>
                            <h3 class="mt-3">{{Auth::user()->fullname}}</h3>
                            <p>{{Auth::user()->email}}</p>
                            <p>{{Auth::user()->phone}}</p>
                            <p>{{Auth::user()->address}}</p>
                        </div>
                    </div>

                    <!-- Kotak Kedua: Detail Akun -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 style="margin-bottom: 10px;">Detail Akun</h5>
                            <br>
                            <p>Tanggal Bergabung: {{ Auth::user()->created_at->translatedFormat('d F Y') }}</p>
                            <p>Terakhir Diperbarui: {{ Auth::user()->updated_at ? Auth::user()->updated_at->translatedFormat('d F Y') : 'Anda belum pernah mengupdate profil Anda' }}</p>
                            <p>Total Simpanan: Rp {{ number_format($totalSukarela ?? 0, 0, ',', '.') }}</p>
                            <p>Total Pinjaman: Rp Rp {{ number_format($totalPinjaman, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <!-- Kotak Ketiga: Formulir Edit Profil -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Edit Profil</h5>
                        </div>
                        <div class="card-body">
                            <form id="edit-profile-form" enctype="multipart/form-data" method="POST" action="{{ route('profil') }}">
                                @csrf
                                <input type="hidden" name="_method" value="PUT"> <!-- Metode PUT untuk update -->
                                <!-- Nama -->
                                <div class="mb-3">
                                    <label for="fullname" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nama Lengkap" value="{{ old('fullname', Auth::user()->fullname) }}" required>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', Auth::user()->email) }}" required>
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>

                                <!-- Konfirmasi Password -->
                                <div class="mb-3">
                                    <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Konfirmasi Password">
                                </div>

                                <!-- Gambar -->
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Foto Profil</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                </div>

                                <!-- Nomor Telepon -->
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon" value="{{ old('phone', Auth::user()->phone) }}" required>
                                </div>

                                <!-- Alamat -->
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="address" name="address" rows="5" placeholder="Alamat" required>{{ old('address', Auth::user()->address) }}</textarea>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Konfirmasi Edit Profil</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2025 &copy; STARBIN</p>
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

</body>

</html>