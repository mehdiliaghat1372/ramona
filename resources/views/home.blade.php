<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.4.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css?v11') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css?v6') }}">
    <link rel="stylesheet" href="{{ asset('css/video-box.css?v8') }}">
    <link rel="icon" href="{{ asset('img/logo150.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo150.png') }}">
    <title>تلویزیون اینترنتی رامونا</title>
</head>
<body>

<header>
    <div class="container-fluid rtl">
        <div class="row">
            <div class="col-md-6">
                <a href="/"><img src="{{ asset('img/logo150.png') }}" alt="Logo"></a>
                <h1><a href="/">تلویزیون اینترنتی رامونا</a></h1>
            </div>
            <div class="col-md-6">
                <a href="#" class="sign">
                    <i class="fas fa-user"></i>
                    <span>ورود / ثبت نام</span>
                </a>
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

<footer class="rtl mt-5">
    <hr>
    <div class="row">
        <div class="col text-center">
            <img src="{{ asset('img/logo150.png') }}" class="mb-3" alt="Logo">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <p>
                <a href="#">خانه</a> -
                <a href="#">ورود کاربران</a> -
                <a href="#">نام نویسی</a> -
                <a href="#">درباره ما</a> -
                <a href="#">ارتباط با ما</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <p>تمامی حقوق مادی و معنوی این وبسایت ازآن تلویزیون اینترنتی رامونا می‌باشد.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('vendor/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/slick-1.8.1/slick.min.js') }}"></script>
<script src="https://kit.fontawesome.com/a2d6e8a0a4.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/slider.js?v2') }}"></script>

</body>
</html>
