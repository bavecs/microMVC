<?php

namespace app\core;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function method()
    {
        return $_SERVER["REQUEST_METHOD"];
    }

    public function isGet()
    {
        return $this->method() === "GET";
    }

    public function isPost()
    {
        return $this->method() === "POST";
    }

    public function getBody()
    {
        $body = [];
        if ($this->isGet()) {

            foreach($_GET as $key => $val) 
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            

        } else if ($this->isPost()) {

            foreach($_POST as $key => $val) 
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
        }

        return $body;
    }
}