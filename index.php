<?php

require_once('./vendor/autoload.php');
require_once('./vendor/altorouter/altorouter/AltoRouter.php');

$router = new AltoRouter();
$router->setBasePath('/testgit');

// Le nom du controller # la méthode à appeler = 'ControllerVille#home'
$router->map('GET', '/', 'ControllerVille#home', 'home');

$router->map('GET', '/villespardepartement/[i:id]/[a:order]', 'ControllerVille#departement', 'departement');

// la meme chose avec la methode post

$router->map('POST', '/maroute', 'ControllerVille#departementPost', 'departementPost');

$match = $router->match();

// var_dump($match);

if(is_array($match)){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();

    if(is_callable(array($obj, $action))){
        call_user_func_array(array($obj, $action), $match['params']);
    }
}