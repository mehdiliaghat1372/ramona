<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.4.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css?v6') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css?v2') }}">
    <link rel="stylesheet" href="{{ asset('css/video-box.css?v3') }}">
    <title>PhpMyTube!</title>
</head>
<body>

<header>
    <div class="container-fluid rtl">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/logo128.png') }}" alt="Logo">
                <h1>رامونا</h1>
            </div>
            <div class="col-md-6">
                <a href="#" class="btn">ورود / ثبت نام</a>
            </div>
        </div>
    </div>
</header>

@include('components.slider')

<div class="container video-box">
    <div class="row">
        <div class="col title"><h2>انیمیشن ها</h2></div>
    </div>
    <div class="row">
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
            <a href="#"></a>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
    </div>
</div>

<div class="container mt-3 video-box">
    <div class="row">
        <div class="col title"><h2>انیمیشن ها</h2></div>
    </div>
    <div class="row">
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
            <a href="#"></a>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m3.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m1.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m4.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
        <div class="col-video col-sm-6 col-md-4 col-lg-3">
            <img src="{{ asset('demo/m2.jpg') }}" class="img-fluid">
            <p>فیلم پدرخوانده</p>
            <p>درام مافیایی - سال ۱۹۷۱</p>
        </div>
    </div>
</div>

<footer class="rtl mt-5">
    <hr>
    <div class="row">
        <div class="col text-center my-3">
            <img src="{{ asset('img/logo128.png') }}" class="mb-3" alt="Logo">
            <p class="">تمامی حقوق مادی و معنوی این وبسایت ازآن PhpMyTube می‌باشد.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('vendor/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/slick-1.8.1/slick.min.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>

</body>
</html>
