<?php 
$servidor="localhost";
$usuario="root";
$password="";
$baseDeDatos="prueba";

$conexion= new mysqli($servidor,$usuario,$password,$baseDeDatos);
if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}
echo "Conexion establecida...";
?>