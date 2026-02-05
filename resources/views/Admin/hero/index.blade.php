@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Hero Section</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($hero)
        <table class="table table-bordered align-middle">
            <tr>
                <th width="25%">Small Title</th>
                <td>{{ $hero->small_title }}</td>
            </tr>
            <tr>
                <th>Main Title</th>
                <td>{{ $hero->main_title }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $hero->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $hero->email }}</td>
            </tr>
            <tr>
                <th>Image 1</th>
                <td>
                    @if($hero->image_1)
                        <img src="{{ asset('storage/'.$hero->image_1) }}" width="120" alt="">
                    @endif
                </td>
            </tr>
            <tr>
                <th>Image 2</th>
                <td>
                    @if($hero->image_2)
                        <img src="{{ asset('storage/'.$hero->image_2) }}" width="120" alt="">
                    @endif
                </td>
            </tr>
            <tr>
                <th>Image 3</th>
                <td>
                    @if($hero->image_3)
                        <img src="{{ asset('storage/'.$hero->image_3) }}" width="120" alt="">
                    @endif
                </td>
            </tr>
        </table>

        <a href="{{ route('admin.hero.edit', $hero->id) }}" class="btn btn-primary mt-3">
            <i class="bi bi-pencil-square"></i> Edit Hero
        </a>
    @else
        <div class="alert alert-warning">No Hero section found. Please seed the data first.</div>
    @endif
</div>
@endsection
