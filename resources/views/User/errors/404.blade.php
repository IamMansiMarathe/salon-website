@extends('user.layouts.app')

@section('title', 'Page Not Found')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-1">404</h1>
    <h2>Oops! Page not found.</h2>
    <p>The page you are looking for might have been removed or is temporarily unavailable.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
</div>
@endsection
