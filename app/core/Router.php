<?php

class Router{
    protected $routes = [];

    public function route($uri){
        foreach($this->routes as $route){
            if($route['uri'] == $uri){
                return require '../' . $route['controller'];
            }
        }

        $this->abort();
    }

    public function abort($code = 404){
        http_response_code($code);
        require("../views/{$code}.php");
    }

    public function addRoute($uri, $controller, $method){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller){
        $this->addRoute($uri, $controller, 'GET');
    }

    public function post($uri, $controller){
        $this->addRoute($uri, $controller, 'POST');
    }

    public function patch($uri, $controller){
        $this->addRoute($uri, $controller, 'PATCH');
    }

    public function delete($uri, $controller){
        $this->addRoute($uri, $controller, 'DELETE');
    }
}

