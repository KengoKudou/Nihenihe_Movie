@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div>
                        <form action="/new_movies_send" method="post" enctype="multipart/form-data" accept-charset="video/*">
                            @csrf
                            <p>&nbsp;</p>
                            <p>アップロード</p>
                            <input type="file" name="post_img">
                            <p>&nbsp;</p>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
