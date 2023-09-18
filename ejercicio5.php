<?php
include "conexion.php";

$sql="INSERT INTO alumnos (id,nombre,correo) VALUES (NULL,'Joaquin','joaquin@gmail.com')";

if($conexion->query($sql)==TRUE){
    $id=$conexion->insert_id;
    echo "Registro agregado con el id:".$id;
} else {
    echo "Hubo un error".$conexion->error;}

    $conexion->close();

?>