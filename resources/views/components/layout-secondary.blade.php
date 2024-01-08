<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{asset('resources/css/app.css')}}"> --}}
</head>
    <body>
        <nav class="flex justify-between px-3">
            <div class="bg-green">
                <a href="/chime">Chime</a>
            </div>
            <div class="flex">
                <a href="">Articles</a>
            </div>
        </nav>
        {{$slot}}
    </body>
</html>
