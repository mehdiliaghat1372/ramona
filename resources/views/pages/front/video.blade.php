@extends('pages._html')

@section('title', 'پدرخوانده')

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    <link rel="stylesheet" href="{{ asset('css/video.css?v=8') }}">
    <link rel="stylesheet" href="{{ asset('css/comments.css?v=2') }}">
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
                <video id="player" controls preload="auto" poster="{{ $video->thumbnail }}">
                    <source src="{{ $video->url }}" type="video/mp4">
                    <p>مرورگر شما نمایش ویدیو ها را مسدود کرده است.</p>
                </video>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-3 text-center overflow-auto">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option1" checked>
                        <span><i class="fas fa-thumbs-up"></i> 45</span>
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3">
                        <span><i class="fas fa-thumbs-down"></i> 234</span>
                    </label>
                </div>
            </div>
            <div class="col-md-9">
                <div class="bg-light p-2 rounded">{{ $video->content }}</div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h2>دیدگاه‌ها</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-6 col-md-8 mb-4">
                <div class="comment">
                    <strong>میلاد رحیمی</strong>
                    <p>به به چه فیلم کسشری</p>
                    <small>11:45 @ 2/4/1395</small>
                </div>
                <div class="comment">
                    <strong>میلاد رحیمی</strong>
                    <p>به به چه فیلم کسشری</p>
                    <small>11:45 @ 2/4/1395</small>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <form method="post" class="rtl text-right">
                    <div class="alert alert-danger">ریدی</div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" title="نام" placeholder="نام" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control ltr" name="email" title="ایمیل" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" title="پیام" placeholder="پیام"></textarea>
                    </div>
                    <div class="form-group">
                        @csrf
                        <input type="submit" class="btn btn-purple" value="فرستادن">
                    </div>
                </form>
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
