@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div>
                    <form action="/new_movies_send" method="post" enctype="multipart/form-data">
                        @csrf
                        <p>&nbsp;</p>
                        <p>動画アップロード</p>
                        <input type="file" name="post_movies">
                        <p>タイトル</p>
                        <label>
                            <input type="text" name="title" placeholder="動画のタイトルを入力">
                        </label>
                        <p>&nbsp;</p>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
