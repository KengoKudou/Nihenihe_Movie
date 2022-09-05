@extends('layouts.header')
@section('header')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-upload">
                <form action="/intro_send" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        ID:{{ Auth::user()->id }}
                    </div>
                    <div>
                        <label>
                            名前
                            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" required>
                        </label>
                    </div>
                    <div>
                        <label>
                            自己紹介文
                            <input type="text" name="comment" id="comment" value="{{ Auth::user()->comment }}">
                        </label>
                    </div>
                    <input type="submit" value="更新">
                </form>
            </div>
            <div class="Page_Back">
                <button type="button" class="return" onclick="location.href='/home/ {{ Auth::user()->name }}'">
                    ホームへ戻る
                </button>
            </div>
        </div>
    </div>
@endsection
