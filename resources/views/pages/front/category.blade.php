@extends('pages.front._layout')

@section('title', 'انیمیشن ها')

@section('head-links')
    @parent

    <link rel="stylesheet" href="{{ asset('css/video-box.css?v19') }}">
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
            <nav class="col text-center pt-2">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
