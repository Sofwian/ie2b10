{{--IE2B 10 上村詩音 2020/11/10--}}
@extends('layouts.kadapp')
@section('title','課題06_1')
@section('title2','ファイルのアップロード')
@section('content')
<div class = "container">
    <div>以下のアイテムをアップロードしました。</div>
    <div class = "container">
        <img src = "{{asset('storage/kad06_images/'.$image)}}">
    </div>
    <div><a href="/kad06_1">戻る</a></div>
</div>
@endsection
