<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;
use Model\Vehiculos;

class Usuarioscontroller {

    public static function login(Router $router){    
        $router->render('auth/login');
    }

    public static function registrarse(Router $router){

        $usuarios = new Usuarios();     
        $errores = Usuarios::getErrores(); 

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuarios = new Usuarios($_POST['usuarios']);
            
            $errores = $usuarios->ValidarCampos();

            if(empty($errores)){
                $usuarios->Registrar();
            }
        }        
        
        $router->render('auth/registrarse',[
            'errores' => $errores,
            'usuarios' =>$usuarios
        ]);
    }

    public static function admin(Router $router){
        $vehiculos = Vehiculos::mostrar();

        $router->render('auth/admin', [
            'vehiculos' => $vehiculos
        ]);
    }

    public static function tarjeta(Router $router){
        $router->render('auth/tarjeta');
    }

}