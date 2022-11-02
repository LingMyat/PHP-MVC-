<?php
class Router{
    public $routes = [
        'GET'=>[],
        'POST'=>[],
    ];
    public function addRoutesToRouterClass($routes){
        $this->routes = $routes;
    }
    static function load($fileName){
        $router = new Router();
        require $fileName;
        return $router;
    }
    public function get($uri,$controller){
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri,$controller){
        $this->routes['POST'][$uri] = $controller;
    }
    public function direct($uri,$method){
        if (!array_key_exists($uri,$this->routes[$method])) {
                die("404 page");
            }
            $controller = $this->routes[$method][$uri];
            $this->callAction($controller[0],$controller[1]);
    }
    public function callAction($class,$method){
        $class = new $class;
        $class->$method();
    }

}