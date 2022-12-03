<?php

$router = [
    'GET' => [
        '/' => fn() => handle('HomeController', 'index'),
        '/contact' => fn() => handle('ContactController', 'index')
    ],
    'POST' => [
        '/contact' => fn() => handle('ContactController', 'store')
    ]
];

function handle(string $controller, string $action)
{
    try 
    {
        $controllerNamepace = "App\\Controllers\\{$controller}";
        
        if(!class_exists($controllerNamepace)) {
            throw new Exception("O controller {$controller} não existe.");
        }

        $controllerInstance = new $controllerNamepace();

        if(!method_exists($controllerInstance, $action)) {
            throw new Exception("O método {$action} não existe no controller {$controller}.");
        }

        $controllerInstance->$action((object) $_REQUEST);
    }
    catch(Exception $e) {
        echo $e->getMessage();
    }

}
