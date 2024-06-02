<?php

namespace Controllers;

use MVC\Router;

class Paginascontroller {
    public static function index(Router $router){

        $inicio = True;

        $router->render('paginas/index', [
            'inicio' => $inicio
        ]);
    }
    
    public static function contacto(Router $router) {
      $router->render('contacto');
    }

    public static function reservas(Router $router) {
      $router->render('reservas');
    }


    public static function ofertas(Router $router) {
      $router->render('ofertas');
    }
}