@extends('layouts.app')

@section('content')
    <div class="Top_Video">
        <div class="Video">
            <a href="/video/1">
                <video controls loop autoplay muted width="700px" height="auth">
                    <source src="{{ asset('storage/users/K.Kudou/1/movie.mp4') }}"
                            type="video/mp4">
                </video>
            </a>
        </div>
        <div class="Description">
            <div class="Description_Comment">
                概要宣伝コメント
            </div>
            <div class="Description_Title">
                動画タイトル
            </div>
            <a class="Description_Contributor">
                <img src="{{ asset('storage/img/thumbnail/K_pink.png') }}" class="Contributor_Icon" alt="">
                <span class="Description_Contributor_Name">
                    投稿者ネーム
                </span>
            </a>
        </div>
        <!-- 広告部分 -->
        <div class="Advertisement">
            <!-- 西潟ポートフォリオ -->
            <a class="Advertisement_nishigata" href="/portfolio_nishigata">
                <img src="{{ asset('storage/img/advertisement/カヤック.png') }}" class="Advertisement_Icon"
                     alt="面白法人カヤック_西潟ポートフォリオ">
            </a>

            <br>
            <!-- 工藤ポートフォリオ -->
            <a class="Advertisement_kudo" href="/portfolio_kudou">
                <img src="{{ asset('storage/img/advertisement/クリプトン.png') }}" class="Advertisement_Icon"
                     alt="クリプトン・フューチャー・メディア_工藤ポートフォリオ">
            </a>
        </div>
    </div>
    <!-- ピックアップ管理 -->
    <ul class="PickUp">
        @foreach($data as $datum)
            <!-- ピックアップ -->
            <li class="PickUp_Container">
                <div style="position: relative">
                    <a href="/video/{{ $datum['id'] }}">
                        <img src="{{ asset($datum['thumbnail_path']) }}" class="PickUp_Container_Thumbnail" alt="Thumbnail">
                    </a>
                    <span class="PickUp_Container_VideoTime">00:00</span>
                </div>
                <div class="PickUp_Container_Title">
                    {{ $datum['title'] }}
                </div>
                <div class="PickUp_Container_Overview">
                    {{ $datum['comment'] }}
                </div>
                <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="icon">
                <span class="PickUp_Container_Name">
                    {{ $datum['name'] }}
                </span>
            </li>
        @endforeach
    </ul>
@endsection
