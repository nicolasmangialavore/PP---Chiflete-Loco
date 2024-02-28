<?php
    $codigo=$_GET['codigo'];
    $nombre_producto=$_GET['nombre_producto'];
    $fecha_ingreso=$_GET['fecha_ingreso'];
    $fecha_egreso=$_GET['fecha_egreso'];
    $cantidad=$_GET['cantidad'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar datos del producto</title>
    <link rel="stylesheet" href="php/agregar.css">
</head>
<body>
    <form action="php/actualizar.php" method="GET">
        <h1>MODIFICAR DATOS</h1>
        <input type="hidden" name="codigo" value="<?=$codigo?>"><br>
        <div class="name">
            
        <label for="nombre">Nombre del producto *</label><br>
                    <input type="text" name="nombre_producto" required><br>

                    <label for="fecha_ingreso">Fecha de ingreso *</label><br>
                    <input type="date" name="fecha_ingreso" required><br>

                    <label for="fecha_egreso">Fecha de egreso *</label><br>
                    <input type="date" name="fecha_egreso" required><br>

                    <label for="cantidad">Cantidad *</label><br>
                    <input type="number" name="cantidad" required><br>
        
        <input type="submit" class="modificar" value="GUARDAR CAMBIOS">
    </form>
</body>
</html>