@extends('layout')

@section('content')
    @include('home.header')
    @include('home.who-we-are')
    @include('home.services')
    @include('home.portfolio')
    @include('home.partners')
    @include('home.about')
    {{-- todo content to news section --}}
    {{-- @include('home.news') --}}
@endsection
