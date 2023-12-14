</html>
<!DOCTYPE html>
<html lang="en">

    <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HeroBiz Bootstrap Template - Home 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend-assets/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend-assets/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend-assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend-assets/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend-assets/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend-assets/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('frontend-assets/assets/css/variables.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('frontend-assets/assets/css/variables-blue.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('frontend-assets/assets/css/variables-green.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('frontend-assets/assets/css/variables-orange.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('frontend-assets/assets/css/variables-purple.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('frontend-assets/assets/css/variables-red.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('frontend-assets/assets/css/variables-pink.css') }}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend-assets/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>

    <body>
      <div style="position: fixed; bottom: 20px; left: 30px;">
        <a href="https://wa.me/1234567890" target="_blank">
          <img src="{{ asset('frontend-assets/assets/img/123.png') }}" alt="WhatsApp Icon" style="width: 50px; height: 50px;">
        </a>
    </div>
        
        @include('Frontend.layouts.topbar')
        @yield('content')
        @include('Frontend.layouts.footer')



    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/vendor/php-email-form/validate.js') }}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{ asset('frontend-assets/assets/js/main.js') }}"></script>
    <!-- Add this to your HTML layout file, such as app.blade.php -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  
  </body>
  
  </html>