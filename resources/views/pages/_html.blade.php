<!doctype html>
<html lang="en">
<head>
    @section('head-meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @show
    @section('head-links')
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.4.1/css/bootstrap.min.css') }}">
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
    <script src="{{ asset('vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/a2d6e8a0a4.js" crossorigin="anonymous"></script>
@show

</body>
</html>
