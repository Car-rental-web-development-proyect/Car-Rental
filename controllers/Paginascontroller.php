<?php

namespace Controllers;

use MVC\Router;

class Paginascontroller {
    public static function index(Router $router){
        $router->render('home');
    }
}