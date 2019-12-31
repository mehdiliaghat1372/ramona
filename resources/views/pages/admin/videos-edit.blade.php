@extends('pages.admin._layout')

@section('title', 'ویرایش ویدئو')

@section('breadcrumb')
    <nav id="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.videos.index') }}">ویدئو‌ها</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('panel')
    <div class="card">
        <form class="card-body rtl" method="post" action="{{ route('admin.videos.update', $video) }}">
            @csrf
            @method('put')
            <div class="row">
                <div class="col col-md-6">
                    <div class="form-group">
                        <label>عنوان:</label>
                        <input type="text" name="title" class="form-control" title="عنوان" required
                               placeholder="عنوان" value="{{ $video->title }}">
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="form-group">
                        <label>دسته:</label>
                        <select name="category" class="form-control" title="دسته">
                            @foreach($categories as $category)
                                <option
                                    @if(count($video->categories) && $video->categories[0]->id == $category->id)
                                    {{ 'selected' }}
                                    @endif
                                    value="{{ $category->id }}">
                                    {{ $category->title }}
                                </option>
                            @endforeach
                            <option value="" selected>بدون دسته</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>محتوا:</label>
                        <textarea class="form-control rtl" name="content" placeholder="محتوا" style="height: 150px;"
                                  title="محتوا" required>{{ $video->content }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>آدرس فایل ویدئویی:</label>
                        <input type="url" name="url" class="form-control ltr" title="آدرس فایل ویدیویی"
                               placeholder="آدرس فایل ویدیویی" required value="{{ $video->url }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>آدرس فایل بندانگشتی:</label>
                        <input type="url" name="thumbnail" class="form-control ltr" title="آدرس فایل بندانگشتی"
                               placeholder="آدرس فایل بندانگشتی" required value="{{ $video->thumbnail }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="بروزرسانی">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(document).ready(function () {
            $('aside .list-group-item-action[href="{{ route('admin.videos.index') }}"]').addClass('active');
        });
    </script>
@endsection

