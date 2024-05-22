<?php

namespace Controllers;

use MVC\Router;

class Usuarioscontroller {
    public static function login(Router $router){
        $router->render('auth/login');
    }

}