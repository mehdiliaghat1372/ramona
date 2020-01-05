@extends('pages.admin._layout')

@section('title', 'دیدگاه‌ها')

@section('breadcrumb')
    <nav id="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('panel')
    <div class="card">
        <div class="card-body rtl">
            <div>
                <ul class="nav nav-pills pr-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link disabled" tabindex="-1" aria-disabled="true">نمایش:</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.comments.index') }}"
                           class="nav-link {{ $menu == 'all' ? 'active' : '' }}">همه</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.comments.index', ['is_accepted' => 0]) }}"
                           class="nav-link {{ $menu == 'acceptable' ? 'active' : '' }}">درخواست پذیرش</a>
                    </li>
                </ul>
            </div>

            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>ویدئو</td>
                        <td>نام</td>
                        <td>ایمیل</td>
                        <td>زمان</td>
                        <td>گزینه‌ها</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td><a href="{{ route('videos.show', $comment->video_id) }}"
                                   target="_blank">{{ $comment->video->title }}</a></td>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ jDate($comment->created_at) }}</td>
                            <td>
                                <div class="content d-none">{{ $comment->content }}</div>
                                <a href="#" class="show-content btn btn-sm btn-info">نمایش پیام</a>
                                @if($comment->is_accepted == false)
                                    <form class="form-inline d-inline-block" method="post"
                                          action="{{ route('admin.comments.accept', $comment) }}">
                                        @csrf
                                        @method('patch')
                                        <button type="submit" class="btn btn-sm btn-success">پذیرفتن</button>
                                    </form>
                                @endif
                                <form class="form-inline d-inline-block" method="post"
                                      action="{{ route('admin.comments.destroy', $comment) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">پاک‌کردن</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="rtl">{{ $comments->render() }}</div>
        </div>
    </div>

    <!-- Content Modal -->
    <div id="contentModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header rtl">
                    <h4 class="modal-title">پیام دیدگاه</h4>
                </div>
                <div class="modal-body">
                    <p class="content">...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(document).ready(function () {
            $('aside .list-group-item-action[href="{{ route('admin.comments.index') }}"]').addClass('active');
        });

        $('.show-content').click(function () {
            let modal = $('#contentModal');
            modal.modal('hide');
            $('#contentModal .content').html($(this).parent().find('.content').html());
            modal.modal('show');
        });
    </script>
@endsection

