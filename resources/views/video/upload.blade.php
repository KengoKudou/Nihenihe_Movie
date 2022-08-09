@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-upload">
                <form action="/new_send" method="post" enctype="multipart/form-data">
                    @csrf
                    <p>動画アップロード</p>
                    <input type="file" name="post_movies" required>
                    @error('post_movies')
                    <p class="custom_alert" role="alert">
                        <strong>{{$message}}</strong>
                    </p>
                    @enderror

                    <p>サムネイルアップロード</p>
                    <input type="file" name="post_thumbnail" required>
                    @error('post_thumbnail')
                    <p class="custom_alert" role="alert">
                        <strong>{{$message}}</strong>
                    </p>
                    @enderror

                    <p>タイトル</p>
                    <label for="title">
                        <input type="text" name="title" id="title" placeholder="動画のタイトルを入力"
                               value="{{ old('title') }}"
                               required>
                    </label>
                    @error('title')
                    <p class="custom_alert" role="alert">
                        <strong>{{$message}}</strong>
                    </p>
                    @enderror

                    <p>概要欄</p>
                    <label for="Summary">
                        <input type="text" name="comment" id="comment" placeholder="概要欄" value="{{ old('comment') }}"
                               required>
                    </label>
                    @error('comment')
                    <p class="custom_alert" role="alert">
                        <strong>{{$message}}</strong>
                    </p>
                    @enderror

                    <details>
                        <summary>タグを指定(最大十個)</summary>
                        <div class="boxes">
                            <ul>
                                @foreach( $tags as $key => $tag )
                                    <li><input type="checkbox" id="box-{{$key}}" name='tag[]' value='{{$tag}}'
                                               onclick="click_cb();">
                                        <label for="box-{{$key}}">{{$tag}}</label></li>
                                @endforeach
                            </ul>
                        </div>
                    </details>
                    @error('tag')
                    <p class="custom_alert" role="alert">
                        <strong>{{$message}}</strong>
                    </p>
                    @enderror
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
