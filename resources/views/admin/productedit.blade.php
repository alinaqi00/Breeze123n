@extends('admin.layouts.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- Edit form -->
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">Edit Product</h2>
                            <div class="card shadow">
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('admin.product.update', $product) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="stock_quantity">Stock Quantity</label>
                                            <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" value="{{ $product->stock_quantity }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="manufacturer">Manufacturer</label>
                                            <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ $product->manufacturer }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="supplier">Supplier</label>
                                            <input type="text" class="form-control" id="supplier" name="supplier" value="{{ $product->supplier }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="material">Material</label>
                                            <input type="text" class="form-control" id="material" name="material" value="{{ $product->material }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="minimum_order_quantity">Min Order Qty</label>
                                            <input type="text" class="form-control" id="minimum_order_quantity" name="minimum_order_quantity" value="{{ $product->minimum_order_quantity }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control-file" id="image" name="image">
                                            @if ($product->image)
                                                <img src="{{ asset($product->image) }}" alt="Product Image" style="max-width: 100px; margin-top: 10px;">
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Product</button>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- Edit form -->
                    </div> <!-- end section -->
                </div>
            </div>
        </div>
    </main>
@endsection
