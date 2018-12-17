<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dandoz') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .video-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px; height: 0; overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        }
    </style>
</head>
<body>
    <!-- <div id="app"> -->
    @include('inc.header');
    <!-- <main class="py-4"> -->
        @yield('content')
    <!-- </main> -->
    <!-- </div> -->
    @include('inc.footer')
    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
</body>
</html>
