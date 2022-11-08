<?php

namespace app\controllers;
use app\core\Render;


class SiteController {
    public function index()
    {

        Render::view('home', ["title"=> "Főoldal"]);
    }
}