<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('landing-page/asset/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('landing-page/asset/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('landing-page/asset/css/default.css')}}">
    <title>Koperai Simpan Pinjam STARBIN</title>
</head>
<body>
    <header>
        <div class="logo-smk">
            <img src="{{asset('landing-page/asset/img/Logo Koperasi STARBIN REAL (1).png')}}" alt="koperasi logo">
        </div>
        <h4>KOPERASI</h4>
        <h5>SIMPAN PINJAM</h5>
        <H3>STARBIN</H3>
        <nav>
            <ul>
                <li><a href="#Beranda">BERANDA</a></li>
                <li><a href="#Tentang_kami">TENTANG KAMI</a></li>
                <li><a href="#Pinjaman">PINJAMAN</a></li>
                <li><a href="#Simpanan">SIMPANAN</a></li>
                <li><a href="#Hubungi_kami">HUBUNGI KAMI</a></li>
            </ul>
        </nav>
    </header>

    <!-- login -->
    <a href="{{route('login')}}">
        <div class="login">
            <h1 class="hidden">LOGIN</h1>
        </div>
        
    </a>

    <!-- beranda -->
    <section id="Beranda" class="Beranda hidden">
        <div class="head-section hidden"></div>
       <div class="main-kata hidden">
        <h1 class="hidden">
            Membangun <br>
            Kesejahteraan<br>
            Bersama
        </h1>
        <p class="hidden">
            Rasakan manfaat menjadi Anggota dengan berbagai layanan dan program yang tersedia.
            Masa depan lebih terencana bersama Koperasi Starbin
        </p>
        </div>
        <div class="main-foto hidden">
            <div class="garis hidden"></div>
            <div class="foto">
                <img src="{{asset('landing-page/asset/img/smk.jpeg')}}" alt="">
            </div>
        </div>
        <div class="clear hidden"></div>
    </section>

    <!-- tentang kami -->
    <section id="Tentang_kami" class="tentang-kami hidden" >
        <div class="head-section hidden"></div>
        <h1 class="judul-section hidden">Tentang Kami</h1>
        <div class="bag-tentang hidden">
            <div class="poto-tentang hidden">
                <img src="{{asset('landing-page/asset/img/poto-tentang-kami.jpg')}}" alt="Gambar tentang kami">
            </div>
            <h1 class="judul-deskripsi hidden">
                Kami Membangun Masa Depan
            </h1>
            <p class="text-deskripsi hidden">
                Kami adalah perusahaan yang berdedikasi untuk memberikan layanan terbaik kepada pelanggan kami. Dengan fokus pada inovasi, kualitas, dan kepuasan pelanggan, kami terus berupaya menciptakan solusi yang membawa manfaat jangka panjang. Tim kami terdiri dari para profesional yang memiliki pengalaman luas di bidangnya masing-masing.
            </p> 
            <div class="visi hidden">
                <h1 class="hidden">
                    VISI :
                </h1>
                <p class="hidden">
                    Menjadi pemimpin global dalam menyediakan solusi yang berkelanjutan dan inovatif, sekaligus menciptakan dampak positif bagi masyarakat dan lingkungan.
                </p>
            </div>
            <div class="misi hidden">
                <h1 class="hidden">
                    MISI :
                </h1>
                <ul class="hidden">
                    <li class="hidden">
                        <p class="hidden">
                            - Mengutamakan kualitas dan inovasi dalam setiap layanan dan produk yang kami tawarkan.
                        </p><br>
                    </li>
                    <li class="hidden">
                        <p class="hidden">
                            - Membangun hubungan yang kuat dan saling menguntungkan dengan pelanggan dan mitra bisnis.
                        </p><br>
                    </li>
                    <li class="hidden">
                        <p class="hidden">
                            - Berkontribusi pada pembangunan komunitas yang berkelanjutan dan ramah lingkungan.
                        </p><br>
                    </li>
                    <li class="hidden">
                        <p class="hidden">
                            - Memberdayakan karyawan kami untuk mencapai potensi penuh mereka melalui pelatihan dan pengembangan yang berkelanjutan.
                        </p>
                    </li>
                </ul>
            </div>      
        </div>
        <div class="bag-staf hidden">  
            <h1 class="hidden">
                STAF KAMI :
            </h1>
            <ul class="hidden">
                <li class="hidden">
                    <div class="staf hidden">
                        <img src="{{asset('landing-page/asset/img/staf-.png')}}" alt="Gambar Staf Satu">
                    </div>
                    <span class="hidden">
                        <h3 class="hidden">
                            R.Jihadi Nur Guardin
                        </h3>
                    </span>
                </li>
                <li>
                    <div class="staf">
                        <img src="{{asset('landing-page/asset/img/staf- (2).png')}}" alt="Gambar Staf Dua">
                    </div>
                    <span class="hidden">
                        <h3 class="hidden">
                            Rian Nurgraha
                        </h3>
                    </span>
                </li>
                <li>
                    <div class="staf">
                        <img src="{{asset('landing-page/asset/img/staf-dua.png')}}" alt="Gambar Staf Tiga">
                    </div>
                    <span class="hidden">
                        <h3 class="hidden">
                            Nia Kurnia
                        </h3>
                    </span>
                </li>
            </ul>
        </div>
    </section>    

    <!-- pinjaman -->
    <section id="Pinjaman" class="pinjaman hidden">
        <div class="head-section"></div>
        <div class="judul-section hidden">Pinjaman</div>
        <h3 class="deskripsi-pinjaman hidden">
            Koperasi Starbin menawarkan berbagai pilihan pinjaman yang fleksibel dan sesuai kebutuhan. 
            Dapatkan pinjaman dengan bunga rendah, proses cepat, dan dukungan penuh dari tim kami.
        </h3> 
        <div class="content-pinjaman foto-pinjaman hidden">
            <div class="foto-satu hidden">
                <img src="{{asset('landing-page/asset/img/bag-1-pinjaman.jpg')}}" alt="poto">
                <span class="hidden">
                    <h1 class="hidden">
                        Kredit Multiguna
                    </h1><br>
                    <p class="hidden">
                        Pinjaman serbaguna untuk pendidikan, renovasi rumah, atau kebutuhan lainnya. Dengan tenor yang fleksibel, rencana Anda menjadi lebih mudah diwujudkan.
                    </p>
                </span>
            </div>
            <div class="foto-dua hidden">
                <img src="{{asset('landing-page/asset/img/bag-3-pinjaman.jpg')}}" alt="poto">
                <span class="hidden">
                    <h1 class="hidden">
                        Kredit Pendidikan
                    </h1><br>
                    <p class="hidden">
                        Dukung pendidikan keluarga Anda dengan pinjaman khusus ini. Proses mudah dan bunga yang terjangkau menjadikannya pilihan ideal.
                    </p>
                </span>
            </div> 
            <div class="clear"></div>
            <div class="foto-tiga hidden">
                <img src="{{asset('landing-page/asset/img/bag-2-pinjaman.jpg')}}" alt="poto">
                <span class="hidden">
                    <h1 class="hidden">
                        Pinjaman Darurat
                    </h1><br>
                    <p class="hidden">
                        Saat menghadapi situasi mendesak, pinjaman darurat kami hadir dengan proses cepat dan solusi terpercaya.
                    </p>
                </span>
            </div>
            <a href="{{route('registrasi')}}">
                <div class="btn-bergabung hidden">
                    <h1 class="hidden">DAFTAR DI SINI SEKARANG</h1>
                    <div class="img-btn hidden">
                        <img src="{{asset('landing-page/asset/img/arrow.png')}}" alt="button">
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- simpanan -->
    <section id="Simpanan" class="simpanan hidden">
        <div class="judul-section hidden">Simpanan</div>
        <div class="konten-simpanan hidden">
            <div class="kartu-simpanan hidden">
                <div class="ikon-simpanan hidden">
                    <img src="{{asset('landing-page/asset/img/bag-1-simpanan.jpg')}}" alt="Simpanan Pokok">
                </div>
                <h3 class="hidden">Simpanan Pokok</h3>
                <p class="hidden">
                    Simpanan Pokok adalah kewajiban awal anggota koperasi. Jenis simpanan ini menjadi modal dasar untuk menjadi anggota koperasi kami. 
                    Simpanan ini hanya dibayarkan satu kali selama masa keanggotaan dan tidak dapat ditarik kembali, kecuali jika keanggotaan berakhir. 
                    Tujuannya adalah memastikan stabilitas dan pertumbuhan modal koperasi.
                </p>
                <a href="{{ route('registrasi') }}" class="btn-selengkapnya hidden">Daftar Sekarang</a>
            </div>
            
            <div class="kartu-simpanan">
                <div class="ikon-simpanan">
                    <img src="{{asset('landing-page/asset/img/bag-2-simpanan.jpg')}}" alt="Simpanan Wajib">
                </div>
                <h3 class="hidden">Simpanan Wajib</h3>
                <p class="hidden">
                    Simpanan Wajib adalah iuran rutin bulanan yang harus dibayarkan oleh setiap anggota. Simpanan ini berfungsi untuk mendukung kegiatan operasional koperasi 
                    sekaligus memberikan kontribusi terhadap pengembangan layanan kami. Besarnya simpanan ditentukan sesuai dengan kesepakatan dalam rapat anggota.
                </p>
                <a href="{{ route('registrasi') }}" class="btn-selengkapnya hidden">Daftar Sekarang</a>
            </div>
            
            <div class="kartu-simpanan">
                <div class="ikon-simpanan">
                    <img src="{{asset('landing-page/asset/img/bzg-3-simpanan.jpg')}}" alt="Simpanan Sukarela">
                </div>
                <h3 class="hidden">Simpanan Sukarela</h3>
                <p class="hidden">
                    Simpanan Sukarela adalah pilihan fleksibel bagi anggota untuk menyimpan dana tambahan kapan saja. Jenis simpanan ini tidak memiliki kewajiban pembayaran rutin 
                    dan dapat ditarik kapan pun sesuai dengan kebutuhan. Cocok bagi anggota yang ingin memanfaatkan koperasi sebagai tempat penyimpanan dana yang aman.
                </p>
                <a href="{{ route('registrasi') }}" class="btn-selengkapnya hidden">Daftar Sekarang</a>
            </div>            
        </div>
    </section>
    


    <!-- hubungi kami -->
    <section id="Hubungi_kami" class="hubungi-kami hidden">
        <div class="head-section hidden"></div>
        <div class="judul-section hidden">Hubungi Kami</div>
        <div class="konten-hubungi hidden">
            <div class="form-hubungi hidden">
                <h2 class="hidden">Kirim Pesan</h2>
                <form action="#" method="post">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email Anda" required>
                    
                    <label for="pesan">Pesan:</label>
                    <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    
                    <button type="submit" class="btn-kirim">Kirim</button>
                </form>
            </div>
            <div class="info-kontak hidden">
                <h2 class="hidden">Informasi Kontak</h2>
                <p class="hidden"><strong>Alamat:</strong> Jl. Binong Raya No. 12, Kabupaten Subang</p>
                <p class="hidden"><strong>Telepon:</strong> 0812-3456-7890</p>
                <p class="hidden"><strong>Email:</strong> info@starbin.com</p>
                <p class="hidden"><strong>Jam Operasional:</strong> Senin - Jumat, 08:00 - 17:00</p>
            </div>
        </div>
    </section>
    
    
    <!-- Footer -->
    <footer class="hidden">
        <div class="footer-container hidden">
            <div class="footer-info hidden">
                <h3 class="hidden">Koperasi STARBIN</h3>
                <p class="hidden">Jl. Raya Koperasi No.123, Kota Subang <br>
                Email: info@starbin.co.id | Telepon: +62 21 12345678</p>
            </div>
            <div class="footer-links hidden">
                <h3 class="hidden">Menu</h3>
                <ul>
                    <li><a href="#Beranda">Beranda</a></li>
                    <li><a href="#Tentang_kami">Tentang Kami</a></li>
                    <li><a href="#Pinjaman">Pinjaman</a></li>
                    <li><a href="#Simpanan">Simpanan</a></li>
                    <li><a href="#Berita">Berita</a></li>
                </ul>
            </div>
            <div class="footer-social hidden">
                 <h3 class="hidden">Ikuti Kami</h3>
                <a href="#"><img src="{{asset('landing-page/asset/img/facebook.png')}}" alt="Facebook"></a>
                <a href="#"><img src="{{asset('landing-page/asset/img/twtr.png')}}" alt="Twitter"></a>
                <a href="#"><img src="{{asset('landing-page/asset/img/ig3.png')}}" alt="Instagram"></a>
            </div>
        </div>
       <div class="footer-bottom hidden">
            <p class="hidden">&copy; 2025 Koperasi STARBIN. Semua Hak Dilindungi.</p>
        </div>
    </footer>   
    <script src="{{asset('landing-page/asset/js/script.js')}}"></script>
</body>
</html>