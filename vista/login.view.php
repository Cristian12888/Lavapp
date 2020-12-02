<?php require 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/css/index.css">
    
    <title>Login</title>
</head>
<body>
    <form action="../controlador/login.php" id="fom" method="POST">
        <div class="form">
            <h1>WashMachine</h1><br>
            <div class="img">
                <img src="../vista/img/foto-divertida-perro-maquillado-150x150.jpg">
            </div>
            <div class="text">
                <input type="text" name="email"  required>
                <span class="barra"></span>
                <label for="">Correo</label>
            </div>
            <div class="text">
                <input type="text" name="password" required>
                <span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            

        <button type="submit">Iniciar sesion</button>
           <a href="./choose_user.php"><button type="button" >Crear cuenta</button></a> 
               
        </div>
       <?php if(isset($_SESSION["message"])){ echo $_SESSION["message"];}?>

    </form>
</body>
</html>