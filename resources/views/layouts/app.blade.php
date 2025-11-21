<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    
    <title>SkyDri</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    {{-- VITE: CSS Principal --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- CORREÇÃO CRÍTICA: O CSS específico das páginas deve entrar aqui, no HEAD --}}
    @stack('styles')
</head>

<body>
    <div class="wrap">
        @include('layouts.header')
    </div>

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    {{-- O JavaScript continua aqui em baixo, isto está correto --}}
    @stack('scripts')
</body>

</html>