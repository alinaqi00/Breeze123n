@extends('admin.layouts.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- Small table -->
                        
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">PRODUCT TABLE</h2>
                            
                        </div>
                        
                        
                         <!-- Button for creating a new post -->
                        
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">Create Products </a>
                                    </div>
                                    <!-- ... Other content ... -->
                                    

                                    <!-- table -->
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Stock Quantity</th>
                                                <th>Manufacturer</th>
                                                <th>Supplier</th>
                                                <th>Material</th>
                                                <th>Min Order Qty</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>{{ $product->id }}</td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->description }}</td>
                                                    <td>{{ $product->price }}</td>
                                                    <td>{{ $product->stock_quantity }}</td>
                                                    <td>{{ $product->manufacturer }}</td>
                                                    <td>{{ $product->supplier }}</td>
                                                    <td>{{ $product->material }}</td>
                                                    <td>{{ $product->minimum_order_quantity }}</td>
                                                    <td>
                                                        @if ($product->image)
                                                        <img src="{{ asset('admin-assets/' . $product->image) }}" alt="Product Image" style="max-width: 50px;">

                                                            
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td class="text-muted">{{ $product->created_at }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{ route('admin.product.edit', $product) }}">Edit</a>
                                                                <a class="dropdown-item" href="{{ route('admin.product.delete', $product) }}">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- ... Pagination ... -->
                                </div>
                            </div>
                        </div> <!-- customized table -->
                    </div> <!-- end section -->
                    <!-- ... Other content ... -->
                </div>
            </div>
        </div>
    </main>
@endsection
