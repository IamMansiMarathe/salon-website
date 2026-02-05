@extends('admin.layouts.app')

@section('content')
<h4 class="mb-3">About Section</h4>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($about)
<table class="table table-bordered align-middle bg-white">
    <tr><th>Small Title</th><td>{{ $about->small_title }}</td></tr>
    <tr><th>Main Title</th><td>{{ $about->subtitle }}</td></tr>
    <tr><th>Description</th><td>{{ $about->description }}</td></tr>
    <tr><th>Phone</th><td>{{ $about->phone }}</td></tr>
    <tr><th>Years Experience</th><td>{{ $about->years_experience }}</td></tr>
    <tr><th>Happy Customers</th><td>{{ $about->happy_customers }}</td></tr>
    <tr>
        <th>Image</th>
        <td>
            @if($about->image)
                <img src="{{ asset('storage/'.$about->image) }}" width="120">
            @endif
        </td>
    </tr>
</table>

<a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-primary">Edit</a>

<form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" class="d-inline">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Delete</button>
</form>

@else
<a href="{{ route('admin.about.create') }}" class="btn btn-success">Add About Section</a>
@endif
@endsection
