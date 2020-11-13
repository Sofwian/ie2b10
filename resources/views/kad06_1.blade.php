    @extends('layouts.kadapp')
    @section('title','課題06_1')
    @section('title2','ファイルのアップロード')
    @section('content')
    <div class = "container">
        <form action="/kad06_1" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-sm">
                    <p>画像ファイルをアップロードします。</p>
                    <input type="file" name="image">
                    @error('image')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                </div>
                    <input type="submit" class="btn btn-primary" name="sub" value="送信">
                </div>
            </div>
        </form>
    </div>
@endsection
