<?php
include "conexion.php";


$sql="UPDATE alumnos SET nombre='Gerardo' WHERE id=2";

if ($conexion->query($sql)==TRUE){
    echo "Registro actualizado";
} else{
    echo "Hubo problemas para actualizar el registro".$conexion->error;
}

?>