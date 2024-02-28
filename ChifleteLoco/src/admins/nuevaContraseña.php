<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer contraseña</title>
    <link rel="stylesheet" href="css/restablecer_contraseña.css?1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
    <div class="login-content">
        <form action="php/actualizarContraseña.php" method="get">              
            <h2 class="title">Restablecer contraseña</h2>
            <img src="img/undraw_secure_files_re_6vdh (1).svg">  
               <div class="input-div one">
                  <div class="i">
                          <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                          <h5>Nueva contraseña</h5>
                          <input type="text" class="input" name="nuevaContra" required>
                          <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                  </div>
               </div>
            <input type="submit" class="btn" value="Confirmar">
        </form>
    </div>
    <script src="js/login.js"></script>
</body>
</html>