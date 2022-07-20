@extends('layouts.app')
@section('content')
    <div class="parent">
        <div class="bigMovie">
            <video controls autoplay width="80%" height="auth">
                <source src="{{ asset('storage/post_movies/A8Hx7m2aOFCG8yNuzy0k1KLznumUeSatAq1nVJ2U.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="ad">
            <!-- 広告ここに入れようかな -->
        </div>
    </div>
@endsection
