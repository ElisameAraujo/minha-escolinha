<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite([
            'resources/css/app.css', 
            'resources/css/app-web.css', 
            'resources/js/app.js'
        ])

        <!-- Styles -->
    </head>
    <body>
        <div class="container py-4 px-3 mx-auto">
            <h6>Futsal</h6>
            <span class="badge-posicoes bg-gol">GOL</span>
            <span class="badge-posicoes bg-fixo">FIXO</span>
            <span class="badge-posicoes bg-ala-fs">ALA</span>
            <span class="badge-posicoes bg-pivo">PIV</span>
            <hr>
            <h6>Futebol</h6>
            <span class="badge-posicoes bg-gol">GOL</span>

            <span class="badge-posicoes bg-zag">ZAG</span>
            <span class="badge-posicoes bg-lib">LIB</span>
            <span class="badge-posicoes bg-lat">LD</span>
            <span class="badge-posicoes bg-lat">LE</span>
            <span class="badge-posicoes bg-ala-ft">AE</span>
            <span class="badge-posicoes bg-ala-ft">AD</span>

            <span class="badge-posicoes bg-pvol">PVOL</span>
            <span class="badge-posicoes bg-svol">SVOL</span>
            <span class="badge-posicoes bg-mei">MEI</span>
            <span class="badge-posicoes bg-mea">MEA</span>
            <span class="badge-posicoes bg-mlt">MLT</span>
            <span class="badge-posicoes bg-mat">MAT</span>

            <span class="badge-posicoes bg-sa">SA</span>
            <span class="badge-posicoes bg-ca">CA</span>
            <span class="badge-posicoes bg-pt">PE</span>
            <span class="badge-posicoes bg-pt">PD</span>
        </div>
    </body>
</html>
