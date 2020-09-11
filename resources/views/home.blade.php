@extends('layout')

@section('content')
    @include('home.header')
    @include('home.who-we-are')
    @include('home.products-services')
    @include('home.partners')
    {{-- todo content to news section --}}
    {{-- @include('home.news') --}}
@endsection
