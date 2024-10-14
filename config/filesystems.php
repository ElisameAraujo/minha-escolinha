<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        /* 'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
        ], */

        /* 'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ], */

        //Armazena as logos dos adversarios da equipe
        'adversarios' => [
            'driver' => 'local',
            'root' => storage_path('app/public/aversarios'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        //Armazena a foto de perfil de usuários
        'users' => [
            'driver' => 'local',
            'root' => storage_path('app/public/usuarios'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        //Armazena a foto dos atletas usadas na foto de perfil na página de atletas e na carterinha
        'atletas' => [
            'driver' => 'local',
            'root' => storage_path('app/public/atletas'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        //Armazena a capa dos posts do blog
        'posts' => [
            'driver' => 'local',
            'root' => storage_path('app/public/posts'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        //Armazena as carteirinhas geradas na forma de um pdf para poderem ser impressas
        'carteirinhas' => [
            'driver' => 'local',
            'root' => storage_path('app/public/carterinhas'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        //Armazena as fotos de perfis dos jogadores para o módulo "Rede Social"
        'perfis' => [
            'driver' => 'local',
            'root' => storage_path('app/public/perfis'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        //Armazena as thumbnails dos vídeos para o módulo "Vídeos"
        'thumbnail' => [
            'driver' => 'local',
            'root' => storage_path('app/public/thumbnail'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        //Armazena as fotos dos albuns para o módulo "Galeria de Fotos"
        'albuns' => [
            'driver' => 'local',
            'root' => storage_path('app/public/albuns'),
            'url' => env('APP_URL').'/storage/public/',
            'visibility' => 'public',
            'throw' => false,
        ],

        /* 's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ], */

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
