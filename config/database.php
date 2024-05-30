<?php
function connDB() : mysqli {
    $conn = new mysqli('localhost','root','colocaTuContraseñadeWorkbrench','beecar');
    if(!$conn){
        echo "Error: no se logro conectar DB";
        exit;
    }
    
    return $conn;
}

?>