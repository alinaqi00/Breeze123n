@extends('admin.layouts.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Products</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Product List</strong>
                        </div>
                    </div> <!-- / .card -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
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

                                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="price">Price</label>
                                            <input type="text" id="price" name="price" class="form-control" value="{{ old('price') }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="stock_quantity">Stock Quantity</label>
                                            <input type="text" id="stock_quantity" name="stock_quantity" class="form-control" value="{{ old('stock_quantity') }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="manufacturer">Manufacturer</label>
                                            <input type="text" id="manufacturer" name="manufacturer" class="form-control" value="{{ old('manufacturer') }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="supplier">Supplier</label>
                                            <input type="text" id="supplier" name="supplier" class="form-control" value="{{ old('supplier') }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="material">Material</label>
                                            <input type="text" id="material" name="material" class="form-control" value="{{ old('material') }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="minimum_order_quantity">Min Order Qty</label>
                                            <input type="text" id="minimum_order_quantity" name="minimum_order_quantity" class="form-control" value="{{ old('minimum_order_quantity') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image:</label>
                                            <input type="file" name="image" class="form-control-file" id="image">
                                        </div>
                                        <button type="submit" class="btn btn-primary float-right">Create New Product</button>
                                    </form>
                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
