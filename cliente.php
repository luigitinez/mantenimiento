<html>
<?php
setlocale(LC_ALL,"es_ES");

include_once "front.php"
?>
	<head>
		<meta charset="utf-8">
		<title>Clientes</title>
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
<?php 
			menu();
?>
		<div class="container">
			<h1>Gestión de Clientes</h1>

			<h2>Formulario de alta de clientes</h2>
			<div class="form-cliente">
				<form method="post" action="cliente-post.php">
		
					<div class="form-group">
						<label for="exampleInputPassword1">Nombre o Razón Social:</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Documento identificativo (DNI/CIF/NIF):</label>
						<input type="text" class="form-control" id="dni" name="dni" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Teléfono:</label>
						<input type="tel" class="form-control" id="tel" name="tel" required>
					</div>
					<div class="form-group">
					    <label for="exampleFormControlSelect1">Tipo Cliente:</label>
						<select class="form-control" name="tipo" id="tipo" >
					    	<option value="0">Particular</option> 
					    	<option value="1">Profesional</option>
					    </select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary float-right">Crear Cliente</button>
					</div>
				</form>
			</div>
		</div>

		<div class="container">
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			    	<th scope="col">Nº Linea</th>
			    	<th scope="col">Nombre</th>
			    	<th scope="col">Identificación</th>
			    	<th scope="col">Telefono</th>
			    	<th scope="col">Tipo</th>
			    </tr>
			  </thead>
			  <tbody>
			  
<?php
				tbody_clientes();
?>
		
			  </tbody>
			</table>

		</div>
	</body>
</html>