@extends('admin.layouts.app')

@section('title', 'Contacts')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h4 class="mb-4">Footer Content</h4>
        <a href="{{ route('admin.footer.edit') }}" class="btn btn-danger btn-sm">
            Edit
        </a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $footer->id }}</td>
                        <td>{{ $footer->description }}</td>
                        <td>{{ $footer->address }}</td>
                        <td>{{ $footer->contact }}</td>
                        <td>{{ $footer->email }}</td>
                        <td>
                            {{-- <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this message?')">
                                    Delete
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection
