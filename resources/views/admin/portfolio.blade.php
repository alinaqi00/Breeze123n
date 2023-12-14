@extends('admin.layouts.app')

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <!-- Small table -->
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">Customize table rendering</h2>
                            <p class="mb-3">Additional table rendering with vertical border, rich content formatting for cell</p>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="toolbar">
                                        <form class="form">
                                            <div class="form-row">
                                                <div class="form-group col-auto mr-auto">
                                                    <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                                                        <option value="">...</option>
                                                        <option value="1">12</option>
                                                        <option value="2" selected>32</option>
                                                        <option value="3">64</option>
                                                        <option value="3">128</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-auto">
                                                    <label for="search" class="sr-only">Search</label>
                                                    <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Button for creating a new portfolio item -->
                                    <div class="mb-3">
                                        <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Create New Portfolio Item</a>
                                    </div>
                                    <!-- table -->
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Images</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($portfolios as $portfolio)
                                                <tr>
                                                    <td>{{ $portfolio->id }}</td>
                                                    <td>{{ $portfolio->title }}</td>
                                                    <td>{{ \Illuminate\Support\Str::limit($portfolio->description, 50) }}</td>
                                                   
                                                    <td>
                                                        @if ($portfolio->images)
                                                            
                                                                <img src="{{ asset('admin-assets/'.$portfolio->images) }}" alt="Portfolio Image" style="max-width: 50px; margin-right: 5px;">
                                                            
                                                        @else
                                                            No Images
                                                        @endif
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td>{{ $portfolio->category }}</td>
                                                    <td>{{ $portfolio->price }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{ route('admin.portfolio.edit', $portfolio) }}">Edit</a>
                                                                <a class="dropdown-item" href="{{ route('admin.portfolio.delete', $portfolio) }}">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <nav aria-label="Table Paging" class="mb-0 text-muted">
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> <!-- customized table -->
                    </div> <!-- end section -->
                    <div class="row">
                        <!-- Striped rows -->
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
