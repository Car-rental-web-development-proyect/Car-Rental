<?php

namespace Controllers;

use MVC\Router;

class Paginascontroller {
    public static function index(Router $router){
        $router->render('paginas/index');
        $router->render('paginas/index');
    }
    
}