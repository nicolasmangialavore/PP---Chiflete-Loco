<?php
$user = $_GET['user'];
$pass = $_GET['pass'];

$conexion = new mysqli("localhost", "root", "", "chifletero");

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

if (isset($user) && isset($pass)) {

    $statement = $conexion->prepare("SELECT * FROM admins WHERE user = ? AND pass = ?");
    
    $statement->bind_param("ss", $user, $pass);

    $statement->execute();

    $result = $statement->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["user"] = $user;
        header("Location: ../inicio.php");
        echo htmlspecialchars($user);
    } else {
        echo "Nombre de usuario y/o contraseña incorrectos";
    }

    $statement->close();
}

$conexion->close();
?>