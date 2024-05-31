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
  // Registrar Datos 
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

  //Actualizar 1 registro 
  public function actualizar() {
    
    // Sanitizar los datos
    $atributos = $this->sanitizarDatos();

    $valores = [];
    foreach($atributos as $key => $value) {
        $valores[] = "{$key}='{$value}'";
    }

    $query = " UPDATE " . static::$tabla ." SET ";  // referencia a clase
    $query .= join(', ', $valores);

    if(static::$tabla == 'vehiculos') {
        $query .= " WHERE veh_id = " . self::$db->escape_string($this->veh_id);
    } 
    $query .= " LIMIT 1 ";

    $resultado = self::$db->query($query);
    // colocar if 
    
  }

  // Muestra todos los registros de la tabla 
  public static function mostrar(){
    $query = "SELECT * FROM " . static::$tabla ;

    $resultado = self::consultarSQL($query);

    return $resultado;

  }

  public static function getErrores() { 
    return static::$errores;
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
        if ($columna === 'veh_id') continue;
        if ($columna === 'tar_id') continue;
        if ($columna === 'res_id') continue;
        if ($columna === 'ent_id') continue;                                                       
        $atributos[$columna] = $this->$columna;   
    }

    return $atributos;
  }

  // Manejo de errores 
  public function ValidarCampos() {    
            
    static::$errores = [];
    return static::$errores;
  }

  public static function consultarSQL($query) {
    // Consultar la base de datos
    $resultado = self::$db->query($query);  // Se recibe el arreglo asociativo

    // Iterar los resultados
    $array = [];

    while($registro = $resultado->fetch_assoc()) {  // Mientras registro tenga datos existentes en la db 
        $array[] = static::crearObjeto($registro);    // El arreglo se llena de objetos, los cuales tendran la misma forma que nuestra clase
    }

    // Liberar la memoria
    $resultado->free();

    // Retornar los resultados
    return $array;
  }

  protected static function crearObjeto($registro) {
    $objeto = new static; // Instancia a partir de la clase actual (existen dos self y static, y si, static apunta a la clase del cual se llamo)

    foreach($registro as $key => $value) {
        if( property_exists($objeto, $key) ) { 
            $objeto->$key = $value;
        }
    }

    return $objeto;
  }





}

?>