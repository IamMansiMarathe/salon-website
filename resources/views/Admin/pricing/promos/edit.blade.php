@extends('admin.layouts.app')
@section('title','Edit Promo')
@section('content')

<h2>Edit Promo</h2>
<form action="{{ route('admin.promos.update', $promo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="small_heading" class="form-label">Small Heading</label>
        <input type="text" class="form-control" name="small_heading" value="{{ old('small_heading', $promo->small_heading) }}">
    </div>
    <div class="mb-3">
        <label for="big_number" class="form-label">Big Number</label>
        <input type="text" class="form-control" name="big_number" value="{{ old('big_number', $promo->big_number) }}">
    </div>
    <div class="mb-3">
        <label for="unit" class="form-label">Unit</label>
        <input type="text" class="form-control" name="unit" value="{{ old('unit', $promo->unit) }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description">{{ old('description', $promo->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="button_text" class="form-label">Button Text</label>
        <input type="text" class="form-control" name="button_text" value="{{ old('button_text', $promo->button_text) }}">
    </div>
    <button type="submit" class="btn btn-primary">Update Promo</button>
</form>

@endsection
