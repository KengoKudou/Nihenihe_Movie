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
    <!-- 動画概要表示 -->
    <div class="Parent_Video">
        <!-- 動画タイトル表示 -->
        <div class="Video_Title">
            動画タイトル
        </div>
        <!-- 動画説明欄表示 -->
        <div class="Video_Overview">
            動画説明欄
        </div>
        <!-- 動画詳細表示 -->
        <div class="Video_GridCell">
            <div class="Video_Creator_Info">
                <!-- 制作者アイコン表示 -->
                <img src="{{ asset('storage/img/thumbnail/K_pink.png') }}" class="Video_Creator_Thumbnail" alt="">
                <!-- 制作者詳細表示 -->
                <div class="Video_Creator_Meta">
                    <div class="Video_Creator_Name">
                        クリエイター名
                    </div>
                    <button type="button" onclick="alert('投稿動画確認しました')" class="Video_Creator_Button">投稿動画</button>
                </div>
                <button type="button" onclick="alert('フォローしました')" class="Video_Creator_FollowButton">フォロー</button>
            </div>
            <!-- 動画詳細表示 -->
            <div class="Video_GridCell_Meta">
                <!-- 投稿時間表示 -->
                <div class="Video_UploadDateMeta">
                    投稿時間
                    <div class="Video_UploadDateMeta_Data">
                    0000/00/00 00:00
                    </div>
                </div>
                <!-- 再生数表示 -->
                <div class="Video_ViewCountMeta">
                    再生数
                    <div class="Video_ViewCountMeta_Data">
                        000
                    </div>
                </div>
                <!-- コメント数表示 -->
                <div class="Video_CommentCountMeta">
                    コメント数
                    <div class="Video_CommentCountMeta_Data">
                        000
                    </div>
                </div>
                <!-- マイリスト数表示 -->
                <div class="Video_MylistCountMeta">
                    マイリスト数
                    <div class="Video_MylistCountMeta_Data">
                        000
                    </div>
                </div>
                <!-- 動画ジャンル表示 -->
                <div class="Video_GenreMeta">
                    動画ジャンル
                    <div class="Video_GenreMeta_Data">
                        音楽・サウンド
                    </div>
                </div>
                <!-- 過去ランキング最高順位表示 -->
                <div class="Video_GenreRankMeta">
                    過去ランキング最高順位
                    <div class="Video_GenreRankMeta_Data">
                        000 位
                    </div>
                </div>
                <!-- その他表示 -->
                <div class="Video_MetaOverflowMenuContainer">
                    ・・・
                </div>
            </div>
        </div>
        <!-- タグ一覧表示 -->
        <ul class="Video_Tag_List">
            <!-- タグ表示 -->
            <div class="Video_Tag_Edit">
                タグ編集：
            </div>
            <!-- タグデータ表示 -->
            <div class="Video_Tag">
                タグ①
            </div>
            <!-- タグデータ表示 -->
            <div class="Video_Tag">
                タグ②
            </div>
        </ul>
        <!-- 動画再生 -->
        <div class="Video_Player">
            <div class="Video">
                <video controls autoplay>
                    <source src="{{ asset('storage/users/K.Kudou/1/movie.mp4') }}"
                            type="video/mp4">
                </video>
                <!-- コメント入力 -->
                <div class="Video_Comment">
                    <label>
                        <input type="text" class="Video_Comment_Input">
                    </label>
                    <button type="button" onclick="alert('コメント登録')" class="Video_Creator_FollowButton">コメント</button>
                </div>
            </div>
            <!-- コメント一覧表示 -->
            <div class="Video_Comment_List">
                コメント一覧
            </div>
        </div>
    </div>
@endsection
