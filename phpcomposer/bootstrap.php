<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$router = new \Php\Biblioteca\Router($method, $path);

//$router->get("/", function(){ echo "Olá mundo!"; });

$router->get("/saudacao/{nome}", 
    'Php\Biblioteca\Controller\HomeController@index'
    // function($params){
    //     echo "Olá".$params[1];
    // }
);

$resultado = $router->handler();

if (!$resultado){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}



$resultado = explode('@', $resultado);
$controller = new $resultado[0];
$action = $resultado[1];
echo $controller->$action($router->getParams());



