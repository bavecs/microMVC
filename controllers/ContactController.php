<?php
namespace app\controllers;
use app\core\Render;
use app\core\Request;

class ContactController {
    public function index() 
    {
        $params = [
            "title" => "Kapcsolat"
        ];

        Render::view('contact', $params);
    }

    public function handle(Request $request)
    {
        $body = $request->getBody();

        var_dump($body);
        exit;
    }
}