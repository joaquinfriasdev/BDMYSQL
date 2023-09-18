<?php

$servidor="localhost";
$usuario="root";
$contrasenia="";
$baseDeDatos="pdoprueba";

try {
    $conexion= new PDO("mysql:host=$servidor;dbname=$baseDeDatos",$usuario,$contrasenia);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida...";

    $sql="CREATE TABLE alumnos(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(30) NOT NULL,
        correo VARCHAR(50)
    )";

    $conexion->exec($sql);
    echo "Tabla creada";

}catch (PDOException $error){
    echo "Error: ".$error->getMessage();
}



?>