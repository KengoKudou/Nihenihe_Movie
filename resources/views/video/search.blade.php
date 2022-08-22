@extends('layouts.app')

@section('content')
    <div class="Advertisement_And_Video_List_Main">
        <ul class="Video_List_Main">
            @foreach( $data as $datum )

                <li class="Video_List">
                    <div class="Video_List_Element_Container">
                        <div class="Video_List_Element_Container_Left">
                            <div class="Video_List_Element_PostingTime">
                                投稿時間:{{ $datum['created_at'] }}
                            </div>
                            <div style="position: relative">
                                <a href="/video/{{ $datum['id'] }}">
                                    <img src="{{ asset($datum['thumbnail_path']) }}"
                                         class="Video_List_Element_Thumbnail"
                                         alt="thumbnail">
                                </a>
                                <span class="Video_List_Element_VideoTime">00:00</span>
                            </div>
                        </div>
                        <div class="Video_List_Element">
                            <div class="Video_List_Element_Title">
                                動画タイトル:{{ $datum['title'] }}
                            </div>
                            <div class="Video_List_Element_Overview">
                                概要欄:{{ $datum['comment'] }}
                            </div>
                            <div class="Video_List_Element_CommentList">
                                <div class="Video_List_Element_Comment">
                                    うぽつ
                                </div>
                                <div class="Video_List_Element_Comment">
                                    おつ
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
                </li>
            @endforeach
        </ul>
        <div class="imgRandom">
            <script type="text/javascript" src="{{ asset("js/imgRandom.js") }}"></script>
        </div>
    </div>
@endsection
