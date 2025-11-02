<?php

namespace Core;

use Core\Session;
use Core\Midllware\Midllware;

class Router
{

    protected $routes = [];
    /*
***example*****
    [
        "uri" => "/",
        "controller" => "Controller/index.php",
        "method" => "GET"
        "auth" => null
        ]
 */
    public function add($uri, $controller, $method, $midllware = null)
    {
        $this->routes[] = compact('uri', 'controller', 'method', 'midllware');
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, "GET");
    }
    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, "POST");
    }
    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, "DELETE");
    }
    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, "PATCH");
    }
    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, "PUT");
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]["midllware"] = $key;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($uri === $route['uri'] && $method === $route['method']) {

                if ($route['midllware']) {

                    $midllware = Midllware::Map[$route["midllware"]];
                    (new $midllware)->handle();
                }
                require base_path("Http/Controllers/" . $route["controller"]);
                Session::unflash();
                exit();
            }
        }
        abort();
    }
}
