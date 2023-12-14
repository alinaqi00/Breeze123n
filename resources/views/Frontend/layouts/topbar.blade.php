<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{ asset('frontend-assets/assets/img/logo.png') }}" alt="">
      {{--  <h1>HeroBiz<span>.</span></h1>  --}}
    </a>

    <nav id="navbar" class="navbar">
      <ul>

        

        <li><a class="nav-link scrollto" href="{{ asset('Frontend/home') }}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{ asset('Frontend/aboutus') }}">About</a></li>
        <li><a class="nav-link scrollto" href="{{ asset('Frontend/services') }}">Services</a></li>
        <li><a class="nav-link scrollto" href="{{ asset('Frontend/portfolio') }}">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="{{ asset('Frontend/team') }}">Team</a></li>
        <li><a class="nav-link scrollto" href="{{ asset('Frontend/product') }}">Product</a></li>
        <li><a href="{{ asset('Frontend/blog') }}">Blog</a></li>
        <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->

    <a class="btn-getstarted scrollto" href="{{ asset('Frontend/home') }}">Get Started</a>

  </div>
</header><!-- End Header -->

<section id="hero-animated" class="hero-animated d-flex align-items-center">
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    
    <h2>Welcome to <span>Techesthete</span></h2>
    <p>Techesthete is a leading designing and devolpement company .</p>
    <div class="d-flex">
      <a href="{{ asset('Frontend/aboutus') }}" class="btn-get-started scrollto">About</a>
      <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
    </div>
  </div>
</section>

<main id="main">