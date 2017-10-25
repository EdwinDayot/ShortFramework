<?php

return [
    /*
     * Middlewares of application.
     */
    'middlewares' => [
        'base' => [
        ],

        'route' => [
            'auth' => \App\Middlewares\AuthenticationMiddleware::class,
        ],
    ],

    /*
     * Providers of application.
     */
    'providers' => [
        \App\Providers\RouteServiceProvider::class,
    ],
];
