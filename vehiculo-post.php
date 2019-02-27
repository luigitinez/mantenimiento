<?php
include_once "MySQLDataSource.php";

if (isset($_POST)) {
	if(ins_vehiculo($_POST['placa'],$_POST['cliente'],$_POST['marca'],$_POST['modelo'],$_POST['bastidor'])){
		echo "<h1>Alta del vehiculo con éxito</h1>";
	}
	
}else{
	die("Se fue todo a la puta!");
}
echo '<a href="vehiculo.php">Volver atras</a>';

?>