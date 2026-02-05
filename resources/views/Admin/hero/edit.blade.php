@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Edit Hero Section</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Small Title</label>
            <input type="text" name="small_title" class="form-control" value="{{ old('small_title', $hero->small_title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Main Title</label>
            <input type="text" name="main_title" class="form-control" value="{{ old('main_title', $hero->main_title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $hero->phone) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $hero->email) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Image 1</label>
            <input type="file" name="image_1" class="form-control">
            @if($hero->image_1)
                <img src="{{ asset('storage/'.$hero->image_1) }}" width="120" class="mt-2" alt="">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Image 2</label>
            <input type="file" name="image_2" class="form-control">
            @if($hero->image_2)
                <img src="{{ asset('storage/'.$hero->image_2) }}" width="120" class="mt-2" alt="">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Image 3</label>
            <input type="file" name="image_3" class="form-control">
            @if($hero->image_3)
                <img src="{{ asset('storage/'.$hero->image_3) }}" width="120" class="mt-2" alt="">
            @endif
        </div>

        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Update Hero</button>
        <a href="{{ route('admin.hero.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
