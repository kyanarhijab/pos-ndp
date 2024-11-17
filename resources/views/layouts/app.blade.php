<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Project - Laravel </title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/feather/feather.css') }}">
  
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/vertical-layout-light/style.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/css/animate.min.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap41.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <link rel="shortcut icon" href="images/favicon.png" />
  <script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
  </script>
  <script src="{{ asset('assets/vendors/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/vendors/js/animate.jquery.js') }}"></script>
  <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
  
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src=" {{ asset('assets/images/logo.svg') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="  {{ asset('assets/images/logo-mini.svg') }} " alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('assets/images/faces/face28.jpg') }} " alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
          </li>
          
        </ul>
        
      </div>
    </nav>
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
    
      <!-- partial:partials/_sidebar.html -->
      @includeIf('menu')
      <!-- partial -->

      <div class="main-panel">
      <!-- Main Content -->
      @yield('content')
      <!-- Main Content -->

       <!-- footer -->
       @includeIf('footer')
       <!-- footer -->
      </div>

    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

</body>

</html>

