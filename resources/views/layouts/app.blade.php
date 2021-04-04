<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet" href=""> -->
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6"> 
            <ul class="flex items-center">
                <li><a class="p-3" href="">Home</a></li>
                <li><a class="p-3" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a class="p-3" href="">Posts</a></li>
            </ul>

            <ul class="flex items-center">
                <!-- <li><a class="p-3" href="">Test</a></li> -->

                @auth
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form> 
                @endauth
                
                @guest
                    <li><a class="p-3" href="{{ route('login') }}">Login</a></li>
                    <li><a class="p-3" href="{{ route('register') }}">Register</a></li>
                @endguest
            </ul>
        </nav> 

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
        @yield('content')
        
    </body>
</html>