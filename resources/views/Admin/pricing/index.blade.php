@extends('admin.layouts.app')
@section('title','Pricing Section')
@section('content')

<div class="container-fluid">
    <div class="row">

        <!-- Promo Table -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Promo Offers</span>
                    <a href="{{ route('admin.promos.create') }}" class="btn btn-primary btn-sm">Add Promo</a>
                </div>
                <div class="card-body">
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
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Prices Table -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Price List</span>
                    <a href="{{ route('admin.prices.create') }}" class="btn btn-primary btn-sm">Add Price</a>
                </div>
                <div class="card-body">
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
                                            <img src="{{ asset('storage/'.$price->image) }}" width="80" alt="Price Image">
                                        @endif
                                    </td>
                                    <td>{{ $price->title }}</td>
                                    <td>${{ $price->price }}</td>
                                    <td>
                                        <a href="{{ route('admin.prices.edit', $price->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('admin.prices.destroy', $price->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
