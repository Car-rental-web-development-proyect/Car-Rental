<?php

namespace Controllers;

use MVC\Router;
use Model\Vehiculos;

class VehiculosController{

    public static function registrarAuto(Router $router){

        // $vehiculos = new Vehiculos();     
        // $errores = Vehiculos::getErrores(); 

        // if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //     $vehiculos = new Vehiculos($_POST['vehiculos']);
            
        //     $errores = $vehiculos->ValidarCampos();

        //     if(empty($errores)){
        //         $vehiculos->Registrar();
        //     }
        // }        

        $router->render('vehiculos/registrarAuto',[
        ]);
    }

}

?>