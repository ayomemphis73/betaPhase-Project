<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Hospitality Manager</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">

        
    </head>
    <body>
        @include('fragments.nav')
        <main>@yield('content')</main>
    </body>
</html>