@extends('layouts.app')
@inject("VideoTime","App\Http\Controllers\VideoTimeController")
@section('content')
    <div class="My_List">
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
                        <button type="button" class="Video_List_Element_Container_Edit_Button"
                                onclick="location.href='/video_edit'">編集ボタン
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
