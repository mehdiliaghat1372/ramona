@extends('pages.front._layout')

@section('title', $title)

@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('css/video-box.css?v19') }}">
@endsection

@section('main')
    <div class="container video-box">
        <div class="row">
            <div class="col title"><h2>{{ $title }}</h2></div>
        </div>
        <div class="row">
            @if(count($videos) == 0)
                <div class="col">
                    <div class="alert alert-dark" role="alert">ویدئویی در این بخش بارگذاری نشده است.</div>
                </div>
            @else
                @foreach($videos as $video)
                    <div class="video col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ $video->thumbnail  }}" alt="{{ $video->title }}" class="img-fluid">
                        <p>{{ $video->title }}</p>
                        <p>دسته: {{ $video->displayCategory() }}</p>
                        <a href="{{ route('videos.show', $video) }} "></a>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="row">
            <nav class="col text-center pt-2">{{ $videos->render() }}</nav>
        </div>
    </div>
@endsection
