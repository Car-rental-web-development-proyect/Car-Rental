<?php

namespace Model;

class Tarjetas extends ActiveRecord{
    protected static $tabla = 'tarjeta';
    protected static $columnasDB = ['tar_id','tar_numTarjeta','tar_expiracion','tar_duenio'];

    
        //Columnas 
        public $tar_id;
        public $tar_numTarjeta;
        public $tar_expiracion;
        public $tar_duenio;

        public function __construct($args = []){
            $this->tar_id = $args['tar_id'] ?? null;
            $this->tar_numTarjeta = $args['tar_numTarjeta'] ?? '';
            $this->tar_expiracion= $args['tar_expiracion'] ?? '';
            $this->tar_duenio= $args['tar_duenio'] ?? '';
        }


    
        public function Registrar(){
            $atributos = $this->atributos();

            // INSERT INTO tabla ()
            $query = "INSERT INTO " . static::$tabla . " ( "; //Referencia a la clase 
            $query .= join(', ', array_keys($atributos)); // separa con , cada columna de la tabla 
            $query .= " ) VALUES ('"; 
            $query .= join("' , '", array_values($atributos)); // agrega  'atributo' para cada valor entrante de la tabla
            $query .= "' ) "; // cierra query 

            $resultado = self::$db->query($query);
        }
    
        public function ValidarCampos(){
            if(!$this->tar_numTarjeta){
                self::$errores[] = "Numero de tarjeta invalido"; 
            }
    
            if(!$this->tar_expiracion){
                self::$errores[] = "Fecha de expiración invalida"; 
            }
    
            if(!$this->tar_duenio){
                self::$errores[] = "Ingrese un nombre valido"; 
            }
    
            return self::$errores;
        }

        public static function findPorNumero($numero) {

            $query = "SELECT * FROM " . static::$tabla . " WHERE tar_numTarjeta  = $numero";
        
            $resultado = self::$db->query($query);
            $tarjeta = $resultado->fetch_object();

        
            return $tarjeta->tar_id;
        }
} 


?>