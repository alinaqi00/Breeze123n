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
                                    <!-- ... Other content ... -->

                                    <!-- table -->
                                    <table class="table table-bordered table-hover">
                                        <div class="mb-3">
                                            <a href="{{ route('admin.team.create') }}" class="btn btn-primary">Create Team </a>
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($teams as $team)
                                                <tr>
                                                    <td>{{ $team->id }}</td>
                                                    <td>{{ $team->name }}</td>
                                                    <td>{{ $team->role }}</td>
                                                    <td>
                                                        @if ($team->image)
                                                            <img src="{{ asset('admin-assets/' . $team->image) }}" alt="Team Image" style="max-width: 50px;">
                                                        @else
                                                            No Image
                                                        @endif
                                                    </td>
                                                    <td class="text-muted">{{ $team->created_at }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="{{ route('admin.team.edit', $team) }}">Edit</a>
                                                                <a class="dropdown-item" href="{{ route('admin.team.delete', $team) }}">Delete</a>
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
