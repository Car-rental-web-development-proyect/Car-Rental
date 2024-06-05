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

        $this->Crear(); //Si es NULL, la accion es registrar 
    }

    public function ValidarCampos(){
        if(!$this->usu_nombre){
            self::$errores[] = "Ingrese un nombre valido"; 
        }

        if(!$this->usu_apepaterno){
            self::$errores[] = "Ingrese un apellido valido"; 
        }

        if(!$this->usu_apematerno){
            self::$errores[] = "Ingrese un apellido valido"; 
        }

        if(!$this->usu_correo){
            self::$errores[] = "ingrese un correo valido"; 
        }

        if(!$this->usu_password){
            self::$errores[] = "Ingrese una contraseña valida"; 
        }
        
        return self::$errores;

    }
     // Muestra todos los registros de la tabla 
   public function buscar_usuario(){
      $query = "SELECT * FROM " . self::$tabla . " WHERE usu_correo = '" . $this->usu_correo . "' LIMIT 1";
        $resultado = self::$db->query($query);
        if(!$resultado->num_rows) {
            self::$errores[] = 'El Usuario no existe';
            return;
        }
        return $resultado;
      }

      public function autenticar($usuario) {
         // debuguear($usuario);
         // debuguear($encontrado);
         session_start();
 
         // Llenar el arreglo de sesion
         $_SESSION['usuario'] = $usuario;
         $_SESSION['login'] = true;
 
         header('Location: /');
     }

   public function comprobarPassword($resultado) {
      $usuario = $resultado->fetch_object();
      $autenticado = False;
      if($usuario->usu_password == $this->usu_password) {
         $autenticado = True;
      }

      if(!$autenticado) {
            self::$errores[] = 'El Password es Incorrecto';
            return;
      }
      if($autenticado) {
         return $usuario;
      }
   }

   }

?>