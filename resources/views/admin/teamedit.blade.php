@extends('admin.layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Edit form -->
                    <div class="col-md-12 my-4">
                        <h2 class="h4 mb-1">Edit Team</h2>
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

                                <form method="POST" action="{{ route('admin.team.update', $team) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $team->name) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $team->role) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image:</label>
                                        <input type="file" name="image" class="form-control-file" id="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Team</button>
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
