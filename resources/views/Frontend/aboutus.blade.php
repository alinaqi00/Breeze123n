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
                        <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $about->image)) }}" alt="Post Image" style="max-width: 100%; height: auto;">
                    @else
                        No Image
                    @endif
                </div>
                <div class="col-md-6">
                    <div class="section-title" data-aos="zoom-out">
                        <h2>About</h2>
                        <p>Who we are</p>
                    </div>
                    <div class="row content" data-aos="fade-up">
                        <div class="col-lg-6">
                            <p>
                                {{ $about->content }}
                            </p>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <a href="#" class="btn-learn-more">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About Section End -->

@endsection
