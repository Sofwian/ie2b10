{{--IE2B 10 上村詩音 2020/10/20--}}
@extends('layouts.kadapp')
@section('title','課題04_1')
@section('title2','Calendar')
@section('content')
<div class = "container">
        <h1><div class = "col-sm text-center text-primary">{{$dt->isoFormat('YYYY年MM月DD日(ddd)')}}</div></h1>
        <div class = "col-sm-4">
            <a class = "btn btn-primary" role = "button" href = "/kad04_1/{{$dt -> copy() -> subMonth() -> toDateString()}}">前月</a>
            <a class = "btn btn-primary" role = "button" href = "/kad04_1/{{$dt -> copy() -> addMonth() -> toDateString()}}">次月</a>
        </div>
    <table class="table table-bordered">
        <thead class = "table-primary">
            <tr>
                <td class = "text-center">SUN</td>
                <td class = "text-center">MON</td>
                <td class = "text-center">TUE</td>
                <td class = "text-center">WED</td>
                <td class = "text-center">THU</td>
                <td class = "text-center">FRY</td>
                <td class = "text-center">SAT</td>
            </tr>
        </thead>
        <tbody>
            @foreach($cal as $row)
            <tr>
                @foreach($row as $col)
                    <td>{{$col}}</td>
                    @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
