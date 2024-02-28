<?php

    $nombre_producto=$_GET['nombre_producto']
    $fecha_ingreso=$_GET['fecha_ingreso']
    $fecha_egreso=$_GET['fecha_egreso']
    $cantidad=$_GET['cantidad']

$conexion=mysqli_connect('localhost','root', '', 'chifletero');

$consulta= "update producto set nombre_producto='$nombre_producto', fecha_ingreso='$fecha_ingreso', fecha_egreso='$fecha_egreso', cantidad=$cantidad, fecha_nacimiento='$nacimiento', telefono=$telefono, anio=$anio, division=$division where legajo like $legajo";

$respuesta=mysqli_query($conexion, $consulta);

if($respuesta){
    header("Location:../inicio.php");
}else{
    echo "Error al modificar los datos";
}

?>