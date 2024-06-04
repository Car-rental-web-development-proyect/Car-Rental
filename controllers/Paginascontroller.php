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


    public static function ofertas(Router $router) {
      $router->render('paginas/ofertas');
    }

    public static function condiciones(Router $router){
      $router->render('paginas/condiciones');
    }
   
    public static function vehiculo(Router $router) {
      $todos_los_vehiculos = Vehiculos::mostrar();
      // debuguear($todos_los_vehiculos);
      $router->render('/paginas/vehiculos', ['vehiculos' => $todos_los_vehiculos]);
    }
}