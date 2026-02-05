@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Gallery</h4>
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Add Image</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th width="120">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($galleries as $gallery)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                <img src="{{ asset('storage/'.$gallery->image) }}" width="100">
            </td>
            <td>
                <form method="POST" action="{{ route('admin.gallery.destroy',$gallery) }}">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
