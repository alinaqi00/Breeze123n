@extends('Frontend.layouts.app')

@section('content')
    <section class="featured-services">
        <div class="container">
            <h2>Our Services</h2>

            <div class="row gy-4">
                @foreach($services as $service)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative box">
                            <div class="icon"><i class="{{ $service->icon }} icon"></i></div>
                            <h4>
                                <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#serviceModal{{ $service->id }}">
                                    {{ $service->title }}
                                </a>
                            </h4>
                            <p>{{ $service->content }}</p>
                        </div>
                    </div>

                    <!-- Modal for each service -->
                    <div class="modal fade" id="serviceModal{{ $service->id }}" tabindex="-1" aria-labelledby="serviceModal{{ $service->id }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="serviceModal{{ $service->id }}Label">{{ $service->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>{{ $service->content }}</p>
                                    <!-- Add other details as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Other sections... -->

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>
@endsection
