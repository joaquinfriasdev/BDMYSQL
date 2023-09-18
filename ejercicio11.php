<?php
include "conexion.php";


$sql="DELETE FROM alumnos WHERE id=3";

if ($conexion->query($sql)==TRUE){
    echo "Registro eliminado";
} else{
    echo "Hubo problemas de borrado".$conexion->error;
}

?>