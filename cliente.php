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
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</body>
</html>