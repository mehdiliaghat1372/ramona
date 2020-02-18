<!doctype html>
<html lang="en">
<head>
    @section('head-meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @show
    @section('head-links')

            <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/ionicons.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/AdminLTE.css') }}">
            <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/fontiran.css') }}">
            <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/skins/skin-red-light.min.css') }}">

            <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/mine.css') }}">

            <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.4.1/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('vendor/fontawesome-5.12.0/css/all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('css/general.css?v1') }}">
            <link rel="icon" href="{{ asset('favicon.ico') }}">
            <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">
    @show
    <title>@yield('title') - {{ trans(config('app.name')) }}</title>
    @yield('head-rest')
</head>
<body>

@yield('content')

<!-- Scripts -->
@section('scripts')
    <script src="{{ asset('admin_assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Bar.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Core.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Doughnut.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Line.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.PolarArea.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/Chart.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/raphael.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/raphael.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/morris.min.js') }}"></script>

    <script src="{{ asset('admin_assets/dist/js/pages/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Radar.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/polyfill.min.js') }}"></script>
    <script type='application/javascript' src="{{ asset('admin_assets/dist/js/fast_click.js') }}"></script>
    <script src="{{ asset('auth_assets/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('admin_assets/dist/js/mine.js') }}"></script>
    <script src="{{ asset('vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/fontawesome-5.12.0/js/all.min.js') }}"></script>
    <script type='application/javascript'>
        if ('addEventListener' in document) {
            document.addEventListener('DOMContentLoaded', function () {
                FastClick.attach(document.body);
            }, false);
        }
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@show

</body>
</html>
