<?php
$codigo = $_GET['codigo'];

$conexion=mysqli_connect('localhost','root', '', 'chifletero');
$consulta= "delete from producto where codigo like $codigo";
$respuesta=mysqli_query($conexion, $consulta);
if($respuesta){
    header("Location: ../inicio.php");
}else{
    echo "Error al eliminar el producto";
}
?>