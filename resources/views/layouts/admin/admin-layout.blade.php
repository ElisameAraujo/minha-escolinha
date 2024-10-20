<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') | Painel de Administração</title>
    <link rel="shortcut icon" href="{{asset('images/svg/favicon.svg')}}" type="image/x-icon" />

    <!-- == Estilos == -->
    @vite(['resources/css/app-dashboard.css', 'resources/css/app.css'])

    <!-- Scripts [mazer - topo] -->

</head>

<body>
    <script src="{{ asset('mazer/js/initTheme.js') }}"></script>
    
    <div id="app">
        
        @include('components.geral.sidebar')
        
        <div id="main">
            @include('components.geral.profile-menu')

            @yield('conteudo')

            @include('components.geral.footer')
        </div>
    
    </div>

</body>

<!-- Scripts [mazer - fim] -->
<script src="{{ asset('mazer/js/dark.js') }}"></script>
<script src="{{ asset('mazer/js/app.js') }}" type="module"></script>



<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/static/js/pages/dashboard.js"></script>

</html>
