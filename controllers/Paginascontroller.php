<?php

namespace Controllers;

use MVC\Router;

class Paginascontroller {
    public static function index(Router $router){
        $router->render('paginas/index');
    }
    
    public static function contacto(Router $router) {
      $router->render('contacto');
    }

    public static function reservas(Router $router) {
      $router->render('reservas');
    }
}