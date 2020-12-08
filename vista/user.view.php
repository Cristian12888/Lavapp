<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../vista/css/dashboard.css">
	<title>Document</title>
</head>
<body>
<div class="menu">
	<header class="header">
			<div class="container">
			<div class="btn-menu">
				<label for="btn-menu">☰</label>
			</div>
				<div class="logo">
					<h1>hola</h1>
				</div>
			</div>
		</header>
		<div class="capa"></div>
	<input type="checkbox" id="btn-menu">
	<div class="container-menu">
		<div class="cont-menu">
			<nav>
				<img src="../vista/img/foto-divertida-perro-maquillado-150x150.jpg">
				<a href="#"><?php session_start(); echo $_SESSION["userid"] ?></a>
				<a href="#">Lavadero</a>
				<a href="#">Favoritos</a>
				<a href="#">Configuracion</a>
				<a href="../controlador/logout.php">Salir</a>
				
			</nav>
			<label for="btn-menu">✖️</label>
		</div>
	</div>
</div>
<div class="container">
<div class="row mt-3">
 
 <div class="col-md-12">

   <h2 class="h2s">Direcciónes en la Base de Datos MySQL</h2>

   <!-- Archivo PHP con la lógica para mostrar una tabla con las ubicaciones --> 
   <?php include('../modelo/maps.model.php'); ?> 
			 
 </div>
		   
</div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvE6_rf0Z1ZnbmPQmT4yA2duMOdQEyc6Y"></script>
<script type="text/javascript" src="../js/maps.js"></script>
</body>
</html>