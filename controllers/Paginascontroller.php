<?php

namespace Controllers;

use Model\Vehiculos;
use MVC\Router;

class Paginascontroller {
    public static function index(Router $router){

        $inicio = True;

        $router->render('paginas/index', [
            'inicio' => $inicio
        ]);
    }
    
    public static function contacto(Router $router) {
      $router->render('paginas/contacto');
    }

    public static function agencias(Router $router) {
      $router->render('paginas/agencias');
    }

    public static function reservas(Router $router) {
      $router->render('paginas/reservas');
    }

}