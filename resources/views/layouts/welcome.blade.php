<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IUB Inventory Management @yield('title') </title>
    @include('layouts.css')

    <!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<body>

    @yield('content')

    @include('layouts.script')
</body>

</html>
