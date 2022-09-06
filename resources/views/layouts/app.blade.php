@inject("LogoNameData","App\Http\Controllers\RandomLogoController")
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Scripts -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('storage/logo/favicon.ico') }}">

    <!-- Scripts -->
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/checkbox.js') }}"></script>
    <script src="{{ asset('js/portfolio/slick.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/slide.js') }}"></script>
    <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset("css/main.css")}}" rel="stylesheet">
    <link href="{{asset("css/checkbox.css")}}" rel="stylesheet">
    <link href="{{asset("css/header.css")}}" rel="stylesheet">
    <link href="{{ asset('css/portfolio/slick-theme.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/portfolio/slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/slide.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/video-js.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/video.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
<div id="app">
    <header class="header">
        <nav>
            <div class="container">
                <div class="Container_Icon">
                    <a class="HeaderLogo" href="{{ url('/') }}">
                        <img src="{{ asset('storage/logo/niconico_logo2.png') }}" class="Logo_Header_Main" alt="logo">
                    </a>
                </div>
                <div class="Container_Tag">
                    <a href="/search/video">
                        <div class="Container_Tag_Item">
                            動画
                        </div>
                    </a>
                    <a href="/search/channel">
                        <div class="Container_Tag_Item">
                            チャンネル
                        </div>
                    </a>
                    <a href="/search/tag">
                        <div class="Container_Tag_Item">
                            タグ
                        </div>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="navbar-nav me-auto">
                    </div>
                    <!-- Right Side Of Navbar -->
                    <div class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                            @endif

                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <div class="doropdown-name">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                                       href="/home/{{ Auth::user()->name }}"
                                       role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <div style="display: flex">
                                            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}"
                                                 class="dropdown-icon" alt="">
                                            <div style="margin: auto">
                                                <span class="User_Id_Name">{{ Auth::user()->name }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="doropdown-logout">
                                    <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
