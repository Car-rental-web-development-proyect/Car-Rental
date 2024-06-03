<?php

namespace Controllers;

use MVC\Router;
use Model\Entrega;

class Entregascontroller {

    public static function registrarse(Router $router){

        $entrega = new Entrega();     
        $errores = Entrega::getErrores(); 

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $entrega = new Entrega($_POST['entrega']);
            
            $errores = $entrega->ValidarCampos();

            if(empty($errores)){
                $entrega->Registrar();
            }
        }        
        
        //$router->render('auth/registrarse',[
        //    'errores' => $errores,
        //    'entrega' =>$entrega
        //]);
    }

}