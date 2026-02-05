@extends('admin.layouts.app')
@section('title', 'Add Blog')
@section('content')

<h4>Add New Blog</h4>
<form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
        <label>Category</label>
        <input type="text" name="category" class="form-control">
    </div>
    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="date" class="form-control">
    </div>
    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button class="btn btn-primary">Add Blog</button>
</form>

@endsection
