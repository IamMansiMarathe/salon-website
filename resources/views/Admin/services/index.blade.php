@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Services</h4>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Add Service
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-bordered table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th width="5%">#</th>
                    <th width="15%">Icon</th>
                    <th width="20%">Title</th>
                    <th>Description</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($service->icon)
                                <img src="{{ asset('storage/'.$service->icon) }}"
                                     width="60" class="img-thumbnail">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td class="fw-semibold">{{ $service->title }}</td>
                        <td>{{ Str::limit($service->description, 80) }}</td>
                        <td>
                            <a href="{{ route('admin.services.edit',$service->id) }}"
                               class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('admin.services.destroy',$service->id) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this service?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            No services added yet
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
