<?php
include "conexion.php";


$sql="SELECT * FROM alumnos WHERE id>5 ORDER BY id asc"; // Escribimos la sentencia SQL y la guardamos en la variable sql
$resultado=$conexion->query($sql); //Ejecutamos la sentencia sql utilizazndo el query

if ($resultado->num_rows>0){ //Pregunta si la cantidad de filas es mayor a 0 para saber si la tabla no está vacía

    while ($fila=$resultado->fetch_assoc()){
        //print_r($fila);
        echo "id: ".$fila['id']." Nombre: ".$fila['nombre']." Correo: ".$fila['correo']."<br/>"; 
    }
    
} else{ echo "No hay registros";}
?>