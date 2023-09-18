<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

$conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_POST){
    $sentencia=$conexion->prepare("INSERT INTO tareas(id,tarea) VALUES (NULL,:tarea)");
    $sentencia->bindParam(':tarea',$tarea);
    $tarea=$_POST['tarea'];
    $sentencia->execute();
    echo "Registro agregado";
    header("Location:?");
}

if($_GET){
    $sentencia=$conexion->prepare("DELETE FROM tareas WHERE id=:id");
    $sentencia->bindParam(':id',$id);
    $id=$_GET['id'];
    $sentencia->execute();
    header("Location:?");
}

$sentencia=$conexion->prepare("SELECT * FROM tareas");
$sentencia->execute();
$resultado=$sentencia->setFetchMode(PDO::FETCH_ASSOC);
$datos=$sentencia->fetchAll();

?>