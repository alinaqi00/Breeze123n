@extends('frontend.layouts.app')

@section('content')
<main id="main">

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


</main><!-- End #main -->
@endsection
