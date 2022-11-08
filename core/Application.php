<?php

namespace app\core;

class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;

    public static Application $app;

    public function __construct($root_dir)
    {
        self::$ROOT_DIR = $root_dir;
        self::$app = $this;

        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        
    }

    public function run()
    {
        $this->router->resolve();
    }
}