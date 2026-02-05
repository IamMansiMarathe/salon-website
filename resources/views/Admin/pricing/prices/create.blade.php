@extends('admin.layouts.app')
@section('title', 'Add New Price')
@section('content')

<div class="container-fluid py-4">
    <h2 class="mb-4">Add New Price</h2>

    <form action="{{ route('admin.prices.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter service title" required>
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Enter price" required>
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Save Price</button>
        <a href="{{ route('admin.prices.index') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>

@endsection
