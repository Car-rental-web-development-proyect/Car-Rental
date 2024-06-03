<?php
    namespace Controllers;

    use MVC\Router;
    use Model\Tarjetas;
    
    class TarjetasController{
    
        public static function registrarAuto(Router $router){
    
            $tarjetas = new Tarjetas();     
            $errores = Tarjetas::getErrores(); 
    
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $tarjetas = new Tarjetas($_POST['tarjetas']);
                
                $errores = $tarjetas->ValidarCampos();
    
                if(empty($errores)){
                    $tarjetas->Registrar();
                }
            }        

                // Aun no esta 
          //  $router->render('reservas',[
          //      'errores' => $errores,
          //      'tarjetas' =>$tarjetas
          //  ]);
        }
    }

?>