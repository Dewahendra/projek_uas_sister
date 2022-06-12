<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('template_sign/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('template_sign/css/style.css')}}">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registrasi</h2>
                        <form action="/regmitra" method="POST" class="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" @error('nama') 
                                is-invalid @enderror placeholder="Nama" value="{{old('nama')}}" required autofocus/>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-pin material-icons-name"></i></label>
                                <input type="text" name="alamat" @error('alamat') 
                                is-invalid @enderror placeholder="Alamat" value="{{old('alamat')}}" required/>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_telepon"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="number" name="no_telepon" @error('no_telepon') 
                                is-invalid @enderror placeholder="No Telepon" value="{{old('no_telepon')}}" required/>
                                @error('no_telepon')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_toko"><i class="zmdi zmdi-money-box material-icons-name"></i></label>
                                <input type="text" name="nama_toko" @error('nama_toko') 
                                is-invalid @enderror placeholder="Nama Toko" value="{{old('nama_toko')}}" required/>
                                @error('nama_toko')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="harga_laundry"><i class="zmdi zmdi-money-box material-icons-name"></i></label>
                                <input type="text" name="harga_laundry" @error('harga_laundry') 
                                is-invalid @enderror placeholder="Harga Laundry (Kg/Bijian)" value="{{old('harga_laundry')}}" required/>
                                @error('harga_laundry')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="harga_strika"><i class="zmdi zmdi-money-box material-icons-name"></i></label>
                                <input type="text" name="harga_strika" @error('harga_strika') 
                                is-invalid @enderror placeholder="Harga Strika (Kg/Bijian)" value="{{old('harga_strika')}}" required/>
                                @error('harga_strika')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi"><i class="zmdi zmdi-label material-icons-name"></i></label>
                                <input type="text" name="deskripsi" @error('deskripsi') 
                                is-invalid @enderror placeholder="Deskripsi Toko" value="{{old('deskripsi')}}" required/>
                                @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" @error('email') 
                                is-invalid @enderror placeholder="Email" value="{{old('email')}}" required/>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" @error('password') 
                                is-invalid @enderror placeholder="Password" required/>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="file" name="cover" @error('cover') 
                                is-invalid @enderror placeholder="Cover Sampul Toko" required/>
                                @error('cover')
                                <div class="invalid-feedback">
                                    {{$message}}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" class="form-submit" value="Daftar"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('template_sign/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="" class="signup-image-link">Sudah Memiliki Akun ? Login</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('template_sign/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template_sign/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>