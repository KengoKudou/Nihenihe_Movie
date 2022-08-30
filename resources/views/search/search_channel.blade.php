@extends('layouts.app')
@inject("VideoTime","App\Http\Controllers\VideoTimeController")
@section('content')

    <div class="User_List">
        @foreach( $user as $datum )
            <div class="">
                <div class="">
                    <div class="Profile_Icon">
                        <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="Profile_Icon"
                             alt="">
                    </div>
                    <a href="/home/{{$datum->name}}" class="">
                        <div class="">
                            名前:
                            <span>{{$datum->name}}</span>
                        </div>
                    </a>
                    <div class="">
                        動画投稿数:
                        <span>{{$datum->artwork_num}}</span>
                    </div>
                    <div class="">
                        紹介文:
                    </div>
                    @foreach($datum->artwork as $video)
                        <li class="Video_List_Element_Container">
                            <div class="Video_List_Element_Container_Left">
                                <div class="Video_List_Element_PostingTime">
                                    投稿時間:{{ $video->created_at }}
                                </div>
                                <div style="position: relative">
                                    <a href="/video/{{ $video->id }}">
                                        <img src="{{ asset($video->thumbnail_path) }}"
                                             class="Video_List_Element_Thumbnail" alt="Thumbnail">
                                    </a>
                                    <span
                                        class="Video_List_Element_VideoTime">{{ $VideoTime -> time($video->movie_path) }}</span>
                                </div>
                            </div>
                            <div class="Video_List_Element">
                                <a href="/video/{{ $video->id }}" class="Video_List_Element_Title">
                                    {{ $video->title }}
                                </a>
                                <div class="Video_List_Element_Overview">
                                    {{ $video->comment }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
