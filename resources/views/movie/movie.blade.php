@extends('layouts.app')
@section('content')
    <div class="Parent_Movie">
        <div class="Movie_Title">
            動画タイトル
        </div>
        <div class="Movie_Overview">
            動画説明欄
        </div>
        <div class="Movie">
            <video controls autoplay width="80%" height="auth">
                <source src="{{ asset('storage/post_movies/Q2Frsr5QEp88XwLifQaJtpcCIpDD9pGwrrRucpW4.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="ad">
            <!-- 広告ここに入れようかな -->
        </div>
    </div>
@endsection
