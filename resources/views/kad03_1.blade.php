{{--IE2B 10 上村詩音 2020/10/13--}}
@extends('layouts.kadapp')
@section('title','課題03_1')
@section('title2','Blade のテンプレートで表示する')
@section('content')
<style>
body {
    background-color: lightgreen;
    color: blue;
}
</style>

<div class = "container">
<div class = "row">
<div class = "col-sm-8">blade で表示しています。
    <span class = "badge-pill badge-danger"> new</span>
</div>
<div class = "col-sm-4">{{$message}}</div>
</div>
</div>
@endsection