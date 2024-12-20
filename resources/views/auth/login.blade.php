<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AKP Project Admin</title>
   <!-- plugins:css -->
   <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/feather/feather.css') }}">
   <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
   <link rel="stylesheet" type="text/css" href=" {{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
              </div>
              <h4>Project - Laravel</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form method="POST" action="{{url('proses_login')}}" class="pt-3"
              novalidate="">
              @csrf
                <div class="form-group">
                  <input id="username" type="username" class="form-control @error('login_gagal') is-invalid @enderror" name="username" placeholder="username" value="{{ old('username') }}" tabindex="1" required autofocus>
                  @error('login_gagal')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input id="password" type="password" class="form-control @error('login_gagal') is-invalid @enderror" name="password" placeholder="Password" tabindex="2" required>
                  @error('login_gagal')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Sign In
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
   <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script> 
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script> 
  <script src="{{ asset('assets/js/template.js') }}"></script> 
  <script src="{{ asset('assets/js/settings.js') }}"></script> 
  <script src="{{ asset('assets/js/todolist.js') }}"></script> 
  <!-- endinject -->
</body>

</html>
