@extends('layouts.header')
@inject("VideoTime","App\Http\Controllers\Video\VideoTimeController")
@section('header')
    <div class="Top_Video">
        <div class="Video">
            <a href="/video/2">
                <section>
                    <video-js data-setup='{}' controls loop="loop">
                        <source src="" type="video/mp4">
                    </video-js>
                </section>
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
            <div class="x-mark">×</div>
            <a class="Advertisement_nishigata" href="/portfolio_nishigata">
                <img src="{{ asset('storage/img/advertisement/portfolio_nishigata_2.jpg') }}" class="Advertisement_icon"
                     alt="西潟ポートフォリオ">
            </a>


            <br>
            <!-- 工藤ポートフォリオ -->
            <div class="x-mark">×</div>
            <a class="Advertisement_kudo" href="/portfolio_kudou">
                <img src="{{ asset('storage/img/advertisement/portfolio_kudou_2.jpg') }}" class="Advertisement_icon"
                     alt="工藤ポートフォリオ">
            </a>
        </div>
    </div>
    <!-- ピックアップ管理 -->
    <ul class="PickUp">
        @foreach($data as $datum)
            <!-- ピックアップ -->
            <li class="PickUp_Container">
                <div style="position: relative">
                    <a href="/video/{{ $datum->id }}">
                        <img src="{{ asset($datum->thumbnail_path) }}" class="PickUp_Container_Thumbnail"
                             alt="Thumbnail">
                    </a>
                    <span class="PickUp_Container_VideoTime">{{ $VideoTime -> time($datum->movie_path) }}</span>
                </div>
                <a href="/video/{{ $datum->id }}" class="PickUp_Container_Title">
                    {{ $datum->title }}
                </a>
                <div class="PickUp_Container_Overview">
                    {{ $datum->comment }}
                </div>
                <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="icon">
                <a href="/home/{{ $datum->name }}" class="PickUp_Container_Title">
                    {{ $datum->name }}
                </a>
            </li>
        @endforeach
    </ul>
    <br id="end">
@endsection
