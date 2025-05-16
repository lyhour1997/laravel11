
@extends('layouts.master')
@section('content')

<form action="{{ url('posts/save') }}" method="POST" class="container mt-5 p-4 border rounded shadow bg-white" style="max-width: 600px;">
    @csrf
    {{-- @method('PATCH') --}}

    <input type="hidden" name="id" >

    <h3 class="mb-4 text-center">Create Post</h3>

    <!-- Title Field -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input 
            type="text" 
            name="title" 
            class="form-control" 
            id="title" 
            required
            placeholder="Enter post title">
    </div>

    <!-- Description Field -->
    <div class="mb-4">
        <label for="description" class="form-label">Description</label>
        <textarea 
            name="description" 
            class="form-control" 
            id="description" 
            rows="5" 
            required
            placeholder="Write your post description"></textarea>
    </div>

    <!-- Submit Button -->
    <div class="text-end">
        <a href="{{url('/')}}" class="btn btn-success px-4">Back</a>
        <button type="submit" class="btn btn-primary px-4">Update</button>
    </div>
</form>

@endsection