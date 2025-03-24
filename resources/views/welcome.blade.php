<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Koperasi Starbin</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('landing-template/assets/img/Logo Koperasi STARBIN REAL (1).png')}}" rel="icon">
  <link href="{{asset('landing-template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing-template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing-template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('landing-template/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('landing-template/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing-template/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('landing-template/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <div class="logo d-flex align-items-center me-auto">
        <div class="head-img">
          <img src="{{asset('landing-template/assets/img/Logo Koperasi STARBIN REAL (1).png')}}" alt="">
        </div>
        <h1 class="sitename">STARBIN</h1>
      </div>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#beranda" class="active">Beranda</a></li>
          <li><a href="#tentang_kami">Tentang Kami</a></li>
          <li><a href="#simpanan">Simpanan</a></li>
          <li><a href="#pinjaman">Pinjaman</a></li>
          <li><a href="#faq">FAQ</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('login')}}">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- beranda Section -->
    <section id="beranda" class="hero section">
      <div class="hero-bg">
        <img src="{{asset('landing-template/assets/img/hero-bg-light.webp')}}" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Selamat Datang di <span>Koperasi STARBIN</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Solusi Simpan Pinjam Modern yang Aman dan Terpercaya<br>
            Bersama Starbin, wujudkan tujuan finansialmu dengan lebih cerdas</p>
          <img src="{{asset('landing-template/assets/img/hero-services-img.png')}}" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /end beranda Section -->

    <!-- tentangkami Section -->
    <section id="tentang_kami" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Tentang Kami</p>
            <h3>Mendukung Komunitas Lewat Layanan Keuangan yang Aman dan Mudah</h3>
            <p class="fst-italic">
              Koperasi Starbin hadir sebagai partner keuangan terpercaya untuk komunitas sekolah. Kami berkomitmen membantu anggota mencapai target finansial mereka lewat layanan yang transparan, praktis, dan mudah dijangkau.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Solusi simpan pinjam yang cepat, aman, dan tanpa ribet.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Menumbuhkan semangat kebersamaan dan gotong royong di lingkungan komunitas.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Melayani kebutuhan finansial dengan pendekatan profesional yang bersahabat.</span></li>
            </ul>
            <a href="{{route('registrasi')}}" class="read-more"><span>Daftar Sekarang</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="{{asset('landing-template/assets/img/about-company-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="{{asset('landing-template/assets/img/about-company-2.jpg')}}" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="{{asset('landing-template/assets/img/about-company-3.jpg')}}" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- staf kami Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Staf Kami</h2>
        <p>Tim profesional yang siap melayani dan membantu Anda dalam setiap kebutuhan koperasi dengan penuh dedikasi.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Sebagai bagian dari tim Starbin, saya bangga bisa membantu anggota mencapai kestabilan finansial lewat layanan yang adil dan transparan.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landing-template/assets/img/testimonials/For-raiden.jpg')}}" class="testimonial-img" alt="">
                  <h3>R.Jihadi Nur Guardin</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Kami percaya, koperasi bukan hanya soal uang—tapi juga soal kepercayaan dan kebersamaan. Itulah yang selalu kami jaga di Starbin.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landing-template/assets/img/testimonials/for-unknowteteh.jpeg')}}" class="testimonial-img" alt="">
                  <h3>Nia Kurnia</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Di Starbin, kami bekerja bukan sekadar menjalankan sistem, tapi ikut mewujudkan impian finansial setiap anggota—dengan sepenuh hati.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landing-template/assets/img/testimonials/for-ryan.jpg')}}" class="testimonial-img" alt="">
                  <h3>Ryan Nugraha</h3>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Mengedepankan layanan tanpa bunga dan denda ringan adalah bentuk komitmen kami agar koperasi terasa lebih manusiawi dan membantu sesama.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landing-template/assets/img/testimonials/FOr-arya2.png')}}" class="testimonial-img" alt="">
                  <h3>M. Arya Permadi</h3>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Kami hadir bukan hanya sebagai staf, tapi sebagai mitra tumbuh bersama. Setiap anggota punya cerita, dan kami bangga menjadi bagian dari perjalanan itu.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landing-template/assets/img/testimonials/for-nia.jpg')}}" class="testimonial-img" alt="">
                  <h3>Unknow teteh</h3>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>


    </section><!-- /end sectio staf kami Section -->
    <!-- /end enntang kami Section -->


    <!-- Features Section -->
    <!-- Simpanan Utama Section -->
    <section id="simpanan" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Layanan Simpanan</h2>
        <p>Kami menyediakan berbagai jenis simpanan untuk mendukung kebutuhan finansial Anda.</p>
      </div><!-- End Section Title -->



      <!-- Fitur Simpanan Detail -->
      <section id="features-details" class="features-details section">

        <div class="container">

          <div class="row gy-4 justify-content-between features-item">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <img src="{{asset('landing-template/assets/img/features-1.jpg')}}" class="img-fluid" alt="Keamanan Dana">
            </div>

            <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <h3>Keamanan Dana yang Terjamin</h3>
                <p>
                  Simpanan Anda dikelola dengan sistem yang aman dan transparan, memberikan kepercayaan penuh untuk masa depan.
                </p>
                <a href="{{route('registrasi')}}" class="btn more-btn">Daftar Sekarang</a>
              </div>
            </div>

          </div><!-- Features Item -->

          <div class="row gy-4 justify-content-between features-item">

            <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <div class="content">
                <h3>Beragam Pilihan Simpanan</h3>
                <p>
                  Mulai dari simpanan harian, tabungan pelajar, hingga simpanan berjangka, semua tersedia sesuai kebutuhan Anda.
                </p>
                <ul>
                  <li><i class="bi bi-easel flex-shrink-0"></i> Pilihan fleksibel sesuai kebutuhan.</li>
                  <li><i class="bi bi-patch-check flex-shrink-0"></i> Suku bunga kompetitif.</li>
                  <li><i class="bi bi-brightness-high flex-shrink-0"></i> Proses mudah dan cepat.</li>
                </ul>
                <a href="{{route('registrasi')}}" class="btn more-btn">Daftar Sekarang</a>
              </div>
            </div>

            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
              <img src="{{asset('landing-template/assets/img/features-2.jpg')}}" class="img-fluid" alt="Beragam Pilihan Simpanan">
            </div>

          </div><!-- Features Item -->

        </div>

      </section><!-- /Fitur Simpanan Detail -->


      <!-- Pinjaman Section -->

      <!-- More Pinjaman Features Section -->
      <section id="pinjaman" class="more-features section">

        <div class="container section-title" data-aos="fade-up">
          <h2>Pinjaman</h2>
          <p>Temukan berbagai solusi pinjaman yang sesuai dengan kebutuhan Anda di koperasi kami</p>
        </div><!-- End Section Title -->
        <div class="container">

          <div class="row justify-content-around gy-4">

            <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
              <h3>Pinjaman dengan Bunga Rendah dan Proses Cepat</h3>
              <p>Di koperasi kami, Anda bisa mendapatkan pinjaman dengan suku bunga yang sangat terjangkau. Kami mengutamakan kemudahan, kecepatan, dan transparansi dalam setiap proses pengajuan pinjaman.</p>

              <div class="row">

                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-easel flex-shrink-0"></i>
                  <div>
                    <h4>Pinjaman Pendidikan</h4>
                    <p>Membantu Anda membayar biaya pendidikan dengan cicilan yang ringan dan bunga yang rendah.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-patch-check flex-shrink-0"></i>
                  <div>
                    <h4>Pinjaman Usaha</h4>
                    <p>Modal usaha untuk pengembangan bisnis Anda, dengan persyaratan mudah dan fleksibilitas tinggi.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4>Pinjaman Kebutuhan Pribadi</h4>
                    <p>Dapatkan pinjaman untuk keperluan pribadi, mulai dari renovasi rumah hingga kebutuhan mendesak lainnya.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-lg-6 icon-box d-flex">
                  <i class="bi bi-brightness-high flex-shrink-0"></i>
                  <div>
                    <h4>Cicilan Fleksibel</h4>
                    <p>Kami menawarkan berbagai pilihan cicilan yang dapat disesuaikan dengan kemampuan finansial Anda.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>

            </div>

            <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
              <img src="{{asset('landing-template/assets/img/features-3.jpg')}}" alt="">
            </div>

          </div>

        </div>

      </section><!-- /More Pinjaman Features Section -->


      <!-- FAQ Section -->
      <section id="faq" class="faq section">
        <div class="container section-title" data-aos="fade-up">
          <h2>FAQ - Pertanyaan Umum</h2>
          <p>Berikut adalah beberapa pertanyaan yang sering diajukan mengenai koperasi STARBIN.</p>
        </div>

        <!-- Informasi Kontak dalam Card -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="container" data-aos="fade-up" data-aos-delay="100" style="margin-bottom: 30px;">
            <div class="row">
              @foreach ($kontak as $kontak)
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body text-center">
                    <i class="{{ $kontak->icon }}" style="font-size: 40px;"></i>
                    <h5 class="card-title">{{ ucfirst($kontak->key) }}</h5>
                    <p class="card-text">
                      @if ($kontak->key == 'alamat')
                      <a href="{{ $kontak->value }}" target="_blank">{{ $kontak->title }}</a>
                      @elseif ($kontak->key == 'email')
                      <a href="mailto:{{ $kontak->value }}">{{ $kontak->value }}</a>
                      @elseif ($kontak->key == 'telepon') {{-- Cek apakah key == "telepon" --}}
                      <a href="tel:{{ $kontak->value }}">{{ $kontak->value }}</a>
                      @else
                      {{ $kontak->key }}
                      @endif
                    </p>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>

          <!-- Accordion FAQ -->
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="accordion mb-4" id="faqAccordion">

              <!-- Pertanyaan 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                    Apa itu Koperasi STARBIN?
                  </button>
                </h2>
                <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Koperasi STARBIN adalah koperasi simpan pinjam yang menyediakan layanan keuangan bagi anggota untuk membantu mereka dalam kebutuhan finansial.
                  </div>
                </div>
              </div>

              <!-- Pertanyaan 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                    Bagaimana Sistem Pinjaman?
                  </button>
                </h2>
                <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Pengajuan pinjaman di Starbin sangat mudah. Jatuh tempo akan otomatis ditetapkan 3 bulan sejak tanggal pencairan. Kami tidak memberlakukan bunga pinjaman. Namun, jika melewati jatuh tempo, akan dikenakan denda ringan sebesar 2% per minggu hingga pinjaman dilunasi.
                  </div>
                </div>
              </div>

              <!-- Pertanyaan 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                    Apa saja keuntungan menjadi anggota?
                  </button>
                </h2>
                <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Sebagai anggota, Anda dapat mengakses layanan simpan pinjam, dan memulai Pinjaman tanpa bunga.
                  </div>
                </div>
              </div>

            </div>
          </div>

      </section>

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="" class="logo d-flex align-items-center">
            <span class="sitename">Koperasi STARBIN</span>
          </a>
          <div class="footer-contact pt-3">
            <p><strong>Alamat:</strong> {{ $kontak->firstWhere('key', 'alamat')->title ?? '-' }}</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>{{ $kontak->firstWhere('key', 'telepon')->value ?? '-' }}</span></p>
            <p><strong>Email:</strong> <span>{{ $kontak->firstWhere('key', 'email')->value ?? '-' }}</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            @foreach ($socialLinks as $link)
            <a href="{{ $link->url }}" target="_blank">
              <i class="{{ $link->icon }}"></i>
            </a>
            @endforeach
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Link Terkait</h4>
          <ul>
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#tentang_kami">Tentang Kami</a></li>
            <li><a href="#simpanan">Simpanan</a></li>
            <li><a href="#pinjaman">Pinjaman</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li>Pinjaman Pendidikan</li>
            <li>Pinjaman Usaha</li>
            <li>Pinjaman Pribadi</li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Informasi Pinjaman & Simpanan</h4>
          <p>Dapatkan informasi terbaru tentang produk pinjaman, simpanan, dan layanan koperasi kami dengan mengikuti kami melalui media sosial atau mengunjungi situs kami secara berkala.</p>
          <div class="social-links d-flex mt-4">
            @foreach ($socialLinks as $link)
            <a href="{{ $link->url }}" target="_blank">
              <i class="{{ $link->icon }}"></i>
            </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Hak Cipta</span> <strong class="px-1 sitename">Koperasi STARBIN</strong><span> Semua hak dilindungi</span></p>
    </div>

  </footer>



  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('landing-template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landing-template/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('landing-template/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('landing-template/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('landing-template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('landing-template/assets/js/main.js')}}"></script>

</body>

</html>