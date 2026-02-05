@extends('user.layouts.app') <!-- Your master layout -->

{{-- @section('title', 'Our Services') --}}
@section('content')

<!-- Hero / Page Header Start -->
<div class="container-fluid bg-light page-header py-5 mb-5">
    <div class="container text-center py-5">
        <h1 class="display-1 animated slideInLeft">Service</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                <li class="breadcrumb-item"><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Hero / Page Header End -->

    @include('user.sections.services')      <!-- Dynamic Service section -->
    @include('user.sections.testimonial')  <!-- Dynamic Testimonial section -->
@endsection
