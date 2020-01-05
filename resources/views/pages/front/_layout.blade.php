@extends('pages._html')

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/front.css?v2') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css?v7') }}">
@endsection

@section('content')
    @include('pages.front.__header')
    @include('pages.front.__slider')
    @yield('main')
    @include('pages.front.__footer')
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('vendor/slick-1.8.1/slick.min.js') }}"></script>
    <script src="{{ asset('js/slider.js?v2') }}"></script>
@endsection
