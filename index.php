<html>
<?php
setlocale(LC_ALL,"es_ES");
include_once "front.php"
?>
	<head>
		<meta charset="utf-8">
		<title>Inicio</title>
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>
<?php
		menu();
?>
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