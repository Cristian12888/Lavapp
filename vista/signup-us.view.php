
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/css/index.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"  method="POST">
        <div class="form">
    <title>Login</title>
            <h1>Lavapp</h1><br>
            <div class="img">
               <!-- <img src="../vista/img/foto-divertida-perro-maquillado-150x150.jpg">-->
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
</body>
</html>