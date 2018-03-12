<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="token" id="token" content="{{ auth()->check() ? auth()->user()->api_token : null }}">

    <title>Laravel</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="root"></div>
    <script src="{{asset('js/app.js')}}" ></script>
</body>
</html>


{{--<div class="flex-center position-ref full-height">--}}
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
            {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}
                {{--<a href="{{ route('register') }}">Register</a>--}}
                {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}

    {{--<div class="content">--}}
        {{--<div class="title m-b-md">--}}
            {{--Laravel--}}
        {{--</div>--}}

        {{--<div class="links">--}}
            {{--<a href="https://laravel.com/docs">Documentation</a>--}}
            {{--<a href="https://laracasts.com">Laracasts</a>--}}
            {{--<a href="https://laravel-news.com">News</a>--}}
            {{--<a href="https://forge.laravel.com">Forge</a>--}}
            {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}