<html>
<?php
setlocale(LC_ALL,"es_ES");

include_once "front.php"
?>
	<head>
		<meta charset="utf-8">
		<title>Vehiculos</title>
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
<?php 
			menu();
?>
		<div class="container">
			<h1>Gestión de Vehiculos</h1>

			<h2>Formulario de alta de vehiculo</h2>
			<div class="form-cliente">
				<form method="post" action="vehiculo-post.php">
		
					<div class="form-group">
						<label >Matricula:</label>
						<input type="text" class="form-control uppercase" id="name" name="placa" required>
					</div>
					<div class="form-group">
						<label>Cliente:</label>
						<?php sel_clientes();?>
					</div>
					<div class="form-group">
						<label>Marca:</label>
						<input type="text" name="marca" id="marca" class="uppercase form-control" required>
					</div>
					<div class="form-group">
						<label>Modelo:</label>
						<input type="text" name="modelo" id="modelo" class="uppercase form-control" required>
					</div>
					<div class="form-group">
						<label>Nº Bastidor:</label>
						<input type="text" name="bastidor" id="bastidor" class="uppercase form-control" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary float-right">Alta vehiculo</button>
					</div>
				</form>
			</div>	
		</div>
<!-- Listado de vehiculos-->
		<div class="container">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			    	<th scope="col">Nº Linea</th>
			    	<th scope="col">Matricula</th>
			    	<th scope="col">Nº Bastidor</th>
			    	<th scope="col">Marca</th>
			    	<th scope="col">Modelo</th>
			    	<th scope="col">Propietario</th>
			    </tr>
			  </thead>
			  <tbody>
			  
<?php
				tbody_vehiculos();
?>
		
			  </tbody>
			</table>
		</div>
	</body>
</html>