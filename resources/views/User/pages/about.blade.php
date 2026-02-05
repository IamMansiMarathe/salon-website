@extends('user.layouts.app')

@section('title', 'About Us')

@section('content')

{{-- Hero Section --}}
    <div class="container-fluid bg-light page-header py-5 mb-5">
        <div class="container text-center py-5">
            <h1 class="display-1 animated slideInLeft">About Us</h1>
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
    
    <!-- Include your About section -->
    @include('user.sections.about')  <!-- This is your dynamic section blade -->

    <!-- Include Team if needed -->
    @include('user.sections.team')
  
@endsection
