@extends('admin.layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Teams</h2>
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Team List</strong>
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

                                <form action="{{ route('admin.client.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" name="image" class="form-control-file" id="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Create New client</button>
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
