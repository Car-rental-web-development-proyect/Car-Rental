<?php
function connDB() : mysqli {
    $conn = new mysqli('localhost','root','luis1995','beecar');
    if(!$conn){
        echo "Error: no se logro conectar DB";
        exit;
    }
    
    return $conn;
}

?>