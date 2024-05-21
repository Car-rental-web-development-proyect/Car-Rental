<?php

require __DIR__ . '/../config/app.php';

use Controllers\Paginascontroller;
use MVC\Router;

$router = new Router();

$router->get('/', [Paginascontroller::class, 'index']);
$router->get('/home', [Paginascontroller::class, 'home']);

$router->comprobarRutas();