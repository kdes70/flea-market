<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {!! style_ts('/css/app.css') !!}
</head>
<body id="@yield('body_id')">
<div id="app">
    @if(env('APP_PWA') === true)
        <app></app>
    @else
        @include('layouts.sidebar')
        @include('layouts.header')
        <main>
            @yield('content')
        </main>
    @endif
</div>
{!! script_ts('/js/app.js') !!}
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw.js').then(function (registration) {
            // Registration Success
            console.log('[serviceWorker]: registration successful with scope: ', registration.scope);
        }).catch(function (err) {
            // Registration failed :(
            console.log('[serviceWorker] registration failed', err);
        });
    }
</script>
</body>
</html>
