@section('title', 'Home')
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand me-auto">
            <img src="{{ asset('logo.png') }}" style="height: 50px; width: 50px;">
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <img src="{{ asset('logo.png') }}" style="height: 50px; width: 50px;">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('animal') ? 'active' : '' }} mx-lg-2" href="/animal"><b>Animal</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }} mx-lg-2" href="/about"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }} mx-lg-2" href="/contact"><b>Contact</b></a>
                    </li>
                </ul>
            </div>
        </div>
        <span class="dark-mode-toggle">🌙</span>
        <span style="margin-right: 20px;"><b>{{auth()->user()->name}}</b></span>

        <form action="/logout"  method="post" class="logout">
            @csrf
              <button type="submit" class="btn btn-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </button>
            </form>


        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
