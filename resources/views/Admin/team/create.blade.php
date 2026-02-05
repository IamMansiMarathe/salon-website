@extends('admin.layouts.app')

@section('content')
<h4>Add Team Member</h4>

<form method="POST" action="{{ route('admin.teams.store') }}" enctype="multipart/form-data">
    @csrf

    @include('admin.team.form')

    <button class="btn btn-primary">Save</button>
</form>
@endsection
