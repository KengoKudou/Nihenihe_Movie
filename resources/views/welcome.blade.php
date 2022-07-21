@extends('layouts.app')

@section('content')
    <div>
        <div class="">
            <a href="{{url('/movie')}}">
                <video controls loop autoplay muted width="700px" height="auth">
                    <source src="{{ asset('storage/post_movies/A8Hx7m2aOFCG8yNuzy0k1KLznumUeSatAq1nVJ2U.mp4') }}" type="video/mp4">
                </video>
            </a>
        </div>
    </div>
@endsection
