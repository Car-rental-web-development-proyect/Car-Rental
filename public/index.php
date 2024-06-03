<?php

require __DIR__ . '/../config/app.php';

use Controllers\Paginascontroller;
use Controllers\Usuarioscontroller;
use Controllers\VehiculosController;
use MVC\Router;

$router = new Router();

$router->get('/', [Paginascontroller::class, 'index']);
$router->get('/contacto', [Paginascontroller::class, 'contacto']);
$router->get('/agencias', [Paginascontroller::class, 'agencias']);
$router->get('/reservas', [Paginascontroller::class, 'reservas']);

$router->get('/login', [Usuarioscontroller::class, 'login']);
$router->get('/registrarse', [Usuarioscontroller::class, 'registrarse']);
$router->get('/admin', [Usuarioscontroller::class, 'admin']);

$router->get('/registrarAuto', [VehiculosController::class, 'registrarAuto']);

$router->get('/tarjeta', [Usuarioscontroller::class, 'tarjeta']);

$router->comprobarRutas();