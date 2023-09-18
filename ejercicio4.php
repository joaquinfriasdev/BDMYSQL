<?php 

$servidor="localhost";
$usuario="root";
$password="";
$baseDatos="prueba";

$conexion= new mysqli($servidor,$usuario,$password,$baseDatos);

if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}
echo "Conexión establecida";

$sql="INSERT INTO alumnos (id,nombre,correo) VALUES (NULL,'Joaquin','joaquin@gmail.com')";

if($conexion->query($sql)==TRUE){
    echo "Registro exitoso";
} else {
    echo "Hubo un error".$conexion->error;}

    $conexion->close();

?>