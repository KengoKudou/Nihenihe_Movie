@extends('layouts.app')

@section('content')
    <div class="Video_List_Main">
        <div class="Video_List">

            <div class="Video_List_Element_Container">
                <div class="Video_List_Element_Container_Left">
                    <div class="Video_List_Element_PostingTime">
                        投稿時間
                    </div>
                    <div style="position: relative">
                        <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge1.png') }}"
                             class="Video_List_Element_Thumbnail"
                             alt="">
                        <span class="Video_List_Element_VideoTime">
                            00:00
                        </span>
                    </div>


                </div>
                <div class="Video_List_Element">
                    <div class="Video_List_Element_Title">
                        動画タイトル
                    </div>
                    <div class="Video_List_Element_Overview">
                        概要欄
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
        </div>
    </div>
@endsection
