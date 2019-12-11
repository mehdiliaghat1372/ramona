@extends('pages._html')

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/admin-general.css?v2') }}">
@show

@section('content')
    <div class="container mt-5">
        <div class="row">
            <main class="col col-md-9">
                @yield('panel')
            </main>

            <aside class="col col-md-3">
                <div>
                    <a href="/">
                        <img src="{{ asset('img/logo-big.png') }}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="list-group">
                    <a class="list-group-item list-group-item-action" href="{{ route('admin.dashboard') }}">
                        <span>داشبورد</span>
                        <i class="fas fa-tachometer-alt"></i>
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('admin.users.index') }}">
                        <span>کاربران</span>
                        <i class="fas fa-users"></i>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        <span>دسته‌بندی ها</span>
                        <i class="fas fa-sitemap"></i>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        <span>ویدئو ها</span>
                        <i class="fas fa-photo-video"></i>
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('auth.sign-out') }}">
                        <span>خروج</span>
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </aside>
        </div>
    </div>
@endsection
