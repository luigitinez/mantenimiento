<?php

function conectar(){
	@$connect = new mysqli("localhost","root","","mantenimiento");
	if($connect->connect_errno){
       //printf("<h1><span>LA CONEXIÓN CON LA BASE DE DATOS HA FALLADO: %s\n".$connect->connect_error."</span></h1>");
       exit();
    }else{
        return $connect;//devolvemos el objeto conexion para poder trabajar posteriormente con el
    }
}

function ins_cliente($name,$dni,$tel,$tipo){
	$sqlins = "INSERT INTO `cliente`(`dni`, `telefono`, `name`, `tipo`) VALUES ('".$dni."','".$tel."','".$name."','".$tipo."')";
	$mysqli = conectar();
	if ($resultado = $mysqli->query($sqlins)) {//todo fue bien
        $mysqli->close();
        return true;
    } else {//devolver error catastrofico
        $mysqli->close();
        return false;
    }
}
?>