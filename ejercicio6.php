<?php
include "conexion.php";

$sql="INSERT INTO alumnos (id,nombre,correo) VALUES (NULL,'Joaquin 1','joaquin@gmail.com');";
$sql.="INSERT INTO alumnos (id,nombre,correo) VALUES (NULL,'Joaquin 2','joaquin@gmail.com');";
$sql.="INSERT INTO alumnos (id,nombre,correo) VALUES (NULL,'Joaquin 3','joaquin@gmail.com');";

if($conexion->multi_query($sql)==TRUE){
    $id=$conexion->insert_id;
    echo "Registro agregado con el id:".$id;
} else {
    echo "Hubo un error".$conexion->error;}

    $conexion->close();

?>