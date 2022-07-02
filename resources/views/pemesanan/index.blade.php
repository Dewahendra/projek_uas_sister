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
  
      <!-- ======= Portfolio Details Section ======= -->
      <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
            <form action="/pesan" method="POST">
              @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="name" class="form-control" id="nama" placeholder="Nama Anda"  name="nama" @error('nama') 
                  is-invalid @enderror value="{{old('nama')}}" required autofocus/>
                  @error('nama')
                  <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>
                <br>
                <div class="form-group">
                  <label for="no_telepon">No Telepon</label>
                  <input type="number" class="form-control" id="no_telepon" placeholder="No Telepon/WA" name="no_telepon" @error('no_telepon') 
                  is-invalid @enderror value="{{old('no_telepon')}}" required/>
                  @error('no_telepon')
                  <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>
                <br>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="address" class="form-control" id="alamat" placeholder="Alamat Tempat Tinggal Anda" name="alamat" @error('alamat') 
                  is-invalid @enderror value="{{old('alamat')}}" required/>
                  @error('alamat')
                  <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>
                <br>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="contoh@gmail.com" name="email" @error('email') 
                  is-invalid @enderror value="{{old('email')}}" required/>
                  @error('email')
                  <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>
                <br>
                <div class="form-group">
                  <label for="jenis_pesanan">Pilih Jenis Pesanan</label>
                  <select class="form-control" id="jenis_pesanan" name="jenis_pesanan">
                    <option>Laundry</option>
                    <option>Strika</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="jenis_pengerjaan">Pilih Jenis Pengerjaan</label>
                  <select class="form-control" id="jenis_pengerjaan" name="jenis_pengerjaan">
                    <option>Regular</option>
                    <option>Express</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="pembayaran">Pilih Jenis Pembayaran</label>
                  <select class="form-control" id="pembayaran" name="pembayaran">
                    <option>COD</option>
                    <option>Debit</option>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label for="extra">Tambahan Pesan Jika Ada</label>
                  <textarea class="form-control" id="pesan" rows="3" name="pesan" @error('pesan') 
                  is-invalid @enderror value="{{old('pesan')}}">
                  @error('pesan')
                  <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </textarea>
                </div>
                <br>
                <div class="form-group form-button">
                  <input type="submit" class="form-submit" value="Pesan"/>
              </div>
              </form>
  
        </div>
      </section><!-- End Portfolio Details Section -->
  
    </main><!-- End #main -->
   
     <!-- ======= Footer ======= -->
     @include('template-home.footer')
     <!-- End Footer -->
   
     {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
   
   @include('template-home.script')
   
   </body>
   
   </html>