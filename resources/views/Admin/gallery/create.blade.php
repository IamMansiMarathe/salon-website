@extends('admin.layouts.app')

@section('content')
<h4>Add Gallery Image</h4>

<form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <button class="btn btn-success">Save</button>
</form>
@endsection
