<?php 
    $conexion=mysqli_connect("localhost", "root", "", "chifletero") or die('Error al conectarse.');
    session_start();
    if(empty($_SESSION["user"])){
        header("Location: index.html");
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administradores | Chiflete Loco</title>
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
</head>
<body>
    <div class="grid-container">
        <header>
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined" >account_circle</span><?php $variable = $_SESSION["user"]; echo " ".htmlspecialchars($variable); }?>
            </div>
        </header>

        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    A.B.M.
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                </li>
                <li class="sidebar-list-item">
                    <a href="agregar.html" style="text-decoration: none;color: white"><span class="material-icons-outlined">product_add</span> Agregar producto</a>
                </li>
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">settings</span> Configuración
                </li>
        </aside>

        <main>
        <div class="filters">
        </div>
        <table>
            <thead>
                <th>Codigo</th>
                <th>Nombre Producto</th>
                <th>Fecha Ingreso</th>
                <th>Fecha Egreso</th>
                <th>Cantidad</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </thead>

            <?php
                $consulta= "select* from producto";
                $respuesta=mysqli_query($conexion, $consulta);

                while($mostrar=mysqli_fetch_array($respuesta)){
            ?>
            <tr>
                <td><?php echo $mostrar['codigo'] ?></td>
                <td><?php echo $mostrar['nombre_producto'] ?></td>
                <td><?php echo $mostrar['fecha_ingreso'] ?></td>
                <td><?php echo $mostrar['fecha_egreso'] ?></td>
                <td><?php echo $mostrar['cantidad'] ?></td>
                <td><a href="editar.php?
                codigo=<?php echo $mostrar['codigo']?> &
                nombre_producto=<?php echo $mostrar['nombre_producto']?>&
                fecha_ingreso=<?php echo $mostrar['fecha_ingreso']?>&
                fecha_egreso=<?php echo $mostrar['fecha_egreso']?> &
                cantidad=<?php echo $mostrar['cantidad']?>            
                ">Modificar</a></td>
                <td class="delete"><a href="php/eliminar.php?
                legajo=<?php echo $mostrar['legajo']?>">Eliminar</a></td>
            </tr>
            <?php
                }
                mysqli_close($conexion);
            ?>
        </table>
        </form>
        <a href="php/logout.php">Cerrar Sesión</a><div></div>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe_6yRdz0GthkkMioqSnWj9M3ikPQPE8nMr2jp1tF22HObUjw/viewform?usp=sf_link">Factura</a>
        </main>
    
        
    </div>

    <script src="js/login.js"></script>
    
</body>
</html>