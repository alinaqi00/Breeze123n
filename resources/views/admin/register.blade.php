<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app-light.css') }}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app-dark.css') }}" id="darkTheme">
  </head>
  <body class="dark">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-6 col-md-8 col-10 mx-auto" action="{{ route('admin.register.create') }}" method="post">
          @csrf
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ asset('admin-assets') }}/index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
            <h2 class="my-3">Register</h2>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email">
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="password">New Password</label>
                <input name="password" type="password" class="form-control" id="password">
              </div>
              <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input name="confirmpassword" type="password" class="form-control" id="confirmpassword">
              </div>
            </div>
            <div class="col-md-6">
              <p class="mb-2">Password requirements</p>
              <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
              <ul class="small text-muted pl-4 mb-0">
                <li> Minimum 8 characters </li>
                <li>At least one special character</li>
                <li>At least one number</li>
                <li>Cant be the same as a previous password</li>
              </ul>
            </div>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
          <!-- Add the error message display here -->
          @if (session('error'))
          <div class="alert alert-danger mt-3 text-center">
            {{ session('error') }}
          </div>
          @endif
        </form>
      </div>
    </div>
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin-assets/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('admin-assets/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>
