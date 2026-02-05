@extends('admin.layouts.app')
@section('title', 'Edit footer')
@section('content')

<h4>Edit footer</h4>
<form action="{{ route('admin.footer.update',$footer) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="5" required>{{ $footer->description }}</textarea>
    </div>
    <div class="mb-3">
        <label>Category</label>
        <input type="text" name="address" class="form-control" value="{{ $footer->address }}">
    </div>
    <div class="mb-3">
        <label>Date</label>
        <input type="text" name="contact" class="form-control" value="{{ $footer->contact }}">
    </div>
    <div class="mb-3">
        <label>Date</label>
        <input type="email" name="email" class="form-control" value="{{ $footer->email }}">
    </div>
    <button class="btn btn-primary">Update footer</button>
</form>

@endsection
