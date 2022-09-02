@extends('layouts.header')
@section('header')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-upload">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        ID:{{ Auth::user()->id }}
                    </div>
                    <div>
                        <label>
                            名前
                            <input type="text" name="name" value="{{ Auth::user()->name }}">
                        </label>
                    </div>
                    <div>
                        <label>
                            メール
                            <input type="text" name="email" value="{{ Auth::user()->email }}">
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
