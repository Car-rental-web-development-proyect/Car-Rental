<?php

namespace Model;

class Usuarios extends ActiveRecord {
    //DB
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['usu_id','usu_nombre','usu_apepaterno','usu_apematerno','usu_correo','usu_password'];

    //Columnas 
    public $usu_id;
    public $usu_nombre;
    public $usu_apepaterno;
    public $usu_apematerno;
    public $usu_correo;
    public $usu_password;


    public function __construct($args = []){
        $this->usu_id = $args['usu_id'] ?? null;
        $this->usu_nombre = $args['usu_nombre'] ?? '';
        $this->usu_apepaterno= $args['usu_apepaterno'] ?? '';
        $this->usu_apematerno= $args['usu_apematerno'] ?? '';
        $this->usu_correo = $args['usu_correo'] ?? '';
        $this->usu_password = $args['usu_password'] ?? '';
    }

    public function Registrar(){
        if(!is_null($this->usu_id)){ //Si no es NULL, la accion es actualizar 

        }else{
            $this->registrar(); //Si es NULL, la accion es registrar 
        }
    }

    public function ValidarCampos(){
        if(!$this->usu_nombre){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->usu_apepaterno){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->usu_apematerno){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->usu_correo){
            self::$errores[] = "Campo Vacio"; 
        }

        if(!$this->usu_password){
            self::$errores[] = "Campo Vacio"; 
        }
        
        return self::$errores;

    }



    




}

?>