<?php
namespace Model;


class Vehiculos extends ActiveRecord{

    protected static $tabla = 'vehiculos';
    protected static $columnasDB = ['veh_id','veh_nombre','veh_color','veh_pasajeros','veh_maletas','veh_manejo','veh_combustible','veh_disponibles','veh_costodia'];

    //Columnas 
    public $veh_id;
    public $veh_nombre;
    public $veh_color;
    public $veh_pasajeros;
    public $veh_maletas;
    public $veh_manejo;
    public $veh_combustible;
    public $veh_disponibles;
    public $veh_costodia;

}

?>