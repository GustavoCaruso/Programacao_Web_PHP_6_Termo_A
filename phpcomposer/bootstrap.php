<?php

require __DIR__.'/vendor/autoload.php';

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? '/';

$router = new \Php\Biblioteca\Router($method, $path);

//$router->get("/", function(){ echo "Olá mundo!"; });

$router->get("/", 
    'Php\Biblioteca\Controller\HomeController@index'
    // function($params){
    //     echo "Olá".$params[1];
    // }
);



$router->get("/categoria/inserir", 
    'Php\Biblioteca\Controller\CategoriaController@inserir'
    
   
);


$router->get("/categoria/index", 
    'Php\Biblioteca\Controller\CategoriaController@index'
    
   
);


$router->get("/categoria/alterar/{id}", 
    'Php\Biblioteca\Controller\CategoriaController@alterar'
    
   
);

$router->get("/categoria/excluir/{id}", 
    'Php\Biblioteca\Controller\CategoriaController@excluir'
    
   
);

$router->post("/categoria/gravar", 'Php\Biblioteca\Controller\CategoriaController@gravar');

$router->post("/categoria/editar/{id}", 'Php\Biblioteca\Controller\CategoriaController@editar');


$router->post("/categoria/deletar/{id}", 'Php\Biblioteca\Controller\CategoriaController@deletar');

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



