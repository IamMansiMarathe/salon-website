@extends('admin.layouts.app')

@section('title', 'Contacts')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded p-4">
        <h4 class="mb-4">Contact Messages</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this message?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No contact messages found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
