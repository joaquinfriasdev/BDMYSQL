<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia=$conexion->prepare("DELETE FROM alumnos WHERE id>3");
    $sentencia->execute();
    echo "Registros borrados";

}catch (PDOException $error){

    echo "Error: ".$error->getMessage();
}
