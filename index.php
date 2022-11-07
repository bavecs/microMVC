<?php

require_once __DIR__."/vendor/autoload.php";

use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
    echo 'hello word from home ';
});

$app->router->get("/contact", function() {
     echo "Hello from contact ";
});


$app->run();