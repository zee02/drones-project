<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>SkyDry</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- AQUI É O CÓDIGO DO FAVICON --}}
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    {{-- Para browsers modernos (PNG) --}}
    <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    {{-- MODERNIZR (ASSET ESTÁTICO) --}}
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

    {{-- VITE: Carrega todo o CSS e JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="wrap">
        @include('layouts.header')
    </div>

    <main>
        @yield('content')
    </main>

    {{-- FOOTER INCLUÍDO --}}
    @include('layouts.footer')
</body>

</html>