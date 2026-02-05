@extends('admin.layouts.app')

@section('content')
<h4>Add About Section</h4>

<form method="POST" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
@csrf

<input class="form-control mb-2" name="small_title" placeholder="Small Title">
<input class="form-control mb-2" name="subtitle" placeholder="SubTitle">
<textarea class="form-control mb-2" name="description" placeholder="Description"></textarea>
<input class="form-control mb-2" name="phone" placeholder="Phone">
<input class="form-control mb-2" name="years_experience" placeholder="Years Experience">
<input class="form-control mb-2" name="happy_customers" placeholder="Happy Customers">
<input type="file" class="form-control mb-3" name="image">

<button class="btn btn-success">Save</button>
</form>
@endsection
