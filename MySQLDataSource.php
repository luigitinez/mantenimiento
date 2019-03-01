<?php

function conectar(){
	$connect = new mysqli("localhost","root","","mantenimiento");
    //$connect = new mysqli("localhost","root","root","mantenimiento");
	if($connect->connect_errno){
       //printf("<h1><span>LA CONEXIÓN CON LA BASE DE DATOS HA FALLADO: %s\n".$connect->connect_error."</span></h1>");
       exit();
    }else{
        return $connect;//devolvemos el objeto conexion para poder trabajar posteriormente con el
    }
}

function ins_cliente($dni,$tel,$name,$tipo){
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

function ins_mantenimiento($name,$tipo){
    $sqlins = "INSERT INTO `mantenimiento`(`nombre`, `tipo`) VALUES ('".$name."','".$tipo."')";
    $mysqli = conectar();
    if ($resultado = $mysqli->query($sqlins)) {//todo fue bien
        $mysqli->close();
        return true;
    } else {//devolver error catastrofico
        $mysqli->close();
        return false;
    }
}

function ins_vehiculo($matricula,$cliente,$marca,$modelo,$bastidor){
    $sqlins = "INSERT INTO `vehiculo`(`matricula`, `bastidor`, `modelo`, `marca`, `fk_cliente`) VALUES ('".$matricula."','".$bastidor."','".$modelo."','".$marca."','".$cliente."')";
    $mysqli = conectar();
    if ($resultado = $mysqli->query($sqlins)) {//todo fue bien
        $mysqli->close();
        return true;
    } else {//devolver error catastrofico
        $mysqli->close();
        return false;
    }

}

//getters
function get_clientes(){
    $sql = "SELECT * FROM `cliente`";
    return select($sql);
    
}

function get_mantenimientos(){
    $sql = "SELECT * FROM `mantenimiento`";
    return select($sql);

}

function get_vehiculos(){
    $sql = "SELECT `id_vehiculo`, `matricula`, `bastidor`, `modelo`, `marca`, c.name, c.dni FROM `vehiculo` as v INNER JOIN cliente as c where v.fk_cliente = c.id_cliente";
    return select($sql);
}

function get_vehiculo($v){
    $sql = "SELECT id_vehiculo, matricula, bastidor, modelo, marca, c.name, c.dni, c.telefono, c.tipo FROM vehiculo as v JOIN cliente  c ON v.fk_cliente = c.id_cliente WHERE id_vehiculo = ".$v;
}

function select($sql){
    $conn = conectar();
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>