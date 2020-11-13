{{--IE2B 10 上村詩音 2020/10/13--}}
@extends('layouts.kadapp')
@section('title','課題03_3')
@section('title2',' Carbonクラス１')
@section('content')
<style>
body {
    background-color: lightgreen;
    color: blue;
}
</style>

<div class = "container">
<div class = "row">
    <div class = "col-sm-6">今日は{{$dt->isoFormat('YYYY年MM月DD日(ddd)')}}です。</div>
        <div class = "col-sm-6">現在の時刻は{{$dt->format('H時i分s秒')}}です。</div>

</div>
</div>
@endsection
