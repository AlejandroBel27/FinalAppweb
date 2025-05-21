<?php

    require 'app.php';

function incluirTemplate(String $nombre, bool $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php"; 
}

function estaAutenticado() : bool {
    session_start();
    //si no se encuentra autenticado lo manda al inicio.
    $auth = $_SESSION['login'];
    if($auth){
        return true;
    }
    return false;
}
