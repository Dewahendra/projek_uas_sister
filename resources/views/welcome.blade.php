<head>
 @include('template-home.header')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="/welcome">GO<span>LAUNDRY</span></a></h1>
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
            <li><a class="nav-link scrollto" href="">Pesanan</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>REKOMENDASI</h2>
        <p>Berikut merupakan rekomendasi Laundry yang berada di sekitar lokasi Anda</p>
      </div>

      <div class="row portfolio-container">

        <div  class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="https://media.istockphoto.com/photos/white-laundry-machines-and-dryers-in-a-row-in-laundromat-with-wheeled-picture-id1302553919?b=1&k=20&m=1302553919&s=170667a&w=0&h=3HOYEmqP_N3gyImzpzflKLb8qTrFHOWgCbVWoEBjWIo=" class="img-fluid" alt="">
              <a href=""></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="/ngurah_laundry">Ngurah Laundry </a></h4>
              <p>Jl. Setia Budi no.43, Penarukan Singaraja</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="https://media.istockphoto.com/photos/stack-of-folded-towels-and-detergents-on-white-table-in-bathroom-picture-id1329022730?b=1&k=20&m=1329022730&s=170667a&w=0&h=0b04zFP-76zwchX10Ec7_BWpfhWv-AooMT0G0vsmt4E=" class="img-fluid" alt="">
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Jaya Laundry</a></h4>
              <p>Jl. Patimura no.10,  Singaraja</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="https://images.unsplash.com/photo-1610305401607-8745a10c75dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGxhdW5kcnl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="">
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Satya Laundry</a></h4>
              <p>Jl. Drupadi no.12,  Singaraja</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="https://media.istockphoto.com/photos/unrecognizable-man-stacking-freshly-ironed-sheets-or-fabrics-in-an-picture-id1303923065?b=1&k=20&m=1303923065&s=170667a&w=0&h=2OxJs55ggLTXcsmuS4xHu0m8p3VDZNAVlFhhsHvqjl8=" class="img-fluid" alt="">
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Laundry Sukses</a></h4>
              <p>Jl. Arjuna no.13, Singaraja</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="https://images.unsplash.com/photo-1574538298279-26973f60efa3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bGF1bmRyeXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="">
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Kencana Laundry</a></h4>
              <p>Jl. Bima no.30,  Singaraja</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->
  

<!-- ======= Footer ======= -->
@include('template-home.footer')
<!-- End Footer -->
  
    
{{-- script --}}
@include('template-home.script')
{{-- end script --}}
</body>