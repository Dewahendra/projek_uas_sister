@include('template-dashboard.header')

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="#" class="simple-text logo-mini">
            GO
          </a>
          <a href="#" class="simple-text logo-normal">
            LAUNDRY
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="/dashboard">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="/pengguna">
              <i class="tim-icons icon-single-02"></i>
              <p>User</p>
            </a>
          </li>
          <li class="active">
            <a href="/mitra">
              <i class="tim-icons icon-single-02"></i>
              <p>Mitra</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      
@include('template-dashboard.navbar')

      {{-- Content --}}

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
                          <th>Alamat</th>
                          <th>No Telepon</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Cover</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;?>
                        @foreach ($mitra as $item)
                            <tr class="text-center">
                              <td>{{$no}}</td>
                              <td>{{$item->nama}}</td>
                              <td>{{$item->alamat}}</td>
                              <td>{{$item->no_telepon}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->password}}</td>
                              <td>{{$item->cover}}</td>
                              <form action="{{route('mitra.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                              <td>
                              <button type="submit" class="btn btn-danger">Hapus<i class=" ml-2 fa fa-trash"></i></button>
                              </td>
                              </form>
                            </tr>
                            <?php $no++; ?>
                        @endforeach
                        {{$mitra->links()}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      
      {{-- End Content --}}
     
@include('template-dashboard.footer')

    </div>
  </div>
  
@include('template-dashboard.sidebar')

@include('template-dashboard.script')  

</body>

</html>