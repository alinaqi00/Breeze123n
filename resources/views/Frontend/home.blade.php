@extends('Frontend.layouts.app')

@section('content')

<!-- About Section Start -->
    <div id="about-us">
    <div class="container">
        <h3>About us</h3>
        <div class="row" style="margin-right: 0; margin-left: 0;" data-aos="fade-up" data-aos-delay="300">
            @foreach($aboutUsData as $about)
                <div class="col-md-6">
                    @if ($about->image)
                        <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $about->image)) }}" alt="Post Image" style="max-width: 150%; height: auto;">
                    @else
                        No Image
                    @endif
                </div>
                <div class="col-md-6">
                  <div class="row content" data-aos="fade-up">
                      <div class="col-lg-6 offset-lg-6">
                          <p style="text-align: center;">
                              {{ $about->content }}
                          </p>
                      </div>
                  </div>
              </div>
              
            @endforeach
        </div>
    </div>
    </div>
<!-- About Section End -->



<section class="featured-services">
  <div class="container">
      <h2>Our Services</h2>

      <div class="row gy-4">
          @foreach($services->take(3) as $service)
              <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-out">
                  <div class="service-item position-relative box" style="background-color: #f8f9fa;">
                      <div class="icon"><i class="{{ $service->icon }} icon"></i></div>
                      <h4><a href="#" class="stretched-link">{{ $service->title }}</a></h4>
                      <p>{{ $service->content }}</p>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
</section>



<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

        <div class="content px-xl-5">
          <h3>Frequently Asked <strong>Questions</strong></h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
          </p>
        </div>

        <div class="accordion accordion-flush px-xl-5" id="faqlist">

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                <i class="bi bi-question-circle question-icon"></i>
                Non consectetur a erat nam at lectus urna duis?
              </button>
            </h3>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                <i class="bi bi-question-circle question-icon"></i>
                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
              </button>
            </h3>
            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                <i class="bi bi-question-circle question-icon"></i>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
              </button>
            </h3>
            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                <i class="bi bi-question-circle question-icon"></i>
                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
              </button>
            </h3>
            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                <i class="bi bi-question-circle question-icon"></i>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </div>
            </div>
          </div><!-- # Faq item-->

          <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                <i class="bi bi-question-circle question-icon"></i>
                Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
              </button>
            </h3>
            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
              <div class="accordion-body">
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </div>
            </div>
          </div><!-- # Faq item-->

        </div>

      </div>

      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
    </div>

  </div>
</section><!-- End F.A.Q Section --> 



<!-- ======= Breadcrumbs ======= -->
<!-- ... (your existing code for Breadcrumbs) ... -->



<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

          <div class="row g-5">

              <div class="col-lg-8">

                  <div class="row gy-4 posts-list">

                      @foreach($posts as $post)
                          <div class="col-lg-6">
                              <article class="d-flex flex-column">

                                  <div class="post-img">
                                      <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $post->image)) }}" alt="" class="img-fluid">
                                  </div>

                                  <h2 class="title">
                                      <a href="{{ route('Frontend.blog', $post->id) }}">{{ $post->title }}</a>
                                  </h2>

                                  <div class="meta-top">
                                      <ul>
                                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $post->author }}</li>
                                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="{{ $post->created_at->toDateString() }}">{{ $post->created_at->format('M d, Y') }}</time></li>
                                          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('Frontend.blog', $post->id) }}">12 Comments</a></li>
                                      </ul>
                                  </div>

                                  <div class="content">
                                      <p>{{ \Illuminate\Support\Str::words($post->content, 20, '...') }}</p>
                                  </div>

                                  <div class="read-more mt-auto align-self-end">
                                      <a href="{{ route('Frontend.blog', $post->id) }}">Read More</a>
                                  </div>

                              </article>
                          </div><!-- End post list item -->
                      @endforeach

                  </div><!-- End blog posts list -->

                  <div class="blog-pagination">
                      <ul class="justify-content-center">
                          <li><a href="#">1</a></li>
                          <li class="active"><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                      </ul>
                  </div><!-- End blog pagination -->

              </div>

              <div class="col-lg-4">

                  <div class="sidebar">

                      <!-- Search Form -->
                      <div class="sidebar-item search-form">
                          <h3 class="sidebar-title">Search</h3>
                          <form action="" class="mt-3">
                              <input type="text" placeholder="Search...">
                              <button type="submit"><i class="bi bi-search"></i></button>
                          </form>
                      </div><!-- End sidebar search form -->

                      <!-- Recent Posts with Photos -->
                      <div class="sidebar-item recent-posts">
                          <h3 class="sidebar-title">Recent Posts</h3>

                          <ul class="mt-3">
                              @foreach($posts as $post)
                                  <li class="d-flex align-items-center">
                                      <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $post->image)) }}" alt="{{ $post->title }}" class="img-fluid" style="max-width: 50px; margin-right: 10px;">
                                      <a href="{{ route('Frontend.blog', $post->id) }}">{{ $post->title }}</a>
                                  </li>
                              @endforeach
                          </ul>
                      </div><!-- End sidebar recent posts -->

                  </div><!-- End Blog Sidebar -->

              </div>

          </div>

      </div>
  </section><!-- End Blog Section -->

    

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="testimonials-slider swiper">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('frontend-asset/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('frontend-asset/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('frontend-asset/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('frontend-asset/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{ asset('frontend-asset/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
  

    <!-- ======= Breadcrumbs ======= -->
    <!-- ... (your existing code for Breadcrumbs) ... -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Team</h2>
                <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>

            <div class="row gy-5">
                @foreach($team as $team)
                    <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 200 }}">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $team->image)) }}" alt="{{ $team->title }}" class="img-fluid" style="max-width: 350px; margin-right: 20px;">

                            </div>
                            <div class="member-info">
                                <div class="social">
                                    <!-- Add social links here if needed -->
                                </div>
                                <h4>{{ $team->name }}</h4>
                                <span>{{ $team->role }}</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach
            </div>

        </div>
    </section><!-- End Team Section -->
   
@endsection

