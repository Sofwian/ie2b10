<html lang = "ja">
    <head>
        <title>課題02_1</title>
    </head>
    <body>
        <h1>はじめてのBlade</h1>
        <hr>
        <div>{{$message}}</div>
        @foreach ($lang as $l)
        <div>{{ $l }}</div>
        @endforeach
    </body>
</html>
