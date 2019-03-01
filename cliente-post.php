<?php
include_once "MySQLDataSource.php";

if (isset($_POST)) {
	if(ins_cliente($_POST['dni'],$_POST['tel'],$_POST['name'],$_POST['tipo'])){
		echo "<h1>El cliente se insertó con éxito</h1>";
	}
	
}else{
	echo("Se fue todo a la puta!");
}
echo '<a href="cliente.php">Volver atras</a>';

?>