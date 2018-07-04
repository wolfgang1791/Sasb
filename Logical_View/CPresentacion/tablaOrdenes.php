
<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Ver Ordenes</title>
	</head>


<body >
	
	
		
	<?php 
		
		require_once("Session.php");
	
		$_SESSION['idb']=$_GET['id'];
		//echo $_SESSION['idb'];
		include "../CDatos/componenteDAO/DAOFactory.php";

		$dao = DAOFactory::getInstance();
        $ordenDAO = $dao->getOrdenDAO();
        $listaordenes = $ordenDAO->listarOrdenes();
        
	
	 ?>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<br>
	<h1 align="center"><b>Lista de Ordenes</b></h1>
	<div align="center">
	<br>
	<button onclick="reFresh()" action=""><b>Actualizar</b></button>&nbsp&nbsp&nbsp
	<button onclick = "location='menu.php?id=<?php echo $_SESSION['idb']?>'"><b>Volver al Menu</b></button></a>
	</div><br>
	<table >
		
		<thead>
			<tr>

		    <th>Id Orden</th>
		    <th>Fecha de creacion</th>
		    <th>Hora de creacion</th>
		    <th>Disponibilidad</th>
		    <th>Id de Productos</th>

	  	</tr>
	  </thead>
	  	<tbody>
	  		<?php
	  			foreach($listaordenes as $muestra => $atributo) { //  
	  			?>
	  		<tr>
	  			<td><?php echo $atributo->getID();?></td>
	  			<td><?php echo $atributo->getFechacreacion();?></td>
	  			<td><?php echo $atributo->getHoracreacion();?></td>
	  			<?php 
	  			$estado = null;
	  			if($atributo->getDisponible() == 1) {
	  				$estado = "disponible";
	  			}
	  			else{
	  				$estado = "no disponible";
	  			}
	  			?>
	  			<td><?php echo $estado;?></td>
	  			<?php
	  			$productos = "";
	  			foreach($atributo->getProductos() as $subarray){
	  				$productos .= "(".$subarray.") ";
	  			}

	  			?>
	  			<td><?php echo $productos;?></td>

	  		</tr>	
	  			<?php } ?>
	  		

	  	</tbody>
	</table>
		

</body>

<script type="text/javascript">
	function reFresh(){ 
	location.reload(true)
	}
/* Establece el tiempo 1 minuto = 60000 milliseconds. */
	window.setInterval("reFresh()",300000);
// -->
</script>
</html>