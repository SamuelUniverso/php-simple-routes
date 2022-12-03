<?php

$routes = [
    'GET' => [
        '/' => fn() => handle('HomeController', 'index'),
        '/contact' => fn() => handle('ContactController', 'index')
    ],
    'POST' => [
        '/contact' => fn() => handle('ContactController', 'store')
    ]
];
