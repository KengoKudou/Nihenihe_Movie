@extends('layouts.header')
@inject("VideoTime","App\Http\Controllers\VideoTimeController")
@section('header')
    <div class="My_List">
        <div class="Video_List_Main">
            <div class="Video_List">
                @foreach( $data as $datum )
                    <li class="Video_List_Element_Container">
                        <div class="Video_List_Element_Container_Left">
                            <div class="Video_List_Element_PostingTime">
                                投稿時間:{{ $datum->created_at }}
                            </div>
                            <div style="position: relative">
                                <a href="/video/{{ $datum->id }}">
                                    <img src="{{ asset($datum->thumbnail_path) }}"
                                         class="Video_List_Element_Thumbnail" alt="Thumbnail">
                                </a>
                                <span
                                    class="Video_List_Element_VideoTime">{{ $VideoTime -> time($datum->movie_path) }}</span>
                            </div>
                        </div>
                        <div class="Video_List_Element">
                            <a href="/video/{{ $datum->id }}" class="Video_List_Element_Title">
                                {{ $datum->title }}
                            </a>
                            <div class="Video_List_Element_Overview">
                                {{ $datum->comment }}
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
