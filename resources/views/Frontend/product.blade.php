@extends('Frontend.layouts.app')

@section('content')
    <section class="featured-products">
        <div class="container">
            <h2>Featured Products</h2>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row gy-4">
                @foreach($products as $product)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="card bg-light">
                            <img src="{{ asset('admin-assets/' . str_replace(' ', '_', $product->image)) }}" alt="" class="card-img-top product-image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Price: ${{ $product->price }}</p>
                                
                                <div class="mb-3">
                                    <!-- Use a form to submit the product ID to the cart -->
                                    
                                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
