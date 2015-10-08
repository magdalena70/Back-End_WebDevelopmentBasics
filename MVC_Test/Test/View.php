<?php
namespace Pesho;

class View
{
    public static $controllerName;
    public static $actionName;

    public static $viewBag = [];

    /**
     * @see loadViewAndModel if 2 arguments are passes
     * @see loadOnlyModel if 1 argument is passed
     * @see loadOnlyView if none arument are passed
     */
    public function __construct(){
        $args = func_get_args();
        if(count($args) == 2){
            $viewName = $args[0];
            $model = $args[1];
            self::loadViewAndModel($viewName, $model);
        }else if(count($args) === 1){
            $model = $args[0];
            self::loadOnlyModel($model);
        }else if(count($args) === 0){
            self::loadOnlyView();
        }


    }

    private static function loadViewAndModel($viewName, $model){
        $viewName = str_replace('/', DIRECTORY_SEPARATOR, $viewName);
        $viewName = str_replace('\\', DIRECTORY_SEPARATOR, $viewName);

        require 'Views'
            .DIRECTORY_SEPARATOR
            .$viewName
            .'.php';
    }

    private static function loadOnlyModel($model){
        require 'Views'
            .DIRECTORY_SEPARATOR
            .self::$controllerName
            .DIRECTORY_SEPARATOR
            .self::$actionName
            .'.php';
    }

    private static function loadOnlyView(){
        require 'Views'
            .DIRECTORY_SEPARATOR
            .self::$controllerName
            .DIRECTORY_SEPARATOR
            .self::$actionName
            .'.php';
    }
}