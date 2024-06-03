<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;

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

    public static function registrarAuto(Router $router){
        $router->render('auth/registrarAuto');
    }

}