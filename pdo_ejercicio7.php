<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia=$conexion->prepare("INSERT INTO alumnos(id,nombre,correo) VALUES(NULL,:nombre,:correo)");
    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":correo",$correo);
    $nombre="Gerardo";
    $correo="gerado@gmail.com";
    $sentencia->execute();

}catch (PDOException $error){

    echo "Error: ".$error->getMessage();
}
