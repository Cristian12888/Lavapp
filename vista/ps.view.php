<?php
require 'dashboard.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class="container">
		<h1>WashMachine</h1>
			<div class="row">
			  <div class="col">
				<label for=""></label><br><br>
				<br>
				<br>
				<br>
				<br>			
				<button type="button" class="btn btn-light col-sm-8">Light</button>
			  </div>
			  <div class="col">
				<label for="">Nombre - Apellido</label>
				<label for=""></label>
				<label for="">Correo</label>
				<label for=""><?php echo $usid; ?></label>
				<label for="">Nit</label>
				<label for=""><?php echo $_SESSION["nit"]; ?></label>
			  </div>
			</div>
		  <br>
			<form>
				<div class="row">
				  <div class="col">
					<label for="">Nombre</label>
					<input type="text" name="nombre" class="form-control" >
					<label for="">Telfono</label>
					<input type="text" name="telefono" class="form-control" >
					<label for="">Imagen Del Lavadero</label>
					<input type="file" name="img" class="form-control" >
				  </div>
				  <div class="col">
					<label for="">Lavadero</label>
					<input type="text" name="lavadero" class="form-control" >
					<label for="">Horario</label>
					<input type="text" name="horar" class="form-control" >
					<label for="">Precio Del Servicio</label>
					<input type="text" name="pservicio" class="form-control"><br>
					<button type="button" class="btn btn-primary col-sm-8">Guardar</button>
				  </div>
				</div>
			  </form>
	</div>