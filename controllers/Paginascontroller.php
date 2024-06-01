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
      $router->render('contacto');
    }

    public static function reservas(Router $router) {
      $router->render('reservas');
    }

    public static function condiciones(Router $router){
      $router->render('condiciones');
    }

    public static function vehiculo(Router $router) {

      $todosLosVehiculos = Vehiculos::mostrar();
      

      $router->render('paginas/vehiculos', [
        'vehiculos' => $todosLosVehiculos
      ]);
    }
}