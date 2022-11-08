<?php
namespace app\core;
class Response {

    public function set_status_code($code)
    {
        http_response_code($code);
    }
}