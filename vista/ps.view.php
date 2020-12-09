<?php
require 'dashboard.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">


<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">



<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
  integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
  integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
  crossorigin="anonymous"
></script>
<div class="container">
		<h1>WashMachine</h1>
			<div class="row">
			  <div class="col">
				<label for=""></label><br><br>
				<br>
				<br>
				<br>
				<button type="button" class="btn btn-light col-sm-8" data-bs-toggle="modal" data-bs-target="#exampleModal">
	            Informacion Del Lavadero
                </button>
			  </div>
			  <div class="col">
				<label for="">Nombre - Apellido</label><br>
				<label for=""><?php echo $nom." ".$apell; ?></label><br>
				<label for="">Correo</label><br>
				<label for=""><?php echo $usid; ?></label><br>
				<label for="">Nit</label><br>
				<label for=""><?php echo $nit; ?></label>
			  </div>
			</div>
		  <br>
		  <form>
  <div class="row">
    <div class="col">
	<label for="">Nombre</label><br>
	<label for=""></label><br>
	<label for="">Telefono</label><br>
    </div>
    <div class="col">
      <label for="">Direccion</label><br>
	  <label for=""></label><br>
	  <label for="">Horario</label><br>
	  <label for=""></label><br>
	  <label for="">Servicio</label><br>
    </div>
  </div>
</form>
		  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Informacion Del Lavadero</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		<form action="../controlador/ps_con.php"  method="POST">
				<div class="row">
				  <div class="col">
					<label for="">Nombre</label>
					<input type="text" name="nombre" class="form-control" >
					<label for="">Telfono</label>
					<input type="text" name="telefono" class="form-control" >
					
				  </div>
				  <div class="col">
					<label for="">Direccion</label>
					<input type="text" name="direccion" class="form-control" >
					<label for="">Horario</label>
					<input type="text" name="horario" class="form-control" >
					<label for="">Precio Del Servicio</label>
					<input type="text" name="precioserv" class="form-control"><br>
				  </div>
				</div>
				<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
		  <button type="submit" class="btn btn-primary ">Guardar</button>
		</div>
	    </form>
		</div>		
	  </div>
	</div>
  </div>
</div>
	