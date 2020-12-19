<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="manifest" href="{{ asset('img/manifest.json') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('judul') {{ config('app.name', 'Laravel') }} </title>    

    <!-- Javascript -->
    @yield('js')

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
    <script src="{{ asset('js/admin/modal.js') }}" defer></script>
    <script src="{{ asset('js/admin/modal_kriteria.js') }}" defer></script>
    <script src="{{ asset('js/admin/modal_penilaian.js') }}" defer></script>
    <script src="{{ asset('js/admin/modal_waspas.js') }}" defer></script>
    <script src="{{ asset('js/admin/modal_user.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/components.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/all.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navigation bar -->
<div id="app">
  <div class="main-wrapper">
    @include('layout.admin.navbar')
        @include('layout.admin.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        
                    @yield('content')    
                    </div>
                </div>
                </section>
            </div>
            <!-- Footer -->
            @include('layout.admin.footer')
        </section>
      </div>
  </div>
</div>
</body>

</html>