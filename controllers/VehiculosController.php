<?php

namespace Controllers;

use MVC\Router;
use Model\Vehiculos;

class VehiculosController{

    public static function registrarAuto(Router $router){
   
        $errores = Vehiculos::getErrores(); 

         if($_SERVER['REQUEST_METHOD'] === 'POST'){

             $vehiculo = new Vehiculos($_POST['vehiculo']);      
             $errores = $vehiculo->ValidarCampos();

             if(empty($errores)){
                 $vehiculo->Registrar();
             }
         }        

        $router->render('vehiculos/registrarAuto', [ 
            'errores' => $errores
        ]);
    }

}

?>