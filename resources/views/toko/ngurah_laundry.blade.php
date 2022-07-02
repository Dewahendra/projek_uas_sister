<head>
    @include('template-home.header')
   </head>
   
   <body>
     <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.html">GO<span>LAUNDRY</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="btn btn-outline-success mt-4">Logout</button>
          </form>
          </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
     
     <main id="main">

      <!-- ======= Breadcrumbs Section ======= -->
      <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>NGURAH LAUNDRY</h2>
            <ol>
              <li><a href="/welcome">Rekomendasi</a></li>
              <li>Detail Toko</li>
            </ol>
          </div>
  
        </div>
      </section><!-- Breadcrumbs Section -->
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
  
                  <div class="swiper-slide">
                    <img src="https://media.istockphoto.com/photos/white-laundry-machines-and-dryers-in-a-row-in-laundromat-with-wheeled-picture-id1302553919?b=1&k=20&m=1302553919&s=170667a&w=0&h=3HOYEmqP_N3gyImzpzflKLb8qTrFHOWgCbVWoEBjWIo=" alt="">
                  </div>
  
                  <div class="swiper-slide">
                    <img src="https://media.istockphoto.com/photos/white-laundromat-picture-id138076343?k=20&m=138076343&s=612x612&w=0&h=cCEMRVmNBxVK9rSCx99XTZOnPlfJljIvFKnVeBm6R5s=" alt="">
                  </div>
  
                  <div class="swiper-slide">
                    <img src="https://media.istockphoto.com/photos/house-goods-shopping-picture-id1334879071?k=20&m=1334879071&s=612x612&w=0&h=fbQQm45Qsv9h3NmYO5RNjJdmYEZQ8MvTMWwlxxnoCWk=" alt="">
                  </div>
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-4">
              <div class="portfolio-info">
                <h3>Informasi Toko</h3>
                <ul>
                  <li><strong>Nama </strong>: Ngurah Laundry</li>
                  <li><strong>Alamat</strong>: Jl. Setia Budi no.43, Penarukan Singaraja</li>
                  <li><strong>Jam Buka</strong>: 6 pagi - 5 sore</li>
                  <li><strong>Kontak kami</strong>: <a href="#">+62 876 3457 8290</a></li>
                </ul>
              </div>
              <br>
              <div>
                <a href="/pesan" class="btn btn-outline-success">Buat Pesanan</a>
              </div>
              <div class="portfolio-description">
                <h2>Detail ngurah laundry</h2>
                <p>
                  Ngurah laundry yang berlokasi di sebelah selatan jalan yang diambil dari arah mata angin merupakan Laundry yang menjunjung tinggi kepuasan customers dan kualitas yang 
                  diberikan, agar para pelanggan menjadi senang dan setia dengan Laundry kami.
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Portfolio Details Section -->
  
      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing">
        <div class="container">
  
          <div class="section-title">
            <h2>Layanan Kami</h2>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                <h3>Reguler 3 hari</h3>
                <h4><sup>Rp</sup>5.000<span> / kg</span></h4>
                <ul>
                  <p>
                    Layanan Laundry 3 Hari adalah pelayanan yang proses pengerjaan nya selama 3 hari, waktu di hitung dari Pakaian anda kami terima.
                  </p>
                </ul>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
              <div class="box " data-aos="zoom-in" data-aos-delay="100">
                <h3>Service 1 hari</h3>
                <h4><sup>Rp</sup>8.000<span> / kg</span></h4>
                <ul>
                  <p>
                    Layanan Laundry 1 Hari adalah pelayanan yang proses pengerjaan nya selama 1 hari, waktu di hitung dari Pakaian anda kami terima.
                  </p>
                </ul>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                <h3>Express</h3>
                <h4><sup>Rp</sup>12.000<span> / kg</span></h4>
                <ul>
                  <p>
                    Layanan Express Laundry  adalah pelayanan yang proses pengerjaan nya hanya 5 Jam, waktu di hitung dari Pakaian anda kami terima.
                  </p>
                </ul>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-10">
              <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                <h3>Setrika</h3>
                <h4><sup>Rp</sup>3.000<span> / kg</span></h4>
                <ul>
                  <p>
                    Layanan Setrika adalah pelayanan yang proses pengerjaan nya selama 1 hari, waktu di hitung dari Pakaian anda kami terima.
                  </p>
                </ul>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-10">
              <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                <h3>Setrika Express</h3>
                <h4><sup>Rp</sup>6.000<span> / kg</span></h4>
                <ul>
                  <p>
                    Layanan Express Setrika  adalah pelayanan yang proses pengerjaan nya hanya 2 Jam, waktu di hitung dari Pakaian anda kami terima.
                  </p>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mt-lg-10">
              <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                <h3>Khusus Bayi</h3>
                <h4><sup>Rp</sup>15.000<span> / kg</span></h4>
                <ul>
                  <p>
                    Layanan khusus bayi/balita ini mementingkan kualitas kebersihan ekstra karena berkaitan dengan kulit bayi dan pengerjaannya 1 hari jadi.
                  </p>
                </ul>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Pricing Section -->
  
    </main><!-- End #main -->
   
     <!-- ======= Footer ======= -->
     @include('template-home.footer')
     <!-- End Footer -->
   
     {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
   
   @include('template-home.script')
   
   </body>
   
   </html>