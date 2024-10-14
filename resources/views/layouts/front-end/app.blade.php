<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ config('app.name', 'E-Portfolio') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('layouts.front-end.partials._links')
</head>

<body class="index-page">

    @include('layouts.front-end.partials._header')

    <main class="main">

        @yield('content')

    </main>

    @include('layouts.front-end.partials._footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div class="line"></div>
    </div>

    @include('layouts.front-end.partials._script')

</body>

</html>
