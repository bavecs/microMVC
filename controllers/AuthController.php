<?php
namespace app\controllers;

use app\core\Render;

class AuthController {
    public function login()
    {
        Render::view("login");
    }

    public function register()
    {
        Render::view("register");
    }
}