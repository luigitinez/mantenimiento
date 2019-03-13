<?php
include_once "MySQLDataSource.php";


if (isset($_POST)) {
	$mant = array();
	foreach ($_POST as $key => $value) {
		$pos = strpos($key, 'mant-');
		if($pos !== false){

			array_push($mant, $_POST[$key]);
		}

		
	}
	ins_hist($_POST['km'],$_POST['date'],$_POST['horas'],$_POST['car'],$_POST['obs'],$mant);

	
}else{
	echo("Se fue todo a la puta!");
}
echo '<a href="car.php"'.$_POST['car'].'>Volver atras</a>';

?>