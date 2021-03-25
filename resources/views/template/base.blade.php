<html>

    <head>
        <title>laravel-auth - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>

    <body>

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('public.auto.index') }}" style="color: white;">
                                    <h4>Indice</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/" style="color: white;">
                                    <h4>Home</h4>
                                </a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        @if (!Auth::check())
                            <a class="btn btn-success" href="/login">Login</a>
                        @else
                            <div class="btn btn-danger" aria-labelledby="navbarDropdown">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </header>

        <div class="container">
            @yield('content')
        </div>

    </body>

</html>
