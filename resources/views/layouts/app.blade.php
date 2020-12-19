<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="manifest" href="/manifest.json">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/jquery.nicescroll.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/moment.min.js') }}" defer></script>
    <script src="{{ asset('js/admin/stisla.js') }}" defer></script>
    <script src="{{ asset('js/admin/scripts.js') }}" defer></script>
    <script src="{{ asset('js/admin/custom.js') }}" defer></script>

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/all.css') }}" rel="stylesheet">
</head>
<body>
    <main>
            @yield('admin_sidebar')
            @yield('content')
    </main>
</body>

</html>