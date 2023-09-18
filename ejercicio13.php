<?php
$servidor="localhost";
$usuario="root";
$password="";
$baseDeDatos="prueba";

$conexion= new mysqli($servidor,$usuario,$password,$baseDeDatos);

$resultado=$conexion->query("CALL obtenerNombre()"); //Se puede ejecutar la sentencia SQL a través de una variable o directamente en el query
while ($fila= $resultado->fetch_assoc()){
    echo "Dato: ".$fila['dato']."<br>";
}
?>