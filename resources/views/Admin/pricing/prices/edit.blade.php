@extends('admin.layouts.app')
@section('title','Edit Price')
@section('content')

<h2>Edit Price</h2>
<form action="{{ route('admin.prices.update', $price->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="{{ old('title', $price->title) }}" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" value="{{ old('price', $price->price) }}" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        @if($price->image)
        <div class="mb-2">
            <img src="{{ asset('storage/'.$price->image) }}" width="120">
        </div>
        @endif
        <input type="file" class="form-control" name="image" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Update Price</button>
</form>

@endsection
