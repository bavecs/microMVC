<?php
namespace app\controllers;

use app\core\Render;
use app\core\Request;
use app\models\User;

class AuthController
{
    public function login()
    {
        Render::view("login@auth");
    }

    public function register()
    {
        Render::view("signup@auth");
        return;
    }

    public function handleRegister(Request $request)
    {
        if (!$request->isPost()) {
            $this->register();
        }

        $errors = [];

        $formBody = $request->getBody();

        $user = new User();
        $user->loadData($formBody);


        if (empty($errors)) {
            var_dump($user);
            exit;
        }

    }
}