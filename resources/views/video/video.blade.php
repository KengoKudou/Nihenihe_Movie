@extends('layouts.header')

@section('title')
    {{ $data->title }}
@endsection

@section('header')

    <!-- 動画概要表示 -->
    <div class="Parent_Video">
        <!-- 動画タイトル表示 -->
        <div class="Video_Title">
            {{ $data->title }}
        </div>
        <!-- 動画説明欄表示 -->
        <div class="Video_Overview">
            {{ $data->comment }}
        </div>
        <!-- 動画詳細表示 -->
        <div class="Video_GridCell">
            <div class="Video_Creator_Info">
                <!-- 制作者アイコン表示 -->
                <img src="{{ asset('storage/img/thumbnail/K_pink.png') }}" class="Video_Creator_Thumbnail" alt="">
                <!-- 制作者詳細表示 -->
                <div class="Video_Creator_Meta">
                    <div class="Video_Creator_Name">
                        投稿者名：{{ $data->name }}
                    </div>
                    <button type="button" onclick="alert('投稿動画確認しました')" class="Video_Creator_Button">投稿動画
                    </button>
                </div>
                <button type="button" onclick="alert('フォローしました')" class="Video_Creator_FollowButton">フォロー</button>
            </div>
            <!-- 動画詳細表示 -->
            <div class="Video_GridCell_Meta">
                <!-- 投稿時間表示 -->
                <div class="Video_UploadDateMeta">
                    投稿時間
                    <div class="Video_UploadDateMeta_Data">
                        {{ $data->created_at }}
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
                タグ：
            </div>
            <!-- タグデータ表示 -->
            <form method="get" action="{{ route('search.tag') }}">
                @foreach($tags as $tag)
                    <div class="Video_Tag">
                        <input type="submit" name="tag" value="{{$tag}}">
                    </div>
                @endforeach
            </form>
        </ul>
        <!-- 動画再生 -->
        <div class="Video_Player">
            <div class="Video">
                <section>
                    <video-js data-setup='{}' controls loop="loop">
                        <source src="../{{ $data->movie_path }}" type="video/mp4">
                    </video-js>
                </section>
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
                ～コメント一覧～
                <div class="Video_Comment_List_Item">
                    <div class="Video_Comment_List_Item_Comment">
                        コメント
                    </div>
                    <div class="Video_Comment_List_Item_PlayTime">
                        再生時間
                    </div>
                    <div class="Video_Comment_List_Item_WritingTime">
                        書き込み時間
                    </div>
                    <div class="Video_Comment_List_Item_CommentNumber">
                        コメ番
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
