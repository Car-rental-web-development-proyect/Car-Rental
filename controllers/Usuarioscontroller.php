<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;

class Usuarioscontroller {

    public static function login(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuarios($_POST['usuario']);
            $resultado_query = $usuario->buscar_usuario();
            debuguear($resultado_query);

        }

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
        $router->render('auth/admin');
    }

    public static function tarjeta(Router $router){
        $router->render('auth/tarjeta');
    }

}