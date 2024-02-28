<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar Sesión | Chiflete Loco</title>
	<link rel="stylesheet" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="img/ola.png">
	<p style="color: white;background-color: green;padding: 5px 5px;"></p>
	<div class="container">
		<div class="img">
			<img src="img/undraw_in_the_office_re_jtgc (1).svg">
		</div>
		<div class="login-content">
			
			<form action="php/login.php" method="get">
				<img src="img/foto-de-perfil-svg.svg">
				<h2 class="title">¡Bienvenido!</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input" name="user" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="pass" required>
            	   </div>
            	</div>
            	<a href="restablecer.html">¿Se olvidó la contraseña?</a>
            	<input type="submit" class="btn" value="Iniciar sesión">
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
