@extends('layouts.web')
@section('content')
     <!-- Hero Section -->
 <section id="hero" class="hero section">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <h1>Welcome to Tantui Sport Center</h1>
          <p>Apakah Anda mencari tempat terbaik untuk bermain futsal bersama teman, keluarga, atau komunitas Anda? <br>Lapangan Futsal Tantui adalah pilihan tepat untuk Anda!</p>
          <div class="d-flex">
            <a href="#" class="btn-get-started" id="booking-btn">Booking Now</a>
          </div>
          <script>
            document.getElementById("booking-btn").addEventListener("click", function (event) {
              event.preventDefault();
              alert("Silakan login terlebih dahulu untuk melakukan booking.");
             // window.location.href = "http://127.0.0.1:8000/login";
            });
          </script>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
          <img src="assets/img/hero-img.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->


  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>About Us<br></span>
      <h2>About</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/about.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <h3>Kenapa Memilih Kami?</h3>
          <p class="fst-italic">
            Lapangan Futsal Tantui hadir untuk memberikan pengalaman bermain futsal yang seru dan berkualitas. Dengan fasilitas modern, lapangan kami dirancang untuk memenuhi kebutuhan pemain dari berbagai tingkat, mulai dari pemula hingga profesional.
          </p>
          <ul>
            <li><i class="bi bi-check2-all"></i> <span>Menyediakan lapangan berkualitas tinggi, dilengkapi dengan ruang ganti yang bersih, area parkir luas, dan kantin dengan beragam pilihan makanan serta minuman.</span></li>
            <li><i class="bi bi-check2-all"></i> <span>Menciptakan lingkungan yang ramah, aman, dan menyenangkan untuk mendukung semangat olahraga dan kebersamaan.</span></li>
          </ul>
          <p>
            Ayo, jadikan Lapangan Futsal Tantui sebagai tempat favorit Anda untuk bermain futsal dan meraih momen-momen terbaik bersama!
          </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Services Section -->
  <section id="fasilitas" class="fasilitas section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Fasilitas</span>
      <h2>Fasilitas</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="fasilitas-item position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="fasilitas-details.html" class="stretched-link">
              <h3>Lapangan Standar dan Aman</h3>
            </a>
            <p>Dua lapangan futsal dengan ukuran standar, penerangan memadai, dan jaring pembatas.</p>
          </div>
        </div><!-- End fasilitas Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="fasilitas-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="fasilitas-details.html" class="stretched-link">
              <h3>Ruang Ganti dan Kamar Mandi</h3>
            </a>
            <p>Fasilitas untuk pemain, termasuk ruang ganti, toilet, dan kamar mandi dengan air bersih.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="fasilitas-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="fasilitas-details.html" class="stretched-link">
              <h3>Area Penonton dan Tunggu</h3>
            </a>
            <p>Tempat duduk atau tribun kecil untuk penonton dan ruang tunggu untuk pemain</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="fasilitas-item position-relative">
            <div class="icon">
              <i class="bi bi-bounding-box-circles"></i>
            </div>
            <a href="fasilitas-details.html" class="stretched-link">
              <h3>Kantin</h3>
            </a>
            <p>Kantin kafe untuk makanan/minuman</p>
            <a href="fasilitas-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="fasilitas-item position-relative">
            <div class="icon">
              <i class="bi bi-calendar4-week"></i>
            </div>
            <a href="fasilitas-details.html" class="stretched-link">
              <h3>Parkir dan Keamanan</h3>
            </a>
            <p>Area parkir yang memadai dan fasilitas keamanan seperti CCTV atau penjaga.</p>
            <a href="fasilitas-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="fasilitas-item position-relative">
            <div class="icon">
              <i class="bi bi-chat-square-text"></i>
            </div>
            <a href="fasilitas-details.html" class="stretched-link">
              <h3>Kebersihan dan Kenyamanan</h3>
            </a>
            <p>Tempat sampah, petugas kebersihan, dan fasilitas tambahan seperti Wi-Fi atau audio.</p>
            <a href="fasilitas-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Galeri</span>
      <h2>Galeri</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Lapangan</li>
          <li data-filter=".filter-product">Bola</li>
        </ul><!-- End Portfolio Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="assets/img/portfolio/lapangan-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lapangan 1</h4>
              <a href="assets/img/portfolio/Lapangan-1.jpg" title="Lapangan 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="assets/img/portfolio/bola-1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bola 1</h4>
              <a href="assets/img/portfolio/bola-1.png" title="Bola 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="assets/img/portfolio/lapangan-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lapangan 2</h4>
              <a href="assets/img/portfolio/lapangan-3.jpg" title="Lapangan 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
            <img src="assets/img/portfolio/bola-2.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bola 2</h4>
              <a href="assets/img/portfolio/bola-2.png" title="Bola 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="assets/img/portfolio/lapangan-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Lapangan 3</h4>
              <a href="assets/img/portfolio/lapangan-2.jpg" title="Lapangan 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="assets/img/portfolio/bola-3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bola 3</h4>
              <a href="assets/img/portfolio/bola-3.jpeg" title="Bola 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- /Portfolio Section -->

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Testimonials</span>
      <h2>Testimonials</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
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
                "spaceBetween": 20
              }
            }
          }
        </script>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item" "="">
          <p>
            <i class=" bi bi-quote quote-icon-left"></i>
              <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
              <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- /Testimonials Section -->


  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Contact</span>
      <h2>Contact</h2>
      <p>Ingin menghubungi kami untuk informasi lebih lanjut? Silakan isi form di bawah ini.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-5">

          <div class="info-wrap">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>85JW+CWW, Jl. Sultan Hasanudin, Hative Kecil, Kec. Sirimau, Kota Ambon, Maluku</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>0813-4325-6117</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>futsaltantui@gmail.com</p>
              </div>
            </div><!-- End Info Item -->
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.641204683416!2d128.1973322!3d-3.6688954999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce92267b6fb0b%3A0xeb5a52aafac860b9!2sFUTSAL%20TANTUI!5e0!3m2!1sid!2sid!4v1737960152117!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-7">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Nama</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Judul</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Pesan</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Sedang Proses</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda Sudah Terkirim. Terima Kasih!</div>

                <button type="submit">Kirim Pesan</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

@endsection