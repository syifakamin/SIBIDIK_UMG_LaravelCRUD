<div class="navbar-bg"></div>
        <nav class="main-navbar navbar" style="width: 1100px;">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
        </form>
        <form action="/logout" method="post"> @csrf <button type="submit" class="btn btn-danger navbar-btn navbar-link">Log Out</button></form>
        </nav>
