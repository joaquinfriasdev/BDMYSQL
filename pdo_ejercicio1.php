<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";

try {
    $conexion= new PDO("mysql:host=$servidor",$usuario,$contrasenia);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida";

}catch (PDOException $error){
    echo "Error: ".$error->getMessage();
}

?>