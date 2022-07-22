@extends('layouts.app')
@section('content')
    <div class="Parent_Video">
        <div class="Video_Title">
            動画タイトル
        </div>
        <div class="Video_Overview">
            動画説明欄
        </div>
        <div class="Video_GridCell">
            <div class="Video_Creator_Info">
                <img src="{{ asset('storage/img/thumbnail/K_pink.png') }}" class="Video_Creator_Thumbnail" alt="">
                <div class="Video_Creator_Name">
                    クリエイター名
                </div>
                <div class="Video_Creator_Button">
                    登校動画ボタン
                </div>
                <button type="button" onclick="alert('Follow!')" class="Video_Creator_FollowButton">フォローボタン</button>
            </div>
            <div class="Video_GridCell_MetaContainer">
                <div class="Video_UploadDateMeta">
                    登校時間
                </div>
                <div class="Video_ViewCountMeta">
                    再生数
                </div>
                <div class="Video_CommentCountMeta">
                    コメント数
                </div>
                <div class="Video_MylistCountMeta">
                    マイリスト数
                </div>
                <div class="Video_GenreMeta">
                    動画ジャンル
                </div>
                <div class="Video_GenreRankMeta">
                    過去ランキング最高順位
                </div>
                <div class="Video_MetaOverflowMenuContainer">
                    いらんかもしれん
                </div>
            </div>
        </div>
        <ul class="Video_Tag_List">
            <div class="Video_Tag_Edit">
                タグ編集
            </div>
            <div class="Video_Tag">
                タグ①
            </div>
            <div class="Video_Tag">
                タグ②
            </div>
        </ul>
        <div class="Video_Player">
            <div class="Video">
                <video controls autoplay>
                    <source src="{{ asset('storage/post_video/Q2Frsr5QEp88XwLifQaJtpcCIpDD9pGwrrRucpW4.mp4') }}"
                            type="video/mp4">
                </video>
            </div>
            <div class="Video_Comment_List">
                コメント一覧
            </div>
        </div>
    </div>
@endsection
