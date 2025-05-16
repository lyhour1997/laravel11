

@extends('layouts.master')
@section('content')

<div class="container my-5 p-0">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Posts</h2>
        <a href="{{ url('posts/create') }}" class="btn btn-success btn-sm">Create Post</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered border-primary align-middle ">
            <thead class="table-primary">
                <tr>
                    <th class="fs-5">#</th>
                    <th class="fs-5">Title</th>
                    <th class="fs-5">Description</th>
                    <th class="fs-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->description }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $p->id) }}" class="btn btn-sm btn-primary me-1">
                                Edit
                            </a>
                            <a href="{{ route('posts.delete', $p->id) }}" onclick="return confirm('Are you sure?')"
                                    class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection