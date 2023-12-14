@extends('frontend.layouts.app')

@section('content')
<main id="main">

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

                                    <!-- Inside your Frontend.blog view -->
<div class="read-more mt-auto align-self-end">
    <a href="{{ route('Frontend.blog.show', $post->id) }}">Read More</a>
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

</main><!-- End #main -->
@endsection
