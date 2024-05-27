<?php

namespace Controllers;

use MVC\Router;

class Usuarioscontroller {
    public static function login(Router $router){
        $router->render('auth/login');
    }

    public static function registrarse(Router $router){
        $router->render('auth/registrarse');
    }

    public static function registrarAuto(Router $router){
        $router->render('auth/registrarAuto');
    }

}