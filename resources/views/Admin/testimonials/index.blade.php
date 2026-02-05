@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h4>Testimonials</h4>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">Add</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Profession</th>
                <th>Message</th>
                <th>Image</th>
                <th width="150">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $testimonial->name }}</td>
                <td>{{ $testimonial->profession }}</td>
                <td>{{ Str::limit($testimonial->message, 50) }}</td>
                <td>
                    @if($testimonial->image)
                        <img src="{{ asset('storage/'.$testimonial->image) }}" width="50">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.testimonials.edit',$testimonial) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.testimonials.destroy',$testimonial) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
