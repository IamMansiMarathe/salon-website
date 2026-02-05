@extends('user.layouts.app') 

{{-- @section('title', 'Pricing') --}}
@section('content')
 <!-- Hero Start -->
<div class="container-fluid bg-light page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-1 animated slideInLeft">Price</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                <li class="breadcrumb-item"><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Hero End -->
    @include('user.sections.pricing') 
@endsection
