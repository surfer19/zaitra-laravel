@extends('layout')

@section('title', 'Zaitra')
@section('seo_description', 'Space company focused on Artificial Intelligence and Earth Observation.')

@section('content')
    @include('home.header')
    @include('home.who-we-are')
    @include('home.products-services')
    @include('home.partners')
    {{-- todo content to news section --}}
    {{-- @include('home.news') --}}
@endsection
