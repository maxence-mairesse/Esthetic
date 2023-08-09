<?php

require_once  __DIR__. '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET',
    '/',
    [
        'action'=>'home',
        'controller'=>'app\controllers\MainController'],
    'home'

);
$router->map(
    'GET',
    '/prestations',
    ['action'=>'prestations',
        'controller'=>'app\controllers\MainController'],
    'prestations'
);
$router->map(
    'GET',
    '/prestations/[i:id]',
    ['action'=>'prestationDetail',
        'controller'=>'app\controllers\MainController'],
    'prestationDetail'
);


$match=$router->match();

if ($match){

    $controllerName = $match['target']['controller'];
    $controller = new $controllerName;

    $methodName = $match['target']['action'];
   $controller->$methodName($match['params']);


}else{
    $errorModel=new \app\controllers\ErrorController();
    $errorModel->error404();

}
