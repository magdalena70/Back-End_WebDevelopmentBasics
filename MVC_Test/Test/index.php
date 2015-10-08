<?php
$uri = $_GET['uri'];
$requestUri = explode('/', $uri);
$controller = array_shift($requestUri);
//echo "Controller: $controller";
$action = array_shift($requestUri);
//echo "Action: $action";
$controllerName = '\\Pesho\\Controllers\\'. ucfirst($controller).'Controller';// make string

spl_autoload_register(function($class){
    $splitControllerName = explode("\\", $class);
    array_shift($splitControllerName);
    $fullClassName = implode(DIRECTORY_SEPARATOR, $splitControllerName);
    require_once $fullClassName. ".php";
    //var_dump("include class $fullClassName.php");
});

\Pesho\View::$controllerName = $controller;
\Pesho\View::$actionName = $action;

$controllerInstance = new $controllerName();//make object from string by 'new'

call_user_func_array(
    array($controllerInstance, $action),$requestUri
);


