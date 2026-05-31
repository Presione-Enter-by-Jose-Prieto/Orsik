<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="m-0 p-0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon -->
    <link rel="icon" href="icon.ico" type="image/x-icon">
    <meta name="description" content="Orsik - Plataforma para la gestión de etapas productivas">
    <title>@yield('title', 'Orsik - Plataforma para la gestión de etapas productivas.')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 p-0 bg-white">
    @yield('content')
</body>
</html>