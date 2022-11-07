<?php

require_once __DIR__."/vendor/autoload.php";

use app\core\Application;
use app\core\Render;

$app = new Application();

$app->router->get('/', function() {
    Render::view("home");
});

$app->router->get("/contact", "contact@admin");


$app->run();