<?php  include 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Formulario</title>
</head>
<body>

<form action="signup-ps.controlador.php"  method="POST">
        <div class="form">
            <div>
            <h1>WashMachine</h1>
            </div>
            <div class="img">
               <!-- <img src="../vista/img/foto-divertida-perro-maquillado-150x150.jpg">-->
            </div>
            <div class="text">
                <input type="text" name="nit" required>
                <span class="barra"></span>
                <label for="">Nit</label>
            </div>
            <div class="text">
                <input type="text" name="nombre"  required>
                <span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="text">
                <input type="text" name="apellido"  required>
                <span class="barra"></span>
                <label for="">Apellido</label>
            </div>
            <div class="text">
                <input type="Email" name="email" required>
                <span class="barra"></span>
                <label for="">Correo</label>
            </div>
            <div class="text">
                <input type="text" name="telefono"  required>
                <span class="barra"></span>
                <label for="">Telefono</label>
            </div>
            <div class="text">
                <input type="password" name="password"  required>
                <span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <button type="submit">Registrarse</button>
           
        </div>
    </form>
</div>

</body>
</html>