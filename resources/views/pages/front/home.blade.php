@extends('pages.front._layout')

@section('title', 'تلویزیون اینترنتی')

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/video-box.css?v12') }}">
@endsection

@section('main')
    @foreach($categories as $category)
        <div class="container video-box mt-5">
            <div class="row">
                <div class="col title"><h2>{{ $category->title }}</h2></div>
            </div>
            <div class="row">
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
                <div class="video col-sm-6 col-md-4 col-lg-3">
                    <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
                    <p>فیلم پدرخوانده</p>
                    <p>درام مافیایی - سال ۱۹۷۱</p>
                    <a href="{{ route('videos.show') }} "></a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center pt-2">
                    <a href="{{ route('categories.show', $category) }}"
                       class="read-more">نمایش همه {{ $category->title }} ها</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
