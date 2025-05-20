<?php

function conectarDB() : mysqli{
    $db = mysqli_connect("localhost","root","linda","systemtech-crud");
    
    if(!$db){
        echo "no se conecto la base de datos.";
        exit;
    }
    return $db;
}