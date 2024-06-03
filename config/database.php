<?php
function connDB() : mysqli {
    $conn = new mysqli('localhost','root','DAEMHELO10*#','beecar');
    if(!$conn){
        echo "Error: no se logro conectar DB";
        exit;
    }
    return $conn;
}
?>