<!DOCTYPE html>
<?php 
	include "front.php";
?>
<html>
<?= head("Vehiculo");?>
<body>
	<script type="text/javascript">
		
		$(function(){
			$(".datepicker").datepicker({ //datepicker de texto
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
		$coche = get_vehiculo($_GET['v']);
	
		
	}else{
		die("<h1>Página no encontrada</h1>");
	}
	
?>
	<div class="container">
		<h1><?= $coche['marca']. ' - '. $coche['modelo']. ' de ' . $coche['propietario']?> </h1>
		<form method="post" action="car-post.php">
			<div class="form-group">
				<label>Kilometros</label>
				<input type="text" class="form-control errControl" name="km" id="km">
			</div>
			<div class="form-group">
				<label>Fecha del Mantenimiento</label>
				<input type="text" class="datepicker form-control errControl" name="date" data-provide="datepicker" id="date">
			</div>

			<input id="car" type="hidden" name="car" value="<?php echo $_GET['v'];?>">

			<div class="form-group">
				<label>horas dedicadas</label>
				<input type="number" class="form-control errControl" id="horas" name="horas">
			</div>
			
			<label>Observaciones</label>
			<textarea class="form-control" name="obs" id="obs">
				
			</textarea>
			<div class="form-group">
				<label>Mantenimiento efectuado</label>
				<div class="row">
					<div class="col-md-10">
						<?php sel_man(); ?>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-info float-right" id="add">+</button>
					</div>
				</div>

			</div>
			<ul class="list-group" id="mantenimientos">

			</ul>
			<button id="submit" class="btn btn-primary" type="submit">Enviar</button>
		</form>
	</div>
	<div class="bottom container">
		<table class="table">
			<thead>
				<th scope="col">Mantenimiento</th>
				<th scope="col">Fecha</th>
				<th scope="col">Kilometros</th>
				<th scope="col">Horas</th>
				<th scope="col">Nombre</th>
				<th scope="col">Observaciones</th>
			</thead>
			<tbody id="mbody">
				<?php sel_hist($_GET['v']); ?>
			</tbody>
		</table>
	</div>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/cars.js" type="text/javascript">	</script>
</body>
</html>
