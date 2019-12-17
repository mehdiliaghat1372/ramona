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
            @if($category->videos()->count() == 0)
                <div class="row">
                    <div class="col">
                        <div class="alert alert-dark" role="alert">ویدئویی در این بخش بارگذاری نشده است.</div>
                    </div>
                </div>
            @else
                <div class="row">
                    @foreach($category->videos()->orderByDesc('id')->limit(8)->get() as $video)
                        <div class="video col-sm-6 col-md-4 col-lg-3">
                            <img src="{{ $video->thumbnail  }}" alt="{{ $video->title }}" class="img-fluid">
                            <p>{{ $video->title }}</p>
                            <p>دسته: {{ $video->displayCategory() }}</p>
                            <a href="{{ route('videos.show') }} "></a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col text-center pt-2">
                        <a href="{{ route('categories.show', ['category' => $category, 'title' => $category->title]) }}"
                           class="read-more">نمایش همه ویدئو‌های دسته {{ $category->title }}</a>
                    </div>
                </div>
            @endif
        </div>
    @endforeach
@endsection
