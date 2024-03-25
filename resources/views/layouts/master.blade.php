<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Inventory Management @yield('title', 'Dashboard') </title>
    @include('layouts.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
{{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
<body>
<div class="main-wrapper">
    @include('layouts.header')

    @include('layouts.sidebar')

    <div class="page-wrapper">
        <div class="content container-fluid">
            @yield('content')
        </div>
    </div>

</div>
    @include('layouts.script')
</body>

</html>
