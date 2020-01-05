@extends('pages.admin._layout')

@section('title', 'ویرایش دسته')

@section('breadcrumb')
    <nav id="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">دسته‌بندی</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('panel')
    <div class="card">
        <form class="card-body rtl" method="post" action="{{ route('admin.categories.update', $category) }}">
            @method('put')
            @csrf
            <div class="row">
                <div class="col col-md-6">
                    <div class="form-group">
                        <label>عنوان:</label>
                        <input type="text" name="title" value="{{ $category->title }}" class="form-control" required
                               title="" placeholder="عنوان">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>توضیحات:</label>
                        <textarea name="description" class="form-control" title="" required
                                  placeholder="توضیحات">{{ $category->description }}</textarea>
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
            $('aside .list-group-item-action[href="{{ route('admin.categories.index') }}"]').addClass('active');

            $('input[name=title]').on('change keyup', function () {
                $('input[name=slug]').val($(this).val().replace(' ', '-'))
            });
        });
    </script>
@endsection

