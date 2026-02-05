@extends('admin.layouts.app')
@section('title','Add Promo')
@section('content')

<h2>Add New Promo Offer</h2>

<form action="{{ route('admin.promos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="small_heading" class="form-label">Small Heading</label>
        <input type="text" name="small_heading" id="small_heading" class="form-control" placeholder="Enter Small Heading" required>
    </div>

    <div class="mb-3">
        <label for="big_number" class="form-label">Big Number</label>
        <input type="number" name="big_number" id="big_number" class="form-control" placeholder="Enter Big Number" required>
    </div>

    <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input type="text" name="unit" id="unit" class="form-control" placeholder="Enter Unit (e.g., % , $)" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" rows="3" class="form-control" placeholder="Enter Description" required></textarea>
    </div>

    <div class="mb-3">
        <label for="button_text" class="form-label">Button Text</label>
        <input type="text" name="button_text" id="button_text" class="form-control" placeholder="Enter Button Text" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Promo</button>
</form>

@endsection
