<?php
include "conexion.php";

//prepare

$instruccion= $conexion->prepare("INSERT INTO 
alumnos(id,nombre,correo) VALUES (NULL,?,?)"); //Identificamos la instruccion

$instruccion->bind_param("ss",$nombre,$correo); // Generamos la instruccion y reemplazamos las variables.

$nombre= "Josué"; // Reemplazamos las variables con sus parametros
$correo= "josue@gmail.com";
$instruccion->execute(); //Ejecutamos la instruccion

$nombre="Josué 1";
$correo="josue1@gmail.com";
$instruccion->execute();

$nombre="Josué 2";
$correo="josue2@gmail.com";
$instruccion->execute();

$conexion->close();

?>