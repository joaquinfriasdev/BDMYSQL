<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida...";

    $conexion->beginTransaction();
    $sql="INSERT INTO alumnos(id,nombre,correo) VALUES (null, 'Joaquin 1', 'joaquin@1gmail.com')";
    $conexion->exec($sql);

    $sql="INSERT INTO alumnos(id,nombre,correo) VALUES (null, 'Joaquin 2', 'joaquin@2gmail.com')";
    $conexion->exec($sql);

    $sql="INSERT INTO alumnos(id,nombre,correo) VALUES (null, 'Joaquin 3', 'joaquin@3gmail.com')";
    $conexion->exec($sql);
    $conexion->commit();

    echo "Datos insertados";

}catch (PDOException $error){
    $conexion->rollBack();
    echo "Error: ".$error->getMessage();
}



?>