<?php

namespace Controllers;

use MVC\Router;
use Model\Reservacion;

class Reservacionescontroller {

    public static function registrarse(Router $router){

        $reservacion = new Reservacion();     
        $errores = Reservacion::getErrores(); 

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $reservacion = new Reservacion($_POST['reservacion']);
            
            $errores = $reservacion->ValidarCampos();

            if(empty($errores)){
                $reservacion->Registrar();
            }
        }        
        
       // $router->render('auth/registrarse',[
       //     'errores' => $errores,
       //     'reservacion' =>$reservacion
       // ]);
    }

}