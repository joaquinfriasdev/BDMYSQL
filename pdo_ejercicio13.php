<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia=$conexion->prepare("CALL obtenerNombre()");
    $sentencia->execute();

    $resultado=($sentencia->fetchAll());
    print_r($resultado);

}catch (PDOException $error){

    echo "Error: ".$error->getMessage();
}
