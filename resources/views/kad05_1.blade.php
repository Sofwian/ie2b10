{{--IE2B 10 上村詩音 2020/10/27--}}
<form action="/kad05_1" method="POST" novalidate>
    @csrf

    @extends('layouts.kadapp')
    @section('title','課題05_1')
    @section('title2','フォーム処理')
    @section('content')
    <div class = "container">
    <div class="form-group row">
        <div class="col-sm-3">メールアドレス</div>
        <div class="col-sm-9">
            <input type="email" class="form-control"name="email" placeholder="メールアドレスを入力" value = "{{old('email')}}">
            @error('email')
            <div class = "text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-3">パスワード</div>
        <div class="col-sm-9">
            <input type="password" class="form-control"name="pass" placeholder="パスワードを入力" value = "{{old('pass')}}">
            @error('pass')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm">
            <input type="submit" class="btn btn-primary"name="sub" value="送信">
        </div>
    </div>
    </div>
</form>
@endsection
