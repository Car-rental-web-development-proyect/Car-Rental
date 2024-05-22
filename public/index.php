<?php

require __DIR__ . '/../config/app.php';

use Controllers\Paginascontroller;
use Controllers\Usuarioscontroller;
use MVC\Router;

$router = new Router();

$router->get('/', [Paginascontroller::class, 'index']);


$router->get('/login', [Usuarioscontroller::class, 'login']);

$router->comprobarRutas();