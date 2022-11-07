<?php
namespace app\core;


class Router
{
    protected $routes = [
        "GET" => [],
        "POST" => []
    ];

    public function get(string $path, $callback)
    {
        $this->routes["GET"][$path] = $callback;
    }


    public function resolve(Request $request)
    {
        $path = $request->getPath();
        $method = $request->getMethod();


        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            echo "Not found 404";

        }

        $callback();
        
    }
}
