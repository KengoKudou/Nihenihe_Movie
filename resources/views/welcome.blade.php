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
    <div class="Top_Video">
        <div class="Video">
            <a href="{{url('/video')}}">
                <video controls loop autoplay muted width="700px" height="auth">
                    <source src="{{ asset('storage/users/K.Kudou/1/movie.mp4') }}"
                            type="video/mp4">
                </video>
            </a>
        </div>
        <div class="Description">
            <div class="Description_Comment">
                概要宣伝コメント
            </div>
            <div class="Description_Title">
                動画タイトル
            </div>
            <a class="Description_Contributor">
                <img src="{{ asset('storage/img/thumbnail/K_pink.png') }}" class="Contributor_Icon" alt="">
                <span class="Description_Contributor_Name">
                    投稿者ネーム
                </span>
            </a>
        </div>
        <!-- 広告部分 -->
        <div class="Advertisement">
            <!-- 西潟ポートフォリオ -->
            <a class="Advertisement_nishigata" href="/portfolio_nishigata">
                <img src="{{ asset('storage/img/advertisement/カヤック.png') }}" class="Advertisement_Icon"
                     alt="面白法人カヤック_西潟ポートフォリオ">
            </a>

            <br>
            <!-- 工藤ポートフォリオ -->
            <a class="Advertisement_kudo" href="/portfolio_kudou">
                <img src="{{ asset('storage/img/advertisement/クリプトン.png') }}" class="Advertisement_Icon"
                     alt="クリプトン・フューチャー・メディア_工藤ポートフォリオ">
            </a>
        </div>
    </div>
    <!-- ピックアップ管理 -->
    <div class="PickUp">
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge1.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge2.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge3.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge4.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge5.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge6.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge7.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <!-- ピックアップ -->
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge8.png') }}" class="PickUp_Container_Thumbnail" alt="">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
    </div>
@endsection
