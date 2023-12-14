<!-- blogdetail.blade.php -->

@extends('frontend.layouts.app')

@section('content')
<main id="main">
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <article class="d-flex flex-column text-center">
                        <h2 class="title">{{ $post->title }}</h2>
                        <div class="meta-top mb-4">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $post->author }}</li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="{{ $post->created_at->toDateString() }}">{{ $post->created_at->format('M d, Y') }}</time></li>
                                <!-- Add other meta information as needed -->
                            </ul>
                        </div>
                        <div class="post-img mx-auto mb-4">
                            <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $post->image)) }}" alt="" class="img-fluid" style="max-width: 80%; height: auto;">
                            <!-- Adjust width and height as needed -->
                        </div>
                        <div class="content text-left">
                            <p>{{ $post->content }}</p>
                        </div>
                        <!-- Add any other content you want to display -->
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
