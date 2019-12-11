@extends('pages._html')

@section('title', 'پدرخوانده')

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    <link rel="stylesheet" href="{{ asset('css/video.css?v4') }}">
@endsection

@section('content')
    @include('pages.front.__header')

    <main class="container">
        <div class="row">
            <div class="col title">
                <h1>@yield('title')</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <video id="player" controls preload="auto" poster="//vjs.zencdn.net/v/oceans.png">
                    <source src="{{ asset('demo/v1.mp4') }}" type="video/mp4">
                    <p>مرورگر شما نمایش ویدیو ها را مسدود کرده است.</p>
                </video>
            </div>
        </div>
    </main>

    @include('pages.front.__footer')
@endsection

@section('scripts')
    @parent
    <script defer>

    </script>
@endsection
