@extends('admin.layouts.app')
@section('title', 'Beauty Blogs')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <h4>Beauty Blogs</h4>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category }}</td>
                <td>{{ $blog->date }}</td>
                <td>
                    @if($blog->image)
                        <img src="{{ asset('storage/'.$blog->image) }}" width="60" alt="Blog Image">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
