@extends('layouts.app')

@section('content')
    <div class="Top_Movie">
        <div class="Movie">
            <a href="{{url('/movie')}}">
                <video controls loop autoplay muted width="700px" height="auth">
                    <source src="{{ asset('storage/post_movies/Q2Frsr5QEp88XwLifQaJtpcCIpDD9pGwrrRucpW4.mp4') }}"
                            type="video/mp4">
                </video>
            </a>
        </div>
        <div class="Description">
            <div>
                概要宣伝コメント
            </div>
            <div>
                動画タイトル
            </div>
            <a class="Contributor">
                <img src="{{ asset('storage/img/thumbnail/K_pink.png') }}" class="Contributor_Icon">
                <span class="Contributor_Name">
                    投稿者ネーム
                </span>
            </a>
        </div>
        <div class="Advertisement">
            <a class="Advertisement_nishigata"href="storage/img/advertisement/ポートフォリオ_西潟.pdf">
                <img src="{{ asset('storage/img/advertisement/カヤック.png') }}" class="Advertisement_Icon" alt="面白法人カヤック_西潟ポートフォリオ">
            </a>
            <br>
            <a class="Advertisement_kudo"href="storage/img/advertisement/ポートフォリオ_工藤.pdf">
                <img src="{{ asset('storage/img/advertisement/クリプトン.png') }}" class="Advertisement_Icon" alt="クリプトン・フューチャー・メディア_工藤ポートフォリオ">
            </a>
        </div>
    </div>
    <div class="PickUp">
        <div class="PickUp_Container">
            <div class="PickUp_Container_Thumbnail">
            </div>
        </div>
    </div>
@endsection
