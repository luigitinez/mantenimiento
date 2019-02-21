<html>
<?php
setlocale(LC_ALL,"es_ES");
?>
	<head>
		<meta charset="utf-8">
		<title>Gestión de mantenimientos</title>
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		 
 		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Inicio </a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="cliente.php">Clientes</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Vehiculos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Mantenimientos</a>
		      </li>
		    </ul>
		  </div>
		</nav>
		<div class="col-md-12">
			<h1>Gestión de Clientes</h1>

			<h2>Formulario de alta de clientes</h2>
			<div class="form-cliente">
			<form method="post" action="cliente-post.php">
	
				<div class="form-group">
					<label for="exampleInputPassword1">Nombre o Razón Social:</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Documento identificativo (DNI/CIF/NIF):</label>
					<input type="text" class="form-control" id="dni" name="dni">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Teléfono:</label>
					<input type="tel" class="form-control" id="tel" name="tel">
				</div>
				<div class="form-group">
				    <label for="exampleFormControlSelect1">Tipo Cliente:</label>
					<select class="form-control" name="tipo" id="tipo">
				    	<option value="0">Particular</option>
				    	<option value="1">Profesional</option>
				    </select>
				  </div>
				<button type="submit" class="btn btn-primary float-right">Crear Cliente</button>
			</form>
		</div>
	</body>
</html>