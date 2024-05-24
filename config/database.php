<?php
function connDB() : mysqli {
    $conn = new mysqli('localhost:8889','root','root','beecar');
    if(!$conn){
        echo "Error: no se puedo conectar DB";
    }
    exit;
    return $conn;
}

?>