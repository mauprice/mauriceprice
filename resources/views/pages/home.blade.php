<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Maurice Price</title>
        <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
    
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset('/js/jquery-ui/jquery-ui.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="{{ asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" rel="preload" crossorigin="anonymous">
        <link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!-- Scripts -->
        <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js')}} "></script> 
        <script src="{{ asset('/js/app.js')}} "></script> 
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/jquery-3.6.0.min.js'])

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
        
           
            
          
        </div>