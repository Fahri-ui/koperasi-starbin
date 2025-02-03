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
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#features">Simpanan</a></li>
          <li><a href="#services">Pinjaman</a></li>
          <li><a href="#contact">Hubungi Kami</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('login')}}">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- beranda Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="{{asset('landing-template/assets/img/hero-bg-light.webp')}}" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Selamat Datang di <span>Koperasi STARBIN</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Solusi Simpan Pinjam Terpercaya untuk mendukung komunitas Sekolah<br> 
          Bersama, Kita Wujudkan impian Finansial Anda</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('registrasi')}}" class="btn-get-started">Daftar Sekarang</a>
            <a href="{{route('login')}}" class="btn-get-started">Login di sini</a>
          </div>
          <img src="{{asset('landing-template/assets/img/hero-services-img.png')}}" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /end beranda Section -->

    <!-- tentangkami Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Tentang Kami</p>
            <h3>Mengembangkan Komunitas dengan Solusi Keuangan yang Aman</h3>
            <p class="fst-italic">
              Starbin Koperasi hadir sebagai mitra keuangan terpercaya bagi komunitas sekolah. Kami mendukung anggota
              untuk mencapai tujuan finansial mereka dengan layanan yang transparan dan mudah diakses.    
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Memberikan solusi simpan pinjam yang cepat dan aman.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Menanamkan nilai kebersamaan dan gotong royong dalam komunitas.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Mendukung berbagai kebutuhan finansial dengan layanan profesional dan ramah.</span></li>
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
                    Dedikasi tinggi dalam memberikan bimbingan dan pengajaran kepada peserta didik membuat Koperasi STARBIN dikenal sebagai lembaga yang berkualitas dan terpercaya.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{asset('landing-template/assets/img/testimonials/testimonials-1.png')}}" class="testimonial-img" alt="">
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
                    Dengan pendekatan yang penuh perhatian dan metode pengajaran modern, Koperasi STARBIN memastikan setiap peserta dapat berkembang sesuai potensinya.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{asset('landing-template/assets/img/testimonials/testimonials-2.png')}}" class="testimonial-img" alt="">
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
                    Kami percaya bahwa setiap anak memiliki keunikan. Oleh karena itu, staf Koperasi STARBIN bekerja keras untuk memberikan pengalaman belajar yang menyenangkan dan bermakna.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{asset('landing-template/assets/img/testimonials/testimonials-3.png')}}" class="testimonial-img" alt="">
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
                    Program-program Koperasi STARBIN dirancang untuk mendukung pengembangan akademik dan spiritual para peserta didik, membantu mereka meraih kesuksesan dunia dan akhirat.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{asset('landing-template/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                    <h3>Ade Suhedin MT</h3>
                  </div>
                </div>
              </div> 
            
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>  
                  <p>
                    Dengan kerja sama tim yang solid dan penuh semangat, Koperasi STARBIN terus berinovasi untuk memberikan pendidikan terbaik bagi setiap generasi penerus bangsa.
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{asset('landing-template/assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                    <h3>Lilik Sulistijanto Ekosaputro</h3>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="swiper-pagination"></div>
            
  
      </section><!-- /end sectio staf kami Section -->
    <!-- /end enntang kami Section -->


    <!-- Features Section -->
 <!-- Simpanan Utama Section -->
<section id="features" class="features section">

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
<section id="services" class="more-features section">
  
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


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Hubungi Kami</h2>
        <p>
          Kami siap membantu Anda dengan segala pertanyaan atau kebutuhan terkait koperasi kami. Jangan ragu untuk menghubungi kami untuk mendapatkan informasi lebih lanjut mengenai layanan kami, termasuk simpan pinjam, pembiayaan pendidikan, dan berbagai program lainnya. Kami berkomitmen untuk memberikan pelayanan terbaik kepada seluruh anggota koperasi kami dan memberikan solusi yang tepat untuk setiap kebutuhan finansial Anda.
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat </h3>
              <p>Kec.Binong Kab.Subang Prov.Jawa Barat</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Nomer Telepon</h3>
              <p>62839320338692</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Emial</h3>
              <p>fahriabdurohman@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="" class="logo d-flex align-items-center">
            <span class="sitename">Koperasi STARBIN</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Binong, Subang</p>
            <p>Belakang Polsek Binong</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>62839320238692</span></p>
            <p><strong>Email:</strong> <span>fahriabdurohman@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/"><i class="bi bi-twitter-x"></i></a>
            <a href="https://facebook.com/"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Link Terkait</h4>
          <ul>
            <li><a href="#hero">Beranda</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#features">Simpanan</a></li>
            <li><a href="#services">Pinjaman</a></li>
            <li><a href="#contact">Hubungi Kami</a></li>
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
            <a href="https://www.facebook.com/KoperasiKami" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/KoperasiKami" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://twitter.com/KoperasiKami" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://www.linkedin.com/company/KoperasiKami" target="_blank"><i class="bi bi-linkedin"></i></a>
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