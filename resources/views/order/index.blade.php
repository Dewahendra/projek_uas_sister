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
           </ul>
         </nav><!-- .navbar -->
   
       </div>
     </header>
     <!-- End Header -->
   
     <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                  <div class="card ">
                    <div class="card-header">
                      <h4 class="card-title">{{$title}}</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table tablesorter">
                          <thead class=" text-primary">
                            <tr class="text-center">
                              <th>No</th>
                              <th>Nama</th>
                              <th>No Telepon</th>
                              <th>Alamat</th>
                              <th>Email</th>
                              <th>Jenis Pesanan</th>
                              <th>Jenis Pengerjaan</th>
                              <th>Pembayaran</th>
                              <th>Pesan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no=1;?>
                            @foreach ($pemesanan as $item)
                                <tr class="text-center">
                                  <td>{{$no}}</td>
                                  <td>{{$item->nama}}</td>
                                  <td>{{$item->no_telepon}}</td>
                                  <td>{{$item->alamat}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>{{$item->jenis_pesanan}}</td>
                                  <td>{{$item->jenis_pengerjaan}}</td>
                                  <td>{{$item->pembayaran}}</td>
                                  <td>{{$item->pesan}}</td>
                                </tr>
                                <?php $no++; ?>
                            @endforeach
                            {{$pemesanan->links()}}
                          </tbody>
                        </table>
                      </div>
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