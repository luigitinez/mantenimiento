<?php
include_once "MySQLDataSource.php";

	function geturl($navdir=""){	
		if($navdir=="")
		$dir=$_SERVER['PHP_SELF'];
		else
		$dir=$navdir;
		$pos=strrpos($dir,"/");
		$pos=$pos+1;
		$web=substr($dir, $pos);
		return $web;
	}

	function menu(){
		$pages = array("index.php"=>"Inicio");
 		$activePage = geturl();
 		//generamos un array co los enlaces
 		$pages['cliente.php']		= "Clientes";
    	$pages['vehiculo.php']		= "Vehiculos";
    	$pages['mantenimiento.php']	= "Mantenimientos";
    	/*$pages["contact.php"]		= "Contactenos";
    	$pages["pres.php"]			= "Presentación";*/
?>    	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		 
 		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
<?php
		foreach($pages as $url=>$title):
?>
		    <li <?php if($url == $activePage):?>class="active nav-item"<?php else: ?> class="nav-item"<?php endif;?> >
		        <a class="nav-link" href="<?php echo $url;?>">
		        <?php echo $title; ?>
		        </a>
		    </li>
		<?php endforeach;

?>		      
		    </ul>
		  </div>
		</nav>

<?php
	}

	function tbody_clientes(){

		$list = get_clientes();
		if ($list->num_rows > 0) {
			$i=1;
			while($row = $list->fetch_assoc()) {
			/*recorremos todas las lineas de la consulta para mostrarlas*/
		    	echo '<tr>';
		    	echo '<th scope="row">'.$i.'</th>';
		    	echo '<td>'.$row['name'].'</td>';
		    	echo '<td>'.$row['dni'].'</td>';
		    	echo '<td>'.$row['telefono'].'</td>';
		    	if ($row['tipo']==0) {
		    		echo '<td>Particular</td>';
		    	}else{
		    		echo '<td>Profesional</td>';	            		
		    	}
		    	echo '</tr>';
		    	$i++;
			}
		}

	}

		function tbody_mantenimiento(){

			$list = get_mantenimientos();
			if ($list->num_rows > 0) {
				$i=1;
				while($row = $list->fetch_assoc()) {
				/*recorremos todas las lineas de la consulta para mostrarlas*/
			    	echo '<tr>';
			    	echo '<th scope="row">'.$i.'</th>';
			    	echo '<td>'.$row['nombre'].'</td>';

			    	if ($row['tipo']==0) {
			    		echo '<td>Mecanica</td>';
			    	}else{
			    		echo '<td>Limpieza</td>';	            		
			    	}
			    	echo '</tr>';
			    	$i++;
				}
			}
        		
		}

		function sel_clientes(){
			$list = get_clientes();
			if ($list->num_rows > 0) {
			$i=1;
?>
			<select class="form-control" name="cliente" id="cliente" >
<?php
			while($row = $list->fetch_assoc()) {
			/*recorremos todas las lineas de la consulta para mostrarlas*/

		    	echo '<option value="'.$row['id_cliente'].'">'.$row['name'].' - '.$row['dni'].'</option>';
		    	$i++;
			}
?>
 			</select>
<?php
		}
		}
?>	