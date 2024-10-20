<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') | Painel de Administração</title>
    <link rel="shortcut icon" href="{{asset('images/svg/favicon.svg')}}" type="image/x-icon" />

    <!-- == Estilos == -->
    @vite([
        'resources/css/app-dashboard.css', 
        'resources/css/app.css', 
        'resources/js/app.js'
    ])

    <!-- Scripts [mazer - topo] -->

</head>

<body>
    <script src="{{ asset('mazer/js/initTheme.js') }}"></script>
    
    <div id="app">
        
        @include('components.admin.geral.sidebar')
        
        <div id="main">
            <section class="main-content">
                @include('components.admin.geral.profile-menu')
    
                @yield('conteudo')
    
                @include('components.admin.geral.footer')
            </section>
        </div>
    
    </div>

</body>

<!-- Scripts [mazer - fim] -->
<script src="{{ asset('mazer/js/dark.js') }}"></script>
<script src="{{ asset('mazer/js/app.js') }}"></script>
@stack('upload-foto-atleta')
</html>
