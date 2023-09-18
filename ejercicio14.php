<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="prueba";

$conexion= new mysqli($servidor,$usuario,$contrasenia,$baseDeDatos);


if($conexion->connect_error){
    die("No se pudo conectar a la base de datos".$conexion_error);
}

echo "Archivo para ingresar tareas";

if($_POST){
    $tarea=$_POST['tarea'];
    $stmt= $conexion->prepare("INSERT INTO tareas(id,tarea) VALUES (NULL,?)");
    $stmt->bind_param("s",$tarea);
    $stmt->execute();
    echo "Se ha insertado un registro a la base de datos";
}

if($_GET){
    $id=$_GET['id'];
    $stmt= $conexion->prepare("DELETE FROM tareas WHERE id=?");
    $stmt->bind_param("s",$id);
    $stmt->execute();
}

$sql="SELECT * FROM tareas ORDER BY id asc";
$resultado=$conexion->query($sql);
$datos=$resultado->fetch_all();

?>