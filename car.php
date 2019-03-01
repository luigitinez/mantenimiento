<!DOCTYPE html>
<?php 
	include "front.php";
?>
<html>
<head>
		<meta charset="utf-8">
		<title>Informe Coche</title>
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
		<script src="js/jquery.js" type="text/javascript"></script>

</head>
<body>
	<script type="text/javascript">
			/*	  $( function() { //datepicker mostrado
    $( "#datepicker" ).datepicker();
  } );*/
		$(function(){
			$("#datepicker").datepicker({ //datepicker de texto
				dateFormat: "yy-mm-dd",
				closeText: 'Cerrar',
        		prevText: '<Ant',
        		nextText: 'Sig>',
        		currentText: 'Hoy',
        		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        		monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        		dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        		dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        		dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        		weekHeader: 'Sm',
        		dateFormat: 'yy/mm/dd',
        		firstDay: 1,
        		isRTL: false,
        		showMonthAfterYear: false,
        		yearSuffix: ''
			});
		});


	</script>
<?php
	menu();
	if ($_GET) {
		get_car($_GET['v']);
	}else{
		die("<h1>Página no encontrada</h1>");
	}

?>
	<div class="container">
		<h1></h1>
		<form method="post" action="car-post.php">
			<div class="form-group">
				<label>Kilometros</label>
				<input type="text" class="form-control" name="km">
			</div>
			<div class="form-group">
				<label>Fecha del Mantenimiento</label>
				<!--input type="text" class="datepicker form-control" data-provide="datepicker"-->
				<div id="datepicker"></div>
			</div>

		</form>
	</div>

	<script src="js/jquery-ui.js" type="text/javascript"></script>
</body>
</html>
