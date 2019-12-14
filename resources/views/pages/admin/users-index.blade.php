@extends('pages.admin._layout')

@section('title', 'کاربران')

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
            <div class="form-group">
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">افزودن کاربر</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>#</td>
                        <td>نام</td>
                        <td>نام خانوادگی</td>
                        <td>ایمیل</td>
                        <td>نقش</td>
                        <td>زمان نام‌نویسی</td>
                        <td>گزینه‌ها</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <ul class="mb-0 p-0">
                                    @foreach($user->roles as $role)
                                        <li>{{ trans('roles.' . $role->slug) }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ jDate($user->created_at) }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user) }}"
                                   class="btn btn-sm btn-info mb-1">ویرایش</a>
                                @if($user->id != auth()->id())
                                    <a href="{{ route('admin.users.delete', $user) }}"
                                       class="btn btn-sm btn-danger">پاک‌کردن</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(document).ready(function () {
            $('aside .list-group-item-action[href="{{ route('admin.users.index') }}"]').addClass('active');
        });
    </script>
@endsection

