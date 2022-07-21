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
            <div class="Description_Comment">
                概要宣伝コメント
            </div>
            <div class="Description_Title">
                動画タイトル
            </div>
            <a class="Description_Contributor">
                <img src="{{ asset('storage/img/thumbnail/K_pink.png') }}" class="Contributor_Icon">
                <span class="Description_Contributor_Name">
                    投稿者ネーム
                </span>
            </a>
        </div>
        <div class="Advertisement">
            <a class="Advertisement_nishigata" href="storage/img/advertisement/ポートフォリオ_西潟.pdf">
                <img src="{{ asset('storage/img/advertisement/カヤック.png') }}" class="Advertisement_Icon"
                     alt="面白法人カヤック_西潟ポートフォリオ">
            </a>
            <br>
            <a class="Advertisement_kudo" href="storage/img/advertisement/ポートフォリオ_工藤.pdf">
                <img src="{{ asset('storage/img/advertisement/クリプトン.png') }}" class="Advertisement_Icon"
                     alt="クリプトン・フューチャー・メディア_工藤ポートフォリオ">
            </a>
        </div>
    </div>

    <div class="PickUp">
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge1.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge2.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge3.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge4.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge5.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge6.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge7.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
        <div class="PickUp_Container">
            <img src="{{ asset('storage/img/PickUp_Thumbnail/hoge8.png') }}" class="PickUp_Container_Thumbnail">
            <div class="PickUp_Container_Title">
                ピックアップタイトル
            </div>
            <div class="PickUp_Container_Overview">
                ピックアップ概要
            </div>
            <img src="{{ asset('storage/img/thumbnail/K_white.png') }}" class="PickUp_Container_Icon" alt="">
            <span class="PickUp_Container_Name">
                    ピックアップ投稿者ネーム
                </span>
        </div>
    </div>
@endsection
