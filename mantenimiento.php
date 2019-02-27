<html>
<?php
setlocale(LC_ALL,"es_ES");
include_once "front.php"
?>
	<head>
		<meta charset="utf-8">
		<title>Mantenimientos</title>
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
<?php
		menu();
?>
		<div class="container">
			<h1>Mantenimientos. </h1>
			<h2>Formulario de alta de clientes</h2>
			<div class="form-cliente">
				<form method="post" action="mantenimiento-post.php">
		
					<div class="form-group">
						<label>Nombre del mantenimiento:</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					
					<div class="form-group">
					    <label for="exampleFormControlSelect1">Tipo Mantenimiento:</label>
						<select class="form-control" name="tipo" id="tipo" >
					    	<option value="0">Mecánica</option> 
					    	<option value="1">Limpieza</option>
					    </select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary float-right">Crear Mantenimiento</button>
					</div>
				</form>
			</div>
			
		</div>
<!-- Inicio tabla del select-->
		<div class="container">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">Nº Linea</th>
						<th scope="col">Nombre</th>
						<th scope="col">Tipo</th>
					</tr>
			</thead>
				<tbody>
<?php
				tbody_mantenimiento();
?>
 				</tbody>
			</table>
		</div>
	</body>
</html>