<?php

namespace Model;

class Entrega extends ActiveRecord{

    protected static $tabla = 'agencias';
    protected static $columnasDB = ['age_id','age_agencia','age_ciudad','age_estado'];

    //Columnas 
    public $age_id;
    public $age_agencia;
    public $age_ciudad;
    public $age_estado;

    public function __construct($args = []){
        $this->age_id = $args['age_id'] ?? NULL;
        $this->age_agencia = $args['age_agencia'] ?? ''; 
        $this->age_ciudad = $args['age_ciudad'] ?? ''; 
        $this->age_estado= $args['age_estado'] ?? ''; 
    }

    public function Registrar(){
        if(!is_null($this->age_id)){ //Si no es NULL, la accion es actualizar 

        }else{
            $this->registrar(); //Si es NULL, la accion es registrar 
        }
    }

    public function ValidarCampos(){
        if(!$this->age_agencia){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->age_ciudad){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->age_estado){
            self::$errores[] = "Campo Vacio"; 
        }
        
        return self::$errores;

    }
}

?>