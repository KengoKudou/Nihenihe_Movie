@extends('layouts.app')
@inject("LogoNameData","App\Http\Controllers\Random\RandomLogoController")
@section('content')
    <!-- ロゴ&検索ボックス表示 -->
    <div class="HeaderContainer">
        <!-- タイトルロゴランダム表示 -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src='{{ asset($LogoNameData -> RandomLogo()) }}' width="auto" height="100"
                 alt="ランダム画像">
        </a>
        <!-- 検索ボックス表示 -->
        <div class="boxes">
            <form method="get" action="{{ route('search.tag') }}">
                @csrf
                <ul>
                    @foreach( $tags as $key => $tag )
                        <li>
                            <input type="checkbox" id="box-{{$key}}" name='tag[]' value='{{$tag->tag}}'
                                   onclick="click_cb();">
                            <label for="box-{{$key}}">{{$tag->tag}}</label>
                        </li>
                    @endforeach
                </ul>
                <input type="submit" value="検索" class="Video_Search_FollowButton">
            </form>
        </div>
        <div class="Video_Search">
            <span class="Video_Search_NumberOfVideos">総動画数　000000　でした。</span>
        </div>
    @yield('tag')
@endsection
