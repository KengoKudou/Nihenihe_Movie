@extends('layouts.app')
@inject("LogoNameData","App\Http\Controllers\RandomLogoController")
@section('content')
    <!-- ロゴ&検索ボックス表示 -->
    <div class="HeaderContainer">
        <!-- タイトルロゴランダム表示 -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src='{{ asset($LogoNameData -> RandomLogo()) }}' width="auto" height="100"
                 alt="ランダム画像">
        </a>
        <!-- 検索ボックス表示 -->
        <div class="Video_Search">
            <div class="Video_SearchBox_Button">
                <form method="get" action="{{ route('search.video') }}">
                    @csrf
                    <label>
                        <input type="text" name="keyword" placeholder="キーワードを入力" class="Video_Search_Input"
                               required>
                    </label>
                    <input type="submit" value="検索" class="Video_Search_FollowButton">
                </form>
            </div>
            <span class="Video_Search_NumberOfVideos">総動画数　000000　でした。</span>
        </div>
    </div>
    @yield('header')

@endsection
