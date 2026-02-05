@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4>Team Members</h4>
    <a href="{{ route('admin.teams.create') }}" class="btn btn-primary">
        Add Member
    </a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Status</th>
            <th width="150">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>
                    <img src="{{ asset('storage/'.$team->image) }}" width="60">
                </td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->designation }}</td>
                <td>{{ $team->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.teams.edit', $team) }}"
                       class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('admin.teams.destroy', $team) }}"
                          method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                                onclick="return confirm('Delete?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

