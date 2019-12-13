@extends('pages._html')

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/admin-general.css?v4') }}">
@show

@section('content')
    <div class="container mt-5">
        <div class="row">
            <main class="col col-md-9">
                @yield('breadcrumb')

                @if($errors->any())
                    <div class="alert alert-danger rtl">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger rtl">{{ session('error') }}</div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success rtl">{{ session('success') }}</div>
                @endif

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
                        <span>دسته‌بندی‌ها</span>
                        <i class="fas fa-sitemap"></i>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                        <span>ویدئو‌ها</span>
                        <i class="fas fa-photo-video"></i>
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('auth.sign-out') }}">
                        <span>برون‌رفت</span>
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </aside>
        </div>
    </div>
@endsection
