@extends('pages.admin._layout')

@section('title', 'داشبورد')

@section('panel')
    <div class="card">
        <div class="card-header">@yield('title')</div>
        <div class="card-body rtl">
            <p class="card-text">خوش آمدید!</p>
            <p class="card-text">از منوی اصلی می‌توانید بخش های قابل مدیریت سایت را مشاهده کنید.</p>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">آمار بازدید</div>
        <div class="card-body rtl">
            <p class="card-text">در دست ساخت!</p>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">لاگ ورود</div>
        <div class="card-body rtl">
            <p class="card-text">در دست ساخت!</p>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(document).ready(function () {
            $('aside .list-group-item-action[href="{{ route('admin.dashboard') }}"]').addClass('active');
        });
    </script>
@endsection

