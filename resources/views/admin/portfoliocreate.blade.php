@extends('admin.layouts.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Portfolio</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Portfolio List</strong>
                        </div>
                    </div>
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

                                    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" name="title" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="category">Category</label>
                                            <input type="text" id="category" name="category" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="price">Price</label>
                                            <input type="text" id="price" name="price" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="images">Image:</label>
                                            <input type="file" name="images" class="form-control-file" id="images">
                                        </div>
                                        <button type="submit" class="btn btn-primary float-right">Create New Portfolio Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('admin.layouts.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Portfolio</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Portfolio List</strong>
                        </div>
                    </div>
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

                                    <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" name="title" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="category">Category</label>
                                            <input type="text" id="category" name="category" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="price">Price</label>
                                            <input type="text" id="price" name="price" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="images">Image:</label>
                                            <input type="file" name="image" class="form-control-file" id="images">
                                        </div>
                                        <button type="submit" class="btn btn-primary float-right">Create New Portfolio Item</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
