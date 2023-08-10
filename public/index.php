<?php

require_once  __DIR__. '/../vendor/autoload.php';

$router = new AltoRouter();
if (array_key_exists('BASE_URI', $_SERVER)){
    $router->setBasePath($_SERVER['BASE_URI']);

}else{
    $_SERVER['BASE_URI'] = '/';
}

$router->map(
    'GET',
    '/',
    [
        'method'=>'home',
        'controller'=>'app\controllers\MainController'
    ],
    'home'

);
$router->map(
    'GET',
    '/prestations',
    [
        'method'=>'prestations',
        'controller'=>'app\controllers\MainController'
    ],
    'prestations'
);
$router->map(
    'GET',
    '/prestations/[i:id]',
    [
        'method'=>'prestationDetail',
        'controller'=>'app\controllers\MainController'
    ],
    'prestationDetail'
);


$match=$router->match();
//Utilisation d'une librairie externe pour le dispatcher https://packagist.org/packages/benoclock/alto-dispatcher

$dispatcher = new Dispatcher($match, '\app\controllers\ErrorController::error404');

$dispatcher->setControllersNamespace('app\controllers');

$dispatcher->dispatch();

//
//if ($match){
//
//    $controllerName = $match['target']['controller'];
//    $controller = new $controllerName;
//
//    $methodName = $match['target']['action'];
//   $controller->$methodName($match['params']);
//
//
//}else{
//    $errorModel=new \app\controllers\ErrorController();
//    $errorModel->error404();
//
//}
