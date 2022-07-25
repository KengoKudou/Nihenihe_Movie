@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="/new_movies_send" method="post" enctype="multipart/form-data">
                        @csrf
                        <p>動画アップロード</p>
                        <input type="file" name="post_movies">
                        <p>タイトル</p>
                        <label for="title">
                            <input type="text" name="title" id="title" placeholder="動画のタイトルを入力">
                        </label>
                        <input type="submit">
                    </form>
                    <button type="button" class="return" onclick="location.href='http://localhost:8000/home'">ホームへ戻る</button>
                </div>
            </div>
        </div>
    </div>
@endsection
