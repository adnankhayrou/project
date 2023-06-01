<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fontawesome/css/all.min.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-97489509-8");
    </script>
    

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/photoswipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/photoswipe/default-skin/default-skin.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style.header-spaceship-variant-one.css') }}" media="(min-width: 1200px)">
    <link rel="stylesheet" href="{{ asset('style/style.mobile-header-variant-one.css') }}" media="(max-width: 1199px)">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


    @vite(['resources/sass/main.scss'])
    @yield('stylesheet')

    <title>@yield('title', 'Automoto')</title>
</head>

<body>
