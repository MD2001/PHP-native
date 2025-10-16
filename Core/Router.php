<?php

namespace Core;

class Router
{

    protected $routes = [];
    /*
***example*****
    [
        "uri" => "/",
        "controller" => "Controller/index.php",
        "method" => "GET"
        ]
 */
    public function add($uri, $controller, $method)
    {
        $this->routes[] = compact('uri', 'controller', 'method');
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, "GET");
    }
    public function post($uri, $controller)
    {
        $this->add($uri, $controller, "POST");
    }
    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, "DELETE");
    }
    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, "PATCH");
    }
    public function put($uri, $controller)
    {
        $this->add($uri, $controller, "PUT");
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($uri === $route['uri'] && $method === $route['method']) {
                require base_path($route["controller"]);
                exit();
            }
        }
        abort();
    }
}