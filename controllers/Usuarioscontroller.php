<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;

class Usuarioscontroller {

    public static function login(Router $router){    
        $router->render('auth/login');
    }

    public static function registrarse(Router $router){

        $errores = Usuarios::getErrores(); 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //debuguear($_POST);

            $usuario = new Usuarios($_POST['usuario']);
            $errores = $usuario->ValidarCampos();
            //debuguear($errores);
            if(empty($errores)){ 
                //debuguear('mario');
                $usuario->Registrar();
                
            }
            
        }        
        
        $router->render('auth/registrarse',[
            'errores' => $errores
        ]);
    }

    public static function admin(Router $router){
        $router->render('auth/admin');
    }

    public static function tarjeta(Router $router){
        $router->render('auth/tarjeta');
    }

}