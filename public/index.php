<?php

require_once __DIR__."/../vendor/autoload.php";

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;
use app\core\Render;
use app\controllers\ContactController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, "index"]);

$app->router->get("/login", [AuthController::class, "login"]);
$app->router->post("/login", [AuthController::class, "login"]);
$app->router->get("/signup", [AuthController::class, "register"]);
$app->router->post("/signup", [AuthController::class, "handleRegister"]);


$app->router->get("/contact", [ContactController::class, "index"]);
$app->router->post("/contact", [ContactController::class, "handle"]);


$app->run();