<?php 

$servidor="localhost";
$usuario="root";
$password="";
$baseDeDatos="prueba";

$conexion= new mysqli($servidor,$usuario,$password,$baseDeDatos);
if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}
echo "Conexion establecida";

$sql="CREATE TABLE alumnos(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    correo VARCHAR(50) NOT NULL
);";

if($conexion->query($sql)==TRUE){
    echo "Tabla creada";
} else {
    echo "Hubo un error";
}


?>