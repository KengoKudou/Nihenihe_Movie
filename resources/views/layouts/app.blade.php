<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/checkbox.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset("css/main.css")}}" rel="stylesheet">
    <link href="{{asset("css/checkbox.css")}}" rel="stylesheet">


</head>
<body>
<div id="app">
    <header class="header">
        <nav>
            <div class="container">
                <div class="Container_Icon">
                    <a class="HeaderLogo" href="{{ url('/') }}">
                        <img src="storage/logo/niconico_logo2.png" class="Logo_Header_Main">
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
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('home')}}"
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

        <!-- ロゴ&検索ボックス表示 -->
        <div class="HeaderContainer">
            <!-- タイトルロゴランダム表示 -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <script type="text/javascript" src="{{ asset("js/logoRandom.js") }}"></script>
            </a>
            <!-- 検索ボックス表示 -->
            <div class="Video_Search">
                <div class="Video_SearchBox_Button">
                    <form method="get" action="{{ route('test.index') }}">
                        <input type="text" name="keyword" placeholder="キーワードを入力" class="Video_Search_Input">
                        <input type="submit" value="検索" class="Video_Search_FollowButton">
                    </form>
                </div>
                <span class="Video_Search_NumberOfVideos">総動画数　000000　でした。</span>
            </div>
        </div>

        @yield('content')
    </main>
</div>
</body>
</html>
