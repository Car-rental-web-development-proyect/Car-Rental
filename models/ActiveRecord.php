<?php
namespace Model; 

class ActiveRecord{
  protected static $db;
  protected static $columnasDb = [];
  protected static $tabla = ''; 

  protected static $errores = [];

  // Conexion a DB 
  public static function setDB($database){
    self::$db = $database;
  }

  // Funciones "ideales" para cada tipo de consulta 
  public function registrar(){

    $atributos = $this->sanitizarDatos();

    $query = "INSERT INTO " . static::$tabla . " ( "; //Referencia a la clase 
    $query .= join(', ', array_keys($atributos)); // separa con , cada columna de la tabla 
    $query .= " ) VALUES ('"; 
    $query .= join("' , '", array_values($atributos)); // agrega  'atributo' para cada valor entrante de la tabla
    $query .= "' ) "; // cierra query 

    $resultado = self::$db->query($query);

    //if($resultado){
    //  header('Location: /admin?resultado=1');
    //}

  }

  public function sanitizarDatos(){ 
    $atributos = $this->atributos();
    $sanitizado = [];

    foreach($atributos as $key => $value ){ 
        $sanitizado[$key] = self::$db->escape_string($value); //Elimina caracteres especiales
    }

    return $sanitizado;
  }

  // recopilacion de atributos en DB
  public function atributos() {
    $atributos = [];

    foreach( static::$columnasDB as $columna ){   
         
        if ($columna === 'usu_id') continue;  // Excluye la columna para no ser contemplada en la consulta (INSERT - UPDATE)
                                                       
        $atributos[$columna] = $this->$columna;   
    }

    return $atributos;
  }

  // Manejo de errores 
  public function ValidarCampos() {    
            
    static::$errores = [];
    return static::$errores;
  }





}

?>