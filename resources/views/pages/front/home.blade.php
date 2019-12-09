@extends('pages.front._primary')

@section('head-links')
    @parent

    <link rel="stylesheet" href="{{ asset('css/video-box.css?v12') }}">
@endsection

@section('main')
    <div class="container video-box">
        <div class="row">
            <div class="col title"><h2>انیمیشن ها</h2></div>
        </div>
        <div class="row">
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center pt-2">
                <a href="#" class="read-more">نمایش همه انیمیشن ها</a>
            </div>
        </div>
    </div>

    <div class="container video-box mt-5">
        <div class="row">
            <div class="col title"><h2>سریال ها</h2></div>
        </div>
        <div class="row">
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
            <div class="video col-sm-6 col-md-4 col-lg-3">
                <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
                <p>فیلم پدرخوانده</p>
                <p>درام مافیایی - سال ۱۹۷۱</p>
                <a href="#"></a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center pt-2">
                <a href="#" class="read-more">نمایش همه سریال ها</a>
            </div>
        </div>
    </div>
@endsection
