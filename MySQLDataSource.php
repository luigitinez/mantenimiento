<?php

function conectar(){
    $connect = new mysqli("localhost","root","","mantenimiento");
    //$connect = new mysqli("localhost","root","root","mantenimiento");
	if($connect->connect_errno){
       //printf("<h1><span>LA CONEXIÓN CON LA BASE DE DATOS HA FALLADO: %s\n".$connect->connect_error."</span></h1>");
       exit("Error al conectar con la base de datos");
    }else{
        $connect->set_charset("utf8");
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

function ins_vehiculo($matricula,$cliente,$marca,$modelo,$bastidor){ //crea un vehiculo en la bbdd
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

function ins_hist($km,$fecha,$horas,$car,$obs,$mant){ //inserta un mantenimiento en el historico
    
    $sqlins = "INSERT INTO `historial`(`km`, `fecha`, `fk_vehiculo`, `observaciones`, `horas`) VALUES ('".$km."','".$fecha."','".$car."','".$obs."','".$horas."')";
    $mysqli = conectar();
    if ($resultado = $mysqli->query($sqlins)) {//todo fue bien
        $lastid = $mysqli->insert_id;

        //Hacer bucle for que recorra el array $mant y por tantas variables dentro del array se harán tantas inserciones en la tabla histman

        foreach ($mant as $key => $value) {
        $sqldos = "INSERT INTO `hist_man`(`fk_historial`, `fk_mantenimento`) VALUES ('".$lastid."','".$value."')";
        $mysqli->query($sqldos);    
        }
        $mysqli->close();
        return true;
    } else {//devolver error catastrofico
        echo $sqlins;
        echo "y todo se fue a la puta";
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
    $sql = "SELECT id_vehiculo, matricula, bastidor, modelo, marca, c.name as propietario, c.dni, c.telefono, c.tipo FROM vehiculo as v JOIN cliente  c ON v.fk_cliente = c.id_cliente WHERE id_vehiculo = ".intval($v);
    $result = select($sql);    
    return $result->fetch_assoc();
}

function get_mant(){
    $sql = "SELECT * FROM `mantenimiento`";
    return select($sql);
}

function get_hist($car){
    $sql = "SELECT h.*, m.* FROM historial h 
        LEFT JOIN hist_man hm on hm.fk_historial = h.id_historial
        LEFT JOIN mantenimiento m on m.id_mantenimiento = hm.fk_mantenimento
        WHERE h.fk_vehiculo = ".$car;
    return select($sql); 
}

function select($sql){
    $conn = conectar();
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
?>