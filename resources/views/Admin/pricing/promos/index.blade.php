@extends('admin.layouts.app')
@section('title','Promos')
@section('content')

<h2>Promos</h2>
<a href="{{ route('admin.promos.create') }}" class="btn btn-primary mb-3">Add Promo</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Small Heading</th>
            <th>Big Number</th>
            <th>Unit</th>
            <th>Description</th>
            <th>Button Text</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($promos as $promo)
        <tr>
            <td>{{ $promo->small_heading }}</td>
            <td>{{ $promo->big_number }}</td>
            <td>{{ $promo->unit }}</td>
            <td>{{ $promo->description }}</td>
            <td>{{ $promo->button_text }}</td>
            <td>
                <a href="{{ route('admin.promos.edit', $promo->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.promos.destroy', $promo->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this promo?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
