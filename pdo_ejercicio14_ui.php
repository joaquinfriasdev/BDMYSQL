<?php include "pdo_ejercicio14.php"?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nombre de la tarea
        <input type="text" name="tarea" id="tarea"> <br>
        <input type="submit" value="Agregar">
    </form>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Tarea</th>
                <th>Acción</th>
            </tr>
        </thead>
        <?php foreach($datos as $dato){?>
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['tarea'];?></td>
            <td> <a href="?id=<?php echo $dato['id'];?>"> [Borrar] <a/></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>