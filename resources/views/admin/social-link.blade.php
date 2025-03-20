<!DOCTYPE html>
p<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Data Pribadi Anda</title>

    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin-page/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" type="image/png">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo" style="width: 50px; height: 50px; margin-left: 15%;">
                            <img src="{{asset('admin-page/assets/images/logo/Logo Koperasi STARBIN REAL (1).png')}}" alt="Logo" srcset="" style="width: 100%; height: 100%; object-fit: cover;">
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
                <div class="sidebar-menu" style="margin-left: -10px;">
                    <ul class="menu">
                        <li class="sidebar-title" style="margin-top: 70px;">Menu</li>
                        <li
                            class="sidebar-item ">
                            <a href="{{route('min')}}" class='sidebar-link'>
                                <i class="bi bi-house-door-fill"></i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item ">
                            <a href="{{route('profiladmin')}}" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Profil</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item ">
                            <a href="{{route('dataanggota')}}" class='sidebar-link'>
                                <i class="bi bi-person-lines-fill"></i>
                                <span>Data Anggota</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item  has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-wallet-fill"></i>
                                <span>Simpanan</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('simpananwajibadmin')}}">Simpanan Wajib</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('simpanansukarelaadmin')}}">Simpanan Sukarela</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('simpanananggota')}}">Simpanan Anggota</a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="sidebar-item ">
                            <a href="{{route('pinjamanadmin')}}" class='sidebar-link'>
                                <i class="bi bi-cash-stack"></i>
                                <span>Pinjaman</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ route('angsuran') }}" class='sidebar-link'>
                                <i class="bi bi-coin"></i>
                                <span>Angsuran</span>
                                @if ($jumlahAngsuranDalamProses > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    {{ $jumlahAngsuranDalamProses }}
                                    <span class="visually-hidden">angsuran dalam proses</span>
                                </span>
                                @endif
                            </a>
                        </li>

                        <li
                            class="sidebar-item">
                            <a href="{{route('denda')}}" class='sidebar-link'>
                                <i class="bi bi-exclamation-circle"></i>
                                <span>Denda</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('pangajuan') }}" class="sidebar-link">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Data Pengajuan Pinjaman</span>
                                @if ($jumlahPengajuanDalamProses > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $jumlahPengajuanDalamProses }}
                                    <span class="visually-hidden">pengajuan dalam proses</span>
                                </span>
                                @endif
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="{{ route('simpanans') }}" class="sidebar-link">
                                <i class="bi bi-wallet-fill"></i>
                                <span>Data Pengajuan Simpanan</span>
                                @if ($jumlahSimpananDalamProses > 0)
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                    {{ $jumlahSimpananDalamProses }}
                                </span>
                                @endif
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{ route('admin.sharemassage') }}" class="sidebar-link">
                                <i class="bi bi-send"></i>
                                <span>Kelola Pesan</span>
                            </a>
                        </li>
                        <li class="nav-item sidebar-item position-relative ">
                            <a href="{{ route('notifikasiadmin') }}" class="nav-link sidebar-link">
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

                        <li class="sidebar-item active">
                            <a href="{{route('sosmed')}}" class="sidebar-link">
                                <i class="bi bi-link-45deg"></i>
                                <span>Kelola Sosial Media</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="{{route('kontakkoperasi')}}" class="sidebar-link">
                                <i class="bi-envelope-paper"></i>
                                <span>Kontak Koperasi</span>
                            </a>
                        </li>

                        <li class="sidebar-item" style="margin-left: -10px; margin-top:30px;">
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-link sidebar-link" style="padding: 0; color: inherit; text-decoration: none;">
                                    <i class="bi bi-box-arrow-right"></i>
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

            <!-- Judul Halaman -->
            <div class="page-heading d-flex align-items-center pb-3 border-bottom">
                <i class="bi bi-link-45deg me-2 fs-3 text-primary" style="margin-top: -30px; padding-right: 30px;"></i>
                <h2 class="mb-0 fw-bold">Kelola Link Sosial Media</h2>
            </div>

            <!-- Form Tambah/Edit Link -->
            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white">
                            <i class="bi bi-pencil-square"></i> Tambah/Edit Link Sosial Media
                        </h5>
                    </div>
                    <div class="card-body">
                        <form id="formSocialLink" method="POST" action="{{ route('admin.social-links.store') }}">
                            @csrf
                            <!-- Input hidden untuk handle edit -->
                            <input type="hidden" id="socialLinkId" name="id">
                            <input type="hidden" id="icon" name="icon">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="platform" class="form-label">Platform</label>
                                    <select id="platform" name="platform" class="form-select" required>
                                        <option value="" disabled selected>Pilih platform</option>
                                        <option value="tiktok" data-icon="bi bi-tiktok">TikTok</option>
                                        <option value="instagram" data-icon="bi bi-instagram">Instagram</option>
                                        <option value="youtube" data-icon="bi bi-youtube">YouTube</option>
                                        <option value="linkedin" data-icon="bi bi-linkedin">LinkedIn</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="url" class="form-label">URL</label>
                                    <input type="url" id="url" name="url" class="form-control" placeholder="https://example.com" required>
                                </div>
                            </div>

                            <div id="icon-preview" class="my-3"></div>

                            <div class="form-group text-center mt-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section class="mb-4">
                <div class="card shadow" style="border: 1px solid #435ebe;">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0 text-white">
                            <i class="bi bi-list"></i> Daftar Link Sosial Media
                        </h5>
                    </div>
                    <div class="card-body">
                        <!-- Input Pencarian -->
                        <div style="margin-bottom: 20px; position: relative;">
                            <div class="input-group">
                                <input
                                    type="text"
                                    id="search-link"
                                    class="form-control"
                                    placeholder="Cari berdasarkan Platform atau URL..."
                                    onkeyup="searchLink()"
                                    style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);">
                                <button
                                    class="btn btn-danger"
                                    onclick="resetSearchLink()"
                                    style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                    <i class="bi bi-x-circle"></i> Bersihkan
                                </button>
                            </div>
                        </div>

                        <div style="max-height: 450px; overflow:auto; font-size:.9rem;">
                            <table class="table table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Ikon</th>
                                        <th>Platform</th>
                                        <th>URL</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="data-link">
                                    @foreach ($links as $link)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><i class="{{ $link->icon }}"></i></td>
                                        <td>{{ ucfirst($link->platform) }}</td>
                                        <td><a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" onclick="editLink({{ $link }})">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </button>
                                            <button class="btn btn-danger btn-sm" onclick="deleteLink({{ $link->id }})">
                                                <i class="bi bi-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if($links->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <span class="badge bg-warning">
                                                <i class="bi bi-exclamation-circle"></i> Belum ada link sosial media
                                            </span>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const csrfToken = "{{ csrf_token() }}";
    </script>
    <script>
        // Fungsi Preview Ikon saat Pilih Platform
        document.getElementById('platform').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const iconClass = selectedOption.getAttribute('data-icon');
            const iconPreview = document.getElementById('icon-preview');

            iconPreview.innerHTML = `<i class="${iconClass}"></i>`;
        });

        // Fungsi Edit Link
        function editLink(link) {
            document.getElementById('socialLinkId').value = link.id;
            document.getElementById('platform').value = link.platform;
            document.getElementById('url').value = link.url;

            // Ubah action form ke UPDATE
            const form = document.getElementById('formSocialLink');
            form.action = `/admin/social-links/update/${link.id}`;

            // Tambahkan input hidden untuk PUT
            if (!form.querySelector('input[name="_method"]')) {
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'PUT';
                form.appendChild(methodInput);
            }

            // Tampilkan ikon & set input hidden icon
            const selectedOption = document.querySelector(`#platform option[value="${link.platform}"]`);
            if (selectedOption) {
                const iconClass = selectedOption.getAttribute('data-icon');
                document.getElementById('icon-preview').innerHTML = `<i class="${iconClass}"></i>`;
                document.getElementById('icon').value = iconClass; // Set ikon ke input hidden
            }
        }

        // Set ikon saat pilih platform
        document.getElementById('platform').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const iconClass = selectedOption.getAttribute('data-icon');

            // Update ikon preview & input hidden
            document.getElementById('icon-preview').innerHTML = `<i class="${iconClass}"></i>`;
            document.getElementById('icon').value = iconClass;
        });

        // Fungsi Hapus Link
        function deleteLink(id) {
            Swal.fire({
                title: "Yakin ingin menghapus?",
                text: "Data ini akan hilang selamanya!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/admin/social-links/delete/${id}`, {
                            method: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            }
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Berhasil!", "Link sosial media telah dihapus.", "success");
                                removeRow(id); // Hapus baris dari tabel tanpa reload
                            }
                        });
                }
            });
        }

        // Menghapus baris dari tabel tanpa reload
        function removeRow(id) {
            const row = document.querySelector(`tr[data-id="${id}"]`);
            if (row) {
                row.remove();
            }
        }

        // Fungsi reset form
        function resetForm() {
            document.getElementById('socialLinkId').value = '';
            document.getElementById('platform').value = '';
            document.getElementById('url').value = '';
            document.getElementById('icon-preview').innerHTML = '';
        }

        // Fungsi untuk menambah baris ke tabel
        function addRow(link) {
            const tableBody = document.querySelector("tbody");
            const newRow = document.createElement("tr");
            newRow.setAttribute("data-id", link.id);
            newRow.innerHTML = `
                <td></td>
                <td><i class="${link.icon}"></i></td>
                <td>${link.platform.charAt(0).toUpperCase() + link.platform.slice(1)}</td>
                <td><a href="${link.url}" target="_blank">${link.url}</a></td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick='editLink(${JSON.stringify(link)})'>Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteLink(${link.id})">Hapus</button>
                </td>
            `;
            tableBody.appendChild(newRow);
            renumberRows();
        }

        // Fungsi untuk update baris setelah edit
        function updateRow(id, link) {
            const row = document.querySelector(`tr[data-id="${id}"]`);
            if (row) {
                row.innerHTML = `
                    <td></td>
                    <td><i class="${link.icon}"></i></td>
                    <td>${link.platform.charAt(0).toUpperCase() + link.platform.slice(1)}</td>
                    <td><a href="${link.url}" target="_blank">${link.url}</a></td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick='editLink(${JSON.stringify(link)})'>Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteLink(${link.id})">Hapus</button>
                    </td>
                `;
                renumberRows();
            }
        }

        // Fungsi untuk merapikan nomor urut tabel
        function renumberRows() {
            const rows = document.querySelectorAll("tbody tr");
            rows.forEach((row, index) => {
                row.cells[0].innerText = index + 1;
            });
        }

        function searchLink() {
            let input = document.getElementById("search-link").value.toLowerCase();
            let rows = document.querySelectorAll("#data-link tr");

            rows.forEach(row => {
                let rowText = row.innerText.toLowerCase(); // Menggabungkan semua teks dalam satu baris

                if (rowText.includes(input)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        function resetSearchLink() {
            document.getElementById("search-link").value = "";
            searchLink();
        }
    </script>

</body>

</html>