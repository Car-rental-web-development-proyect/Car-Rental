<?php

namespace Model;

class Entrega extends ActiveRecord{

    protected static $tabla = 'entrega';
    protected static $columnasDB = ['ent_id','ent_res_id','ent_age_id','ent_fechaReal','ent_multa','ent_danos','ent_costoTotal'];

    //Columnas 
    public $ent_id;
    public $ent_res_id;
    public $ent_age_id;
    public $ent_fechaReal;
    public $ent_multa;
    public $ent_danos;
    public $ent_costoTotal;


    public function __construct($args = []){
        $this->ent_id = $args['ent_id'] ?? NULL;
        $this->ent_res_id = $args['ent_res_id'] ?? NULL; 
        $this->ent_age_id = $args['ent_age_id'] ?? NULL; 
        $this->ent_fechaReal= date('Y-m-d');
        $this->ent_multa= $args['ent_multa'] ?? NULL;
        $this->ent_danos = $args['ent_danos'] ?? '';
        $this->ent_costoTotal = $args['ent_costoTotal'] ?? NULL;
    }

    public function Registrar(){
        if(!is_null($this->ent_id)){ //Si no es NULL, la accion es actualizar 

        }else{
            $this->registrar(); //Si es NULL, la accion es registrar 
        }
    }

    public function ValidarCampos(){
        if(!$this->ent_res_id){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->ent_age_id){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->ent_fechaReal){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->ent_multa){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->ent_danos){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->ent_costoTotal){
            self::$errores[] = "Campo Vacio"; 
        }
        
        return self::$errores;

    }

    
}


?>