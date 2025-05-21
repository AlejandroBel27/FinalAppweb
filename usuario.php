<?php

//importar la conexion 
require 'includes/config/database.php';
$db = conectarDB();

//Crear el email y la pass
$email  = "correo@correo.com";
$password = "123456";
//Hasheo para la password.
$passwordHash = password_hash($password, PASSWORD_BCRYPT);




//query para crear el usuario
$query = "INSERT INTO usuario (email, password) VALUES ('${email}', '${passwordHash}');";
//agregarlo a la base de datos
mysqli_query($db, $query);