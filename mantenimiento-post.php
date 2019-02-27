<?php
include_once "MySQLDataSource.php";

if (isset($_POST)) {
	if(ins_mantenimiento($_POST['name'],$_POST['tipo'])){
		echo "<h1>El mantenimiento se creó con éxito</h1>";
	}
	
}else{
	die("Se fue todo a la puta!");
}
echo '<a href="mantenimiento.php">Volver atras</a>';
?>