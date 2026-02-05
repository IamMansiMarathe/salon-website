@extends('admin.layouts.app')
@section('title', 'Edit Blog')
@section('content')

<h4>Edit Blog</h4>
<form action="{{ route('admin.blogs.update',$blog) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="5" required>{{ $blog->description }}</textarea>
    </div>
    <div class="mb-3">
        <label>Category</label>
        <input type="text" name="category" class="form-control" value="{{ $blog->category }}">
    </div>
    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="date" class="form-control" value="{{ $blog->date }}">
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        @if($blog->image)
            <img src="{{ asset('storage/'.$blog->image) }}" width="100" class="mt-2" alt="Blog Image">
        @endif
    </div>
    <button class="btn btn-primary">Update Blog</button>
</form>

@endsection
