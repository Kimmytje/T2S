<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Tab icon -->
        <link rel="icon" href="/images/logo.png">

        <!-- JavaScript and CSS -->
        <link rel="stylesheet" href="/css/master.css">
        <script src="/js/main.js" defer></script>
    
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

    
        <!-- material icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
        <title>@yield('title')</title>
    </head>

    @yield('body')
    
    
</html>