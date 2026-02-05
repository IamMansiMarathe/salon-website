@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Edit About Section</h2>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $about->small_title }}">
        </div>

        <div class="mb-3">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control" value="{{ $about->subtitle }}">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5">{{ $about->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $about->phone }}">
        </div>

        <div class="mb-3">
            <label>Experience</label>
            <input type="number" name="experience" class="form-control" value="{{ $about->experience }}">
        </div>

        <div class="mb-3">
            <label>Happy Customers</label>
            <input type="number" name="happy_customers" class="form-control" value="{{ $about->happy_customers }}">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($about->image)
                <img src="{{ asset('storage/'.$about->image) }}" width="150" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update About</button>
    </form>
</div>
@endsection
