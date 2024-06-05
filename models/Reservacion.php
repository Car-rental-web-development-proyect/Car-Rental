<?php

namespace Model;

class Reservacion extends ActiveRecord{

    protected static $tabla = 'reservacion';
    protected static $columnasDB = ['tar_id','res_oficinaRenta','res_oficinaEntrega','res_fechaRenta','res_horaRenta','res_fechaEntrega','res_horaEntrega','res_costo','res_usu_id','res_veh_id','res_tar_id'];
 
    public $tar_id;
    public $res_oficinaRenta;
    public $res_oficinaEntrega;
    public $res_fechaRenta;
    public $res_horaRenta;
    public $res_fechaEntrega;
    public $res_horaEntrega;
    public $res_costo;
    public $res_usu_id;
    public $res_veh_id;
    public $res_tar_id;

    public function __construct($args = [])
    {
        $this->tar_id = $args['tar_id'] ?? NULL;
        $this->res_oficinaRenta = $args['res_oficinaRenta'] ?? NULL;
        $this->res_oficinaEntrega = $args['res_oficinaEntrega'] ?? NULL;
        $this->res_fechaRenta = date('Y-m-d'); // anteriormente tenia Y/m/d
        $this->res_horaRenta = date('H:i:s');
        $this->res_fechaEntrega = date('Y-m-d');
        $this->res_horaEntrega = date('H:i:s');
        $this->res_costo = $args['res_costo'] ?? NULL;
        $this->res_usu_id = $args['res_usu_id'] ?? NULL;
        $this->res_veh_id = $args['res_veh_id'] ?? NULL;
        $this->res_tar_id = $args['res_tar_id'] ?? NULL;

    }

    public function guardar() {
        if( !is_null($this->tar_id) ) {    
            $this->actualizar();
        } else {               
            $this->crear();
        }
    }

    public function validar() {     // errores existentes
        if (!$this->res_oficinaRenta) {
            self::$errores[] = "Seleccione una Oficina disponible"; 
        }

        if (!$this->res_oficinaEntrega) {
            self::$errores[] = "Seleccione una Oficina disponible";
        }

        if (!$this->res_fechaRenta) {
            self::$errores[] = "Seleccione una fecha valida";
        }

        if ($this->res_horaRenta) {
            self::$errores[] = "Seleccione una hora disponible";
        }

        if (!$this->res_fechaEntrega) {
            self::$errores[] = "Seleccione una fecha valida";
        }

        if (!$this->res_horaEntrega) {
            self::$errores[] = "Seleccione una hora disponible";
        }

        if (!$this->res_costo) {
            self::$errores[] = "Campo Vacio";
        }

        if (!$this->res_usu_id) {
            self::$errores[] = "Vehiculo no seleccionado";
        }

        if (!$this->res_veh_id) {
            self::$errores[] = "Vehiculo no seleccionado";
        }

        if (!$this->res_tar_id) {
            self::$errores[] = "Tarjeta no registrada";
        }

        return self::$errores;
    }
}

?>