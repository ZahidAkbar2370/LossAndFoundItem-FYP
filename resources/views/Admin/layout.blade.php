<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TLost</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('customerdesign/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('customerdesign/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="{{ asset('customerdesign/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('customerdesign/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('customerdesign/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('customerdesign/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('customerdesign/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('customerdesign/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('customerdesign/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('customerdesign/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">TLost</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('customerdesign/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Zahid Akbar</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Zahid Akbar</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('customer/need-help') }}">
                <i class="bi bi-question-circle"></i>
                <span>Need Help</span>
              </a>
            </li> --}}
            {{-- <li>
              <hr class="dropdown-divider">
            </li> --}}
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              
              <div class="col-md-2">
                @if(!empty(Auth::user()))
                <a href="{{ url('logout') }}" class="dropdown-item d-flex align-items-center" ><i class="bi bi-box-arrow-right"></i> <span>Sign Out</span> </a>
                    {{-- <form action="{{ URL::to('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary float-right mt-2 ml-2">Logout</button>
                    </form> --}}
                @else
                    <a href="{{ url('register') }}" class="btn btn-primary float-right mt-2 ml-2">Register</a>
                    <a  href="{{ url('login') }}" class="btn btn-primary float-right mt-2">Login</a>
                @endif
            </div>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->





{{-- ///////////////////////////// sidebar //////////////////////////////// --}}









  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Category Item</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/categories') }}">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/add-category') }}">
              <i class="bi bi-circle"></i><span>Add New</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Lost Items</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>View History</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Add Now</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav --> --}}
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/messages') }}">
          <i class="bi bi-cash"></i>
          <span>Messages</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/lost-and-found') }}">
          <i class="bi bi-cash"></i>
          <span>Item List</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->


      <div class="col-md-2">
        @if(!empty(Auth::user()))
        <a href="{{ url('logout') }}" class="nav-link collapsed " ><i class="bi bi-box-arrow-right"></i> <span>Logout</span> </a>
            {{-- <form action="{{ URL::to('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary float-right mt-2 ml-2">Logout</button>
            </form> --}}
        @else
            <a href="{{ url('register') }}" class="btn btn-primary float-right mt-2 ml-2">Register</a>
            <a  href="{{ url('login') }}" class="btn btn-primary float-right mt-2">Login</a>
        @endif
    </div>
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-file-earmark"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->



  @yield('content')







  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>TLost</span></strong>. All Rights Reserved
    </div>
    {{-- <div class="credits">
      Designed by <a href="https://softwebies.com/">Softwebies</a>
    </div> --}}
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('customerdesign/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('customerdesign/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('customerdesign/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('customerdesign/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('customerdesign/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('customerdesign/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('customerdesign/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('customerdesign/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('customerdesign/assets/js/main.js')}}"></script>

</body>

</html>
