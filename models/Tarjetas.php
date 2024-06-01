<?php

namespace Model;

class Tarjeta extends ActiveRecord{
    protected static $tabla = 'tarjeta';
    protected static $columnasDB = ['tar_id','tar_numTarjeta','tar_expiracion','tar_duenio','tar_celular','tar_correo'];

    
        //Columnas 
        public $tar_id;
        public $tar_numTarjeta;
        public $tar_expiracion;
        public $tar_duenio;
        public $tar_celular;
        public $tar_correo;
    
    
        public function __construct($args = []){
            $this->tar_id = $args['tar_id'] ?? null;
            $this->tar_numTarjeta = $args['tar_numTarjeta'] ?? '';
            $this->tar_expiracion= $args['tar_expiracion'] ?? '';
            $this->tar_duenio= $args['tar_duenio'] ?? '';
            $this->tar_celular = $args['tar_celular'] ?? '';
            $this->tar_correo = $args['tar_correo'] ?? '';
        }
    
        public function Registrar(){
            if(!is_null($this->tar_id)){ //Si no es NULL, la accion es actualizar 
    
            }else{
                $this->registrar(); //Si es NULL, la accion es registrar 
            }
        }
    
        public function ValidarCampos(){
            if(!$this->tar_numTarjeta){
                self::$errores[] = "Campo Vacio"; 
            }
    
            if(!$this->tar_expiracion){
                self::$errores[] = "Campo Vacio"; 
            }
    
            if(!$this->tar_duenio){
                self::$errores[] = "Campo Vacio"; 
            }
    
            if(!$this->tar_celular){
                self::$errores[] = "Campo Vacio"; 
            }
    
            if(!$this->tar_correo){
                self::$errores[] = "Campo Vacio"; 
            }

            return self::$errores;
        }
} 


?>