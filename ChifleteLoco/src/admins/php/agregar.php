<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento</title>

</head>
<style>
    body{
    background-color: rgb(0, 0, 78);
}

body{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    align-items: center;
    justify-content: center;
}
h1{
    color:white;
    text-decoration: none;
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

a{
    color:white;
    text-decoration: none;
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>
<body>

<?php
    $nombre_producto=$_GET['nombre_producto'];
    $fecha_ingreso=$_GET['fecha_ingreso'];
    $fecha_egreso=$_GET['fecha_egreso'];
    $cantidad=$_GET['cantidad'];
    


$conexion=mysqli_connect("localhost", "root", "", "chifletero") or die('Error al conectarse.');

$consulta= "insert into producto (nombre_producto, fecha_ingreso, fecha_egreso, cantidad)values('$nombre_producto', '$fecha_ingreso', '$fecha_egreso', $cantidad)";
$respuesta=mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>
    <center>
        <h1>Producto ingresado correctamente</h1><br>
        <a href="../inicio.php">Volver</a>
    </center>
  
</body>
</html>