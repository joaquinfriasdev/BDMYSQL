<?php 

$servidor="localhost";
$usuario="root";
$password="";

$conexion= new mysqli($servidor,$usuario,$password);
if($conexion->connect_error){
    die("Error de conexion: " . $conexion->connect_error);
}
echo "Conexion establecida";

$sql="CREATE  DATABASE prueba";

if($conexion->query($sql)===TRUE){
    echo "Base de datos creada";
} else{
    echo "Error ".$conexion->error;
}



?>