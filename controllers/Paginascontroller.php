<?php

namespace Controllers;

use MVC\Router;

class Paginascontroller {
    public static function index(Router $router){
        $router->render('paginas/index');
    }
    public static function home(Router $router){
        echo 'Desde echo';
    }
}