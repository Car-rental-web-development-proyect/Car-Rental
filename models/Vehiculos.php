<?php
namespace Model;


class Vehiculos extends ActiveRecord{

    protected static $tabla = 'vehiculos';
    protected static $columnasDB = ['veh_id','veh_modelo','veh_descripcion','veh_cilindro','veh_color','veh_pasajeros','veh_maletas','veh_manejo','veh_combustible','veh_disponibles','veh_costodia','veh_img'];

    //Columnas 
    public $veh_id;
    public $veh_modelo;
    public $veh_descripcion;
    public $veh_cilindro;
    public $veh_color;
    public $veh_pasajeros;
    public $veh_maletas;
    public $veh_manejo;
    public $veh_combustible;
    public $veh_disponibles;
    public $veh_costodia;
    public $veh_img;

    public function __construct($args = []){
        $this->veh_id = $args['veh_id'] ?? null;
        $this->veh_modelo = $args['veh_modelo'] ?? '';
        $this->veh_descripcion = $args['veh_descripcion'] ?? '';
        $this->veh_cilindro = $args['veh_cilindro'] ?? '';
        $this->veh_color = $args['veh_color'] ?? '';
        $this->veh_pasajeros = $args['veh_pasajeros'] ?? '';
        $this->veh_maletas = $args['veh_maletas'] ?? '';
        $this->veh_manejo = $args['veh_manejo'] ?? '';
        $this->veh_combustible = $args['veh_combustible'] ?? '';
        $this->veh_disponibles = $args['veh_disponibles'] ?? '';
        $this->veh_costodia = $args['veh_costodia'] ?? '';
        $this->veh_img = $args['veh_img'] ?? '';
    }

    public function Registrar(){
        if(!is_null($this->veh_id)){ //Si no es NULL, la accion es actualizar 

        }else{
            $this->registrar(); //Si es NULL, la accion es registrar 
        }
    }

    public function ValidarCampos(){
        if(!$this->veh_modelo){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_color){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_pasajeros){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_maletas){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_manejo){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_combustible){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_disponibles){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_costodia){
            self::$errores[] = "Campo Vacio"; 
        }
        if(!$this->veh_img){
            self::$errores[] = "Campo Vacio"; 
        }
        return self::$errores;
    }

    

}

?>