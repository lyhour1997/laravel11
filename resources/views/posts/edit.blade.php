
@extends('layouts.master')
@section('content')

<form action="{{ url('posts/update') }}" method="POST" class="container mt-5 p-4 border rounded shadow bg-white" style="max-width: 600px;">
    @csrf
    {{-- @method('PATCH') --}}

    <input type="hidden" name="id" value="{{ $edit->id }}">

    <h3 class="mb-4 text-center">Edit Post</h3>

    <!-- Title Field -->
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input 
            type="text" 
            name="title" 
            class="form-control" 
            id="title" 
            value="{{ $edit->title }}" 
            placeholder="Enter post title"
            required
        >
            
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
            placeholder="Write your post description">{{ $edit->description }}</textarea>
    </div>

    <!-- Submit Button -->
    <div class="text-end">
        <a href="{{url('/')}}" type="submit" class="btn btn-success px-4">Back</a>
        <button type="submit" class="btn btn-primary px-4">Update</button>
    </div>
</form>

@endsection

