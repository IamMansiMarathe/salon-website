@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h4>Add Testimonial</h4>

    <form method="POST" action="{{ route('admin.testimonials.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Profession</label>
            <input name="profession" class="form-control">
        </div>

        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
