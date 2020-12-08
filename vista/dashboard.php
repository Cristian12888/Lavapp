<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../vista/css/dashboard.css">
	<title>Document</title>
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
			</div>
		</div>
	</header>
	<div class="capa"></div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
            <img src="../vista/img/foto-divertida-perro-maquillado-150x150.jpg">
			<a href="#"><?session_start(); php echo $_SESSION["userid"] ?></a>
			<a href="#">Lavadero</a>
			<a href="#">Favoritos</a>
			<a href="#">Configuracion</a>
			<a href="../controlador/logout.php">Salir</a>
			
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>
