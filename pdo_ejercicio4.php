<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida...";

    $sql="INSERT INTO alumnos(id,nombre,correo) VALUES (null, 'Joaquin', 'joaquin@gmail.com')";

    $conexion->exec($sql);
    echo "Datos insertados";

}catch (PDOException $error){
    echo "Error: ".$error->getMessage();
}



?>