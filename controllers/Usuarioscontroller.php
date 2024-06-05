<?php

namespace Controllers;

use MVC\Router;
use Model\Usuarios;
use Model\Vehiculos;

class Usuarioscontroller {

    public static function login(Router $router){
      $errores = Usuarios::getErrores();

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
         $usuario = new Usuarios($_POST['usuario']); // Obtnemos datos del formulario -> login.php
         $resultado = $usuario->buscar_usuario();
         // $usuario->ValidarCampos();
         if(!$resultado) {
            $errores = Usuarios::getErrores();
         }
         else {
            $resul = $usuario->comprobarPassword($resultado);
            if(!$resul) {
               $errores = Usuarios::getErrores();
            }
            else {
               $usuario->autenticar($resul);
            }
         }
      }

        $router->render('auth/login',['errores'=>$errores]);
    }

    public static function registrarse(Router $router){

        $errores = Usuarios::getErrores(); 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $usuario = new Usuarios($_POST['usuario']);
            $errores = $usuario->ValidarCampos();
    
            if(empty($errores)){             
                $usuario->Registrar();                
            }
            
        }        
        
        $router->render('auth/registrarse',[
            'errores' => $errores
        ]);
    }

    public static function admin(Router $router){
        $vehiculos = Vehiculos::mostrar();

        $router->render('auth/admin', [
            'vehiculos' => $vehiculos
        ]);
    }

}