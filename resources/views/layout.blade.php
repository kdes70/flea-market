<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {!! style_ts('/css/app.css') !!}
    </head>
    <body id="@yield('body_id')">
        <div id="app">

            @include('layout.sidebar')
            <main>
                @yield('content')
            </main>

        </div>

       {!! script_ts('/js/app.js') !!}
    </body>
</html>
