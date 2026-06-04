<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="m-0 p-0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icon -->
    <link rel="icon" href="iconban4.ico" type="image/x-icon">
    <meta name="description" content="Orsik - Plataforma para la gestión de etapas productivas">
    <title>@yield('title', 'Orsik - Plataforma para la gestión de etapas productivas.')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen m-0 p-0 bg-white flex items-center justify-center text-slate-900">
    @yield('content')
    <div class="w-full max-w-md mt-auto mb-5 absolute bottom-0">
        <p class="text-sm text-neutral-500 text-center">Términos de Servicio y Política de Privacidad</p>
    </div>
</body>
</html>