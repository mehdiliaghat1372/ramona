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
                <label class="btn {{ $reaction == 1 ? 'btn-success' : 'btn-secondary' }}" id="like">
                    <i class="fas fa-thumbs-up"></i>
                    <span id="likes">{{ $likes }}</span>
                </label>
                <label class="btn {{ $reaction == 2 ? 'btn-danger' : 'btn-secondary' }}" id="dislike">
                    <i class="fas fa-thumbs-down"></i>
                    <span id="dislikes">{{ $dislikes }}</span>
                </label>
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
                @if(count($comments))
                    @foreach($comments as $comment)
                        <div class="comment">
                            <strong>{{ $comment->name }}</strong>
                            <p>{{ $comment->content }}</p>
                            <small>{{ jDate($comment->created_at) }}</small>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-secondary rtl">هیچ دیدگاهی برای این ویدئو فرستاده نشده است.</div>
                @endif
            </div>
            <div class="col-sm-6 col-md-4">
                <form method="post" action="{{ route('videos.comments', $video->id) }}" class="rtl text-right">
                    @csrf
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

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" title="نام"
                               placeholder="نام" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control ltr" name="email" value="{{ old('email') }}"
                               title="ایمیل" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" title="پیام"
                                  placeholder="پیام">{{ old('content') }}</textarea>
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
    <script>
        $('#like, #dislike').click(function () {
            let type = $(this).attr('id') === 'like' ? 1 : 2;
            let likeBtn = $('#like');
            let dislikeBtn = $('#dislike');

            $.ajax({
                method: 'post',
                url: '{{ route('videos.reactions', $video) }}',
                data: JSON.stringify({
                    type: type,
                }),
                contentType: 'application/json',
                dataType: 'json',
            }).done(function (response) {
                $('#likes').html(response['likes']);
                $('#dislikes').html(response['dislikes']);
                likeBtn.removeClass('btn-success');
                dislikeBtn.removeClass('btn-danger');
                $('#like, #dislike').addClass('btn-secondary');
                response['reaction'] === 1 ? likeBtn.addClass('btn-success') : dislikeBtn.addClass('btn-danger');
            }).fail(function (response) {
                console.log(response);
            });
        });
    </script>
@endsection
