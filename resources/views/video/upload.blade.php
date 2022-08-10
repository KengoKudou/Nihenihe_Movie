@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-upload">
                <form action="/new_send" method="post" enctype="multipart/form-data">
                    @csrf
                    <p>動画アップロード</p>
                    <input type="file" name="post_movies">

                    <p>サムネイルアップロード</p>
                    <input type="file" name="post_thumbnail">

                    <p>タイトル</p>
                    <label for="title">
                        <input type="text" name="title" id="title" placeholder="動画のタイトルを入力">
                    </label>

                    <p>概要欄</p>
                    <label for="Summary">
                        <input type="text" name="comment" id="comment" placeholder="概要欄">
                    </label>

                    <p>
                    <details>
                        <summary>タグを指定(最大十個)</summary>
                        <div class="boxes">
                            <p>ランダムタグ</p>
                            <ul>
                                @foreach( $tags as $key => $tag )
                                    <li>
                                        <input type="checkbox" id="box-{{$key}}" name='tag[]' value='{{$tag['tag']}}'
                                               onclick="click_cb();">
                                        <label for="box-{{$key}}">{{$tag['tag']}}</label>
                                    </li>
                                @endforeach
                            </ul>
                            <p>追加したタグ</p>
                            <ul id="add_checkbox"></ul>
                            <input type="text" id="add_tag">
                            <button type="button" id="enter_btn">追加</button>
                        </div>
                    </details>
                    </p>
                    <input type="submit" class="Button_Upload">
                </form>
            </div>
            <div class="Page_Back">
                <button type="button" class="return" onclick="location.href='/home'">ホームへ戻る
                </button>
            </div>
        </div>
    </div>
@endsection
