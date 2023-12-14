@extends('Frontend.layouts.app')

@section('content')

<!-- New Portfolio Section -->
<section id="portfolio" class="portfolio" data-aos="fade-up">
    <div class="container">
        <div class="section-header">
            <h2>Portfolio</h2>
            <p>Non hic nulla eum consequatur maxime ut vero memo vero totam officiis pariatur eos dolorum sed fug dolorem est possimus esse quae repudiandae. Dolorem id enim officiis sunt deserunt esse soluta consequatur quaerat</p>
        </div>
    </div>

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
            <div class="row g-0 portfolio-container">
                @foreach($portfolios as $portfolio)
                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-{{ $portfolio->filter_category }}">
                        <img src="{{ asset('admin-assets/'.$portfolio->images) }}" class="img-fluid" alt="{{ $portfolio->title }}">
                        <div class="portfolio-info">
                            <h4>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $portfolio->id }}">
                                    {{ $portfolio->title }}
                                </a>
                            </h4>
                            <a href="{{ asset('admin-assets/'.$portfolio->images) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $portfolio->title }}">
                                <i class="bx bx-plus"></i>
                            </a>
                          
                        </div>
                    </div><!-- End Portfolio Item -->

                    <!-- Modal for each portfolio item -->
                    <div class="modal fade" id="portfolioModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="portfolioModal{{ $portfolio->id }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="portfolioModal{{ $portfolio->id }}Label">{{ $portfolio->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Show the description only in the modal -->
                                    <p>{{ $portfolio->description }}</p>
                                    <img src="{{ asset('admin-assets/'.$portfolio->images) }}" class="img-fluid" alt="{{ $portfolio->title }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- End New Portfolio Section -->

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>

@endsection
