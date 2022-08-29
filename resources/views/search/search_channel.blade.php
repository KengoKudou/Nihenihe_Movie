@extends('layouts.app')
@section('content')

    <div class="User_List">
        @foreach( $user as $datum )
            <div class="Upload_Item">
                <div class="Profile">
                    <div class="Profile_Icon">
                        <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="Profile_Icon"
                             alt="">
                    </div>
                    <a href="/home/{{$datum->name}}" class="">
                        <div class="Name">
                            名前:
                            <span>{{$datum->name}}</span>
                        </div>
                    </a>
                    <div class="">
                        動画投稿数:
                        <span>{{$datum->artwork_num}}</span>
                    </div>
                    <div class="Introduction">
                        紹介文:
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
