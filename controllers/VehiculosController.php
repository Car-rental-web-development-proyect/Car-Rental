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
    public static function actualizarAuto(Router $router){
   
        $errores = Vehiculos::getErrores(); 
        
        $vehiculo = Vehiculos::find($_GET['id']);
        
        $router->render('vehiculos/actualizarAuto', [
            'errores' => $errores,
            'vehiculo' => $vehiculo
        ]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            //debuguear($id);
            if($id) {
                //$tipo = $_POST['tipo']; // En los botones de eliminar mandamos dos datos, ya sea "id" y "tipo", que este ultimo puede ser 'propiedad' u 'vendedor'
                    $vehiculo = Vehiculos::find($id);
                    $vehiculo->eliminar();

            }
        }
    }       


}

?>