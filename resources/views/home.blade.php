@extends('layouts.app')

@section('content')
    <!-- ロゴ&検索ボックス表示 -->
    <div class="HeaderContainer">
        <!-- タイトルロゴランダム表示 -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <script type="text/javascript" src="{{asset("js/logoRandom.js")}}"></script>
        </a>
        <!-- 検索ボックス表示 -->
        <div class="Video_Search">
            <div class="Video_SearchBox_Button">
                <label>
                    <input type="text" class="Video_Search_Input">
                </label>
                <button type="button" onclick="alert('動画検索')" class="Video_Search_FollowButton">検索</button>
            </div>
            <span class="Video_Search_NumberOfVideos">総動画数　000000　でした。</span>
        </div>
    </div>
    <div class="Top_MyPage">
        <div class="Profile">
            <div class="Profile_Icon">
                <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="Profile_Icon" alt="">
            </div>
            <div class="Profile_Name">
                名前
            </div>
            <div class="Profile_Id">
                ID
            </div>
            <div class="Profile_Password">
                パスワード
            </div>
            <div class="Profile_Address">
                アドレス
            </div>
            <div class="Profile_Introduction">
                紹介文
            </div>
        </div>
        <div class="MyPage_Upload_Button">
            <button type="button" class="Video_Creator_FollowButton"
                    onclick="location.href='http://localhost:8000/upload'">アップロード
            </button>
        </div>
    </div>
@endsection
