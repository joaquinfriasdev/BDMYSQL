<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sentencia=$conexion->prepare("SELECT * FROM alumnos");
    $sentencia->execute();

    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $resultado=($sentencia->fetchAll());
    //print_r($resultado);
    foreach ($resultado as $registro){
        echo "id: ".$registro['id']."nombre: ".$registro['nombre']."correo: ".$registro['correo']."<br>";
    }
}catch (PDOException $error){

    echo "Error: ".$error->getMessage();
}
