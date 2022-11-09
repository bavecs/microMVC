<?php
namespace app\core;


class Router
{
    public Request $request;

    public Response $response;

    protected $routes = [
        "GET" => [],
        "POST" => []
    ];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get(string $path, $callback)
    {
        $this->routes["GET"][$path] = $callback;
    }

    public function post(string $path, $callback)
    {
        $this->routes["POST"][$path] = $callback;
    }


    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();


        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            $this->response->set_status_code(404);
            echo "Not found 404";

        }

        if (is_string($callback)) {
            Render::view($callback);
            return;
        }

        if(is_array($callback)) {
            $callback[0] = new $callback[0]();
        }

        return call_user_func($callback, $this->request);

        

        
    }
}
