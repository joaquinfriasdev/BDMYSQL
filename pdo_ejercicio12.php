<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia=$conexion->prepare("UPDATE alumnos SET nombre='Gerardo' WHERE id=2");
    $sentencia->execute();
    echo "Registro actualizado";

}catch (PDOException $error){

    echo "Error: ".$error->getMessage();
}
