@extends('admin.layouts.app')

@section('content')
<h4>Edit Team Member</h4>

<form method="POST" action="{{ route('admin.teams.update', $team) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @include('admin.team.form')

    <button class="btn btn-primary">Update</button>
</form>
@endsection
