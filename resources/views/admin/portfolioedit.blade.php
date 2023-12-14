@extends('admin.layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <!-- Edit form -->
                    <div class="col-md-12 my-4">
                        <h2 class="h4 mb-1">Edit Post</h2>
                        <div class="card shadow">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.portfolio.update', $portfolio) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea class="form-control" id="content" name="content">{{ $portfolio->content }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update portfolio</button>
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
