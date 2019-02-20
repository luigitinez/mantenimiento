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
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Inicio <span class="sr-only"></span></a>
		      </li>
		      <li class="nav-item">
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
			<h1>Bienvenido al Gestor de mantenimientos. </h1>
			<div class="row">		
				<div class="col-md-6">
					<h2>¿Que desea hacer?</h2>
				</div>
				<div class="col-md-6">
					<label class="float-right"><?php echo strftime("%A %d de %B del %Y");?></label>
				</div>
			</div>
		</div>
	</body>
</html>