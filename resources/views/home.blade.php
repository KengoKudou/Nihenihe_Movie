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
        <div class="Upload_Item">
            <div class="Profile">
                <div class="Profile_Icon">
                    <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="Profile_Icon" alt="">
                </div>
                <div class="Profile_Name">
                    名前:
                    <span>{{ Auth::user()-> name}}</span>
                </div>
                <div class="Profile_Id">
                    ID:
                    <span>{{ Auth::user()-> id}}</span>
                </div>
                <div class="Profile_Address">
                    アドレス:
                    <span>{{ Auth::user()-> email}}</span>
                </div>
                <div class="Profile_Introduction">
                    紹介文:
                </div>
            </div>
            <div class="Profile_Password">
                パスワード編集ボタン
            </div>
            <div class="MyPage_Upload_Button">
                <button type="button" class="Video_Creator_FollowButton"
                        onclick="location.href='/upload'">アップロード
                </button>
            </div>
        </div>
        <div class="Video_List_Main">
            <div class="Video_List">

                @foreach($data as $datum)
                    <div class="Video_List_Element_Container">
                        <div class="Video_List_Element_Container_Left">
                            <div class="Video_List_Element_PostingTime">
                                投稿時間:{{$datum['created_at']}}
                            </div>
                            <div style="position: relative">
                                <img src="{{ asset($datum['thumbnail_path']) }}" class="Video_List_Element_Thumbnail"
                                     alt="Thumbnail">
                                <span class="Video_List_Element_VideoTime">00:00</span>
                            </div>
                        </div>
                        <div class="Video_List_Element">
                            <div class="Video_List_Element_Title">
                                動画タイトル:{{$datum['title']}}
                            </div>
                            <div class="Video_List_Element_Overview">
                                概要欄:{{$datum['comment']}}
                            </div>
                            <div class="Video_List_Element_CommentList">
                                <div class="Video_List_Element_Comment">
                                    コメント①
                                </div>
                                <div class="Video_List_Element_Comment">
                                    コメント②
                                </div>
                            </div>
                            <div class="Video_List_Element_List">
                                <div class="Video_List_Element_Views">
                                    再生数
                                </div>
                                <div class="Video_List_Element_NumberOfComments">
                                    コメント数
                                </div>
                                <div class="Video_List_Element_NumberOfNice">
                                    いいね数
                                </div>
                                <div class="Video_List_Element_NumberOfMyLists">
                                    マイリスト数
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
