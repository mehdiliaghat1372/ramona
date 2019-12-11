@extends('pages.admin._layout')

@section('title', 'کاربران')

@section('panel')
    <div class="card">
        <div class="card-header">@yield('title')</div>
        <div class="card-body rtl">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>شناسه</td>
                        <td>نام</td>
                        <td>نام خانوادگی</td>
                        <td>نقش (ها)</td>
                        <td>تاریخ نام‌نویسی</td>
                        <td>گزینه</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>...</td>
                            <td>{{ $user->created_at }}</td>
                            <td>...</td>
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

