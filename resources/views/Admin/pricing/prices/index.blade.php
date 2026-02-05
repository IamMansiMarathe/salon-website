@extends('admin.layouts.app')
@section('title','Prices')
@section('content')

<h2>Prices</h2>
<a href="{{ route('admin.prices.create') }}" class="btn btn-primary mb-3">Add Price</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($prices as $price)
        <tr>
            <td>
                @if($price->image)
                    <img src="{{ asset('storage/'.$price->image) }}" width="80" alt="price">
                @endif
            </td>
            <td>{{ $price->title }}</td>
            <td>${{ $price->price }}</td>
            <td>
                <a href="{{ route('admin.prices.edit', $price->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.prices.destroy', $price->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this price?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
