@extends('user.layouts.app')

{{-- @section('title', 'Testimonial') --}}

@section('content')
{{-- Hero Section --}}
    {{-- <div class="container-fluid bg-light page-header py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-1 animated slideInLeft">Testimonial</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        About Us
                    </li>
                </ol>
            </nav>
        </div>
    </div> --}}

    <div class="container-fluid bg-light page-header py-5 mb-5">
        <div class="container text-center py-5 px-0">
            <h1 class="display-1 animated slideInLeft">Testimonial</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center animated slideInLeft mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-primary" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        About Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    @include('user.sections.testimonial')
@endsection
