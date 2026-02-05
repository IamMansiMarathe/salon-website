@extends('user.layouts.app')

@section('title', 'Home')

@section('content')
    @include('user.sections.hero')
    @include('user.sections.about')
    @include('user.sections.services')
    @include('user.sections.pricing')
    @include('user.sections.gallery')
    @include('user.sections.team')
    @include('user.sections.testimonial')
    @include('user.sections.blog')
    
@endsection
{{-- @include('user.sections.footer') 
    @include('user.sections.copyright')  --}}
