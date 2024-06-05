<?php
    namespace Controllers;

use Model\Agencias;
use Model\Reservacion;
use Model\Tarjeta;
use MVC\Router;
use Model\Tarjetas;
use Model\Vehiculos;

    class TarjetasController{

        public static function tarjeta(Router $router){
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $operacion = $_POST['operacion'] ?? null;
                if($operacion == 'pagar'){
                    // debuguear($_POST);
                    $fecha = $_POST['tarjeta']['mes'] . '/' . $_POST['tarjeta']['anio'];
                    $datosTarjeta = [
                        'tar_numTarjeta'=> $_POST['tarjeta']['tar_numTarjeta'],
                        'tar_expiracion'=> $fecha,
                        'tar_duenio'=>$_POST['tarjeta']['nombre']
                    ];
                    $tarjeta = new Tarjetas($datosTarjeta);
                    $tarjeta->Registrar();

                    $idtarjeta = Tarjetas::findPorNumero($_POST['tarjeta']['tar_numTarjeta']);

                    $_POST['reserva']['res_tar_id'] = $idtarjeta;
                    
                    $reservacion = new Reservacion($_POST['reserva']);
                    $reservacion->guardar();
                } else {
                    $agenciaSeleecionada = Agencias::mostrarPorEstadoAndCiudad($_POST['agenciaRecoger']['estado'], $_POST['agenciaRecoger']['ciudad'])[0];
                    $reserva = $_POST['reserva'];
                    $cocheSeleccionado = Vehiculos::find($_POST['coche']);
                }
            }

            $router->render('auth/tarjeta', [
                'vehiculo' => $cocheSeleccionado,
                'reserva' => $reserva,
                'agencia' => $agenciaSeleecionada
            ]);
        }
    }

?>