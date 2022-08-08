@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body-upload">
                <form action="" method="" enctype="">
                    <p>パスワード再設定</p>
                    <!-- メールアドレス入力欄 -->
                    <p>メールアドレス</p>
                    <label for="Address">
                        <input type="text" name="" id="" placeholder="メールアドレスを入力">
                    </label>

                    <!-- 新しいパスワード入力欄 -->
                    <p>新しいパスワード</p>
                    <label for="New_Password">
                        <input type="text" name="" id="" placeholder="再設定用パスワードを入力">
                    </label>

                    <!-- 新しいパスワード（確認用）入力欄 -->
                    <p>新しいパスワード（確認用）</p>
                    <label for="New_Password_Confirmation">
                        <input type="text" name="" id="" placeholder="再設定用パスワードを入力（確認）">
                    </label>

                    <input type="submit" class="Button_Upload">
                </form>
            </div>
            <div class="Page_Back">
                <button type="button" class="return" onclick="location.href='/home'">
                    ホームへ戻る
                </button>
            </div>
        </div>
    </div>
@endsection
