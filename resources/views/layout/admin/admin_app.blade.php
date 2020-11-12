<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="manifest" href="/manifest.json">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <div class="navbar-bg"></div>
        <nav class="main-navbar navbar" style="width: 1100px;">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <form action="/logout" method="post"><button type="submit" class="btn btn-danger navbar-btn navbar-link">Log Out</button></form>
        </nav>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header">
                            <h1>Dashboard</h1>
                        </div>
                    @yield('content')    
                    </div>
                </div>
                </section>
            </div>
            <!-- Footer -->
            <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; 2020 <div class="bullet"></div> Develop By <a href="https://github.com/syifakamin">Amin Syifa'</a>
                    </div>
                    <div class="footer-right">
                        1.0.0
                    </div>
                </footer>
        </section>
      </div>
  </div>
</div>
</body>

</html>