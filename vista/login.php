<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/css/index.css">
    
    <title>Login</title>
</head>
<body>
    <form action="../controlador/Ct_registro_ps.php" id="fom" method="POST">
        <div class="form">
            <h1>Lavapp</h1><br>
            <div class="img">
                <img src="../vista/img/foto-divertida-perro-maquillado-150x150.jpg">
            </div>
            <div class="text">
                <input type="text" name="" id="name" required>
                <span class="barra"></span>
                <label for="">Usuario</label>
            </div>
            <div class="text">
                <input type="text" name="" id="name" required>
                <span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            

        <button type="submit">Iniciar sesion</button>
           <a href="choose_user.php"><button type="button" >Crear cuenta</button></a> 
           
    
        </div>
       

    </form>
</body>
</html>