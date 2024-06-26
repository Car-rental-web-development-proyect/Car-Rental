<?php

require __DIR__ . '/../config/app.php';

use Controllers\Paginascontroller;
use Controllers\TarjetasController;
use Controllers\Usuarioscontroller;
use Controllers\VehiculosController;
use MVC\Router;

$router = new Router();

$router->get('/', [Paginascontroller::class, 'index']);
$router->get('/contacto', [Paginascontroller::class, 'contacto']);
$router->get('/agencias', [Paginascontroller::class, 'agencias']);
$router->get('/reservas', [Paginascontroller::class, 'reservas']);

$router->get('/condiciones', [Paginascontroller::class, 'condiciones']);

// $router->get('/vehiculo', [Paginascontroller::class, 'vehiculo']);
$router->get('/flota_vehiculos', [Paginascontroller::class, 'vehiculo']);
$router->post('/flota_vehiculos', [Paginascontroller::class, 'vehiculo']);


$router->get('/ofertas', [Paginascontroller::class, 'ofertas']);


$router->get('/login', [Usuarioscontroller::class, 'login']);
$router->post('/login', [Usuarioscontroller::class, 'login']);
$router->get('/logout', [Usuarioscontroller::class, 'logout']);

$router->get('/registrarse', [Usuarioscontroller::class, 'registrarse']);
$router->post('/registrarse', [Usuarioscontroller::class, 'registrarse']);
$router->get('/admin', [Usuarioscontroller::class, 'admin']);

$router->get('/registrarAuto', [VehiculosController::class, 'registrarAuto']);
$router->get('/actualizarAuto', [VehiculosController::class, 'actualizarAuto']);
$router->post('/registrarAuto', [VehiculosController::class, 'registrarAuto']);
$router->post('/vehiculos/eliminar', [VehiculosController::class, 'eliminar']);


$router->post('/tarjeta', [TarjetasController::class, 'tarjeta']);

$router->comprobarRutas();