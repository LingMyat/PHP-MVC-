<?php
class Router{
    protected $routes = [];
    public function addRoutesToRouterClass($routes){
        $this->routes = $routes;
    }
    static function load($fileName){
        $router = new Router();
        require $fileName;
        return $router;
    }
    public function showMyRoutes(){
        var_dump($this->routes);
    }
    public function direct($uri){
        if (array_key_exists($uri,$this->routes)) {
            return $this->routes[$uri];
        }
    }
}