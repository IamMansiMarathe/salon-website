@extends('admin.layouts.app')

@section('content')
<h4 class="fw-bold mb-4">Edit Service</h4>

<form action="{{ route('admin.services.update',$service->id) }}"
      method="POST" enctype="multipart/form-data"
      class="card shadow-sm p-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Service Title</label>
        <input type="text" name="title"
               value="{{ $service->title }}"
               class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" rows="4"
                  class="form-control" required>{{ $service->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Icon / Image</label>
        <input type="file" name="icon" class="form-control mb-2">

        @if($service->icon)
            <img src="{{ asset('storage/'.$service->icon) }}"
                 width="80" class="img-thumbnail">
        @endif
    </div>

    <div class="text-end">
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Back</a>
        <button class="btn btn-primary">Update</button>
    </div>
</form>
@endsection
