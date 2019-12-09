@extends('pages._html')

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/front-primary.css?v1') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick-1.8.1/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css?v7') }}">
@show

@section('content')
    <header>
        <div class="container-fluid rtl">
            <div class="row">
                <div class="col-md-6">
                    <a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
                    <div class="categories">
                        <span>دسته بندی</span>
                        <i class="fas fa-sort-down"></i>
                        <ul>
                            <li><a href="#">انیمیشن</a></li>
                            <li><a href="#">سریال</a></li>
                            <li><a href="#">کمدی</a></li>
                            <li><a href="#">اکشن</a></li>
                            <li><a href="#">درام</a></li>
                            <li><a href="#">پورن</a></li>
                            <li><a href="#">ترسناک</a></li>
                            <li><a href="#">عاشقانه</a></li>
                            <li><a href="#">هندی</a></li>
                            <li><a href="#">تخیلی</a></li>
                            <li><a href="#">تخمی</a></li>
                            <li><a href="#">فانتزی</a></li>
                            <li><a href="#">جنایی</a></li>
                            <li><a href="#">ترسناک</a></li>
                            <li><a href="#">درام</a></li>
                            <li><a href="#">ترسناک</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#" class="sign">
                        <i class="fas fa-user"></i>
                        <span>ورود کاربران</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    @include('pages.front.__slider')

    @yield('main')

    <footer class="rtl mt-5">
        <div class="row">
            <div class="col text-center">
                <img src="{{ asset('img/logo.png') }}" class="mb-3" alt="Logo">
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
                <p>تمامی حقوق مادی و معنوی این وبسایت ازآن {{ trans(config('app.name')) }} می‌باشد.</p>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('vendor/slick-1.8.1/slick.min.js') }}"></script>
    <script src="{{ asset('js/slider.js?v2') }}"></script>
@show
