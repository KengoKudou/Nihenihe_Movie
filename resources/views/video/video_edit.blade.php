@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="Password_Edit">
            <div class="card-body-upload">
                <form action="" method="post" enctype="multipart/form-data">
                    <p>投稿動画編集</p>
                    <!-- タイトルの変更欄 -->
                    <p>タイトルの変更</p>
                    <input type="text" name="title" id="title" placeholder="動画のタイトルを入力">

                    <!-- 概要欄の変更 -->
                    <p>概要の変更</p>
                    <input type="text" name="title" id="title" placeholder="動画の概要を入力">

                    <!-- サムネイルの変更欄 -->
                    <p>サムネイル再アップロード</p>
                    <input type="file" name="post_thumbnail">

                    <!-- タグの変更欄 -->
                    <p>タグの変更欄</p>
                    【チェックボックス】

                    <!-- 表示設定の変更欄 -->
                    <p>表示設定変更欄</p>
                    【チェックボックス】

                    <input type="submit" class="Button_Upload">
                </form>
            </div>
            <div class="Edit_Video">
                <div class="Video">
                    <a href="{{url('/video')}}">
                        <video controls loop autoplay muted width="700px" height="auth">
                            <source src="{{ asset('storage/users/K.Kudou/1/movie.mp4') }}"
                                    type="video/mp4">
                        </video>
                    </a>
                </div>
            </div>
        </div>
        <div class="Page_Back">
            <button type="button" class="return" onclick="location.href='/home'">ホームへ戻る
            </button>
        </div>
    </div>
@endsection
