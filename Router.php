<?php

namespace MVC;
class Router {
    public $rutasGET = [];
    public $rutasPOST = [];

    // INICIALIZAR O DEFINIR RUTAS
    public function get($url, $fn) {
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn) {
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas() {
        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];
        

      //   debuggear($urlActual);

        if($metodo === 'GET') {
            $fn = $this->rutasGET[$urlActual] ?? NULL;
        } else{
            $fn = $this->rutasPOST[$urlActual]  ?? NULL;
        }

        if($fn) {
            call_user_func($fn, $this);
        } else {
            echo "Pagina no encontrada";
        }
    }

   // Coloca una vista determinada 
    public function render($view, $datos = []) {
        foreach($datos as $key => $value){
            $$key = $value;                     
        }

        ob_start(); // Inicia el almacenamiento en memoria
        include_once __DIR__ . "/views/$view.php"; // Este se almacena en memoria y no se ejecuta (pues lo mostraria en la pagina sin mas)

        $contenido = ob_get_clean(); // Limpiamos y obtenemos la memoria para no colapsar la pagina
        include_once __DIR__ . '/views/layout.php';
    }
}