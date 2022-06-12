<head>
 @include('template-home.header')
</head>

<body>
  <!-- ======= Header ======= -->
  @include('template-home.navbar')
  <!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Temukan Jasa Laundry Terbaik Di Sekitar Kamu</h2>
      <div>
        <a href="/register" class="btn-get-started scrollto">Daftar</a>
      </div>
    </div>

    <div class="hero-slider swiper">
      <div class="swiper-wrapper">
        {{-- <div class="swiper-slide" style="background-image: url('template_home/img/hero-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('template_home/img/hero-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('template_home/img/hero-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('template_home/img/hero-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('template_home/img/hero-carousel/5.jpg');"></div> --}}
      </div>
    </div>

  </section><!-- End Hero Section -->
  

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="https://bootstrapmade.com/demo/templates/Selecao/assets/img/features-1.png" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Sistem kerja Go Laundry</h2>
            <h3>Sistem order yang ada pada website Go Laundry memudahkan penggunanya untuk menentukan dan memilih sesuai kebutuhan mereka.</h3>

            <ul>
              <li><i class="bi bi-check-circle"></i> Buka website Go Laundry.</li>
              <li><i class="bi bi-check-circle"></i> Daftarkan diri kamu.</li>
              <li><i class="bi bi-check-circle"></i> Buat orderan lewat website.</li>
              <li><i class="bi bi-check-circle"></i> Temukan mitra Go Laundry terbaik.</li>
              <li><i class="bi bi-check-circle"></i> Tinggal order santai deh, tanpa ribet.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
          <p>Pada website Go Laundry, user akan diberikan kebebasan penuh unutuk memilih Laundry sesuai dengan budget dan keperluan yang diinginkan.</p>
          <p>Go Laundry juga memiliki keunggulan-keunggulan seperti berikut :</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Metode Order Yang Simple</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Kebebasan Untuk Memilih</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Fitur Yang Mudah Dimengerti</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Santai Tanpa Ribet</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

<!-- ======= About Section ======= -->
<section id="about">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-6 about-img">
        <img src="https://bootstrapmade.com/demo/templates/Ninestars/assets/img/about-img.svg" alt="">
      </div>

      <div class="col-lg-6 content">
        <h2>Anda pengusaha laundry?</h2>
        <h2>
          Ayo upgrade Bisnis Anda dengan Bergabung bersama Kemitraan 
        </h2>
        <h4>
          GO LAUNDRY
        </h4>
        <div>
          <li><a href="/regmitra"><button type="button" class="btn btn-primary btn-lg">Daftar Jadi Mitra</button></a></li>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->



    {{-- <!-- ======= Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Partner</h2>
          <p>Go Laundry juga sudah bekerja sama dengan laundry-laundry terpercaya dan aman</p>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section --> --}}









  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('template-home.footer')
  <!-- End Footer -->

  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

@include('template-home.script')

</body>

</html>