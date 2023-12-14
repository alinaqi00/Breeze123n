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
    <link rel="stylesheet" href="{{ asset('admin-assets/css/simplebar.css') }}>
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/feather.css') }}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app-light.css') }}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/app-dark.css') }}" id="darkTheme">
    <style>
      /* Add a white border to the form */
      .form-border {
        border: 2px solid white;
        padding: 20px; /* Add padding to create space between the border and form elements */
      }
    </style>
  </head>
  <body class="dark">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center form-border" action="{{ route('admin.login') }}" method="post">
          @csrf <!-- Add the CSRF token for form submissions -->

          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="/index.html">
            <!-- ... (rest of your SVG content) ... -->
          </a>
          <h1 class="h6 mb-3">Sign in</h1>
          
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control form-control-lg" name="email" placeholder="Email address" required autofocus>
          </div>
          <div class "form-group">
            <label for "inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control form-control-lg" placeholder="Password" required>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" name="remember" value="remember-me"> Stay logged in
            </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
          <p class="mt-5 mb-3 text-muted">© 2020</p>
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
    <script src="{{ asset('admin-assets/js/config.js') }}"></script>
    <script src="{{ asset('admin-assets/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }

      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
