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
          <li class="active">
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
          <li>
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