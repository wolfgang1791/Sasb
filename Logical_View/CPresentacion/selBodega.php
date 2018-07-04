<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Locales</title>
	</head>


<body >
	
	
		
	<?php 
		require_once("Session.php");
		include "../CDatos/componenteDAO/DAOFactory.php";

		$dao = DAOFactory::getInstance();
        $bodegaDAO = $dao->getBodegaDAO();
        $listabodegas = $bodegaDAO->listarBodegas();  
	 ?>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<br>
	<h1 align="center"><b>Lista de Bodegas</b></h1>
	<div align="center">
	
	</div><br>
	<table >
		
		<thead>
			<tr>

		    <th>Id Bodega</th>
		    <th>Ubicacion</th>	
		    <th>Acción</th>		   
	  	
	  		</tr>
	  </thead>
	  	<tbody>
	  		<?php
	  			foreach($listabodegas as $muestra => $atributo) { //  
	  			?>
	  		<tr>
	  			<td align="center"><?php echo $atributo->getID();?></td>
	  			<td align="center"><?php echo $atributo->getUbicacion();?></td>
	  			<td align="center"><a  href = "menu.php?id=<?php echo $atributo->getID();?>"><button onclick = "location='menu.php'"><b>Seleccionar</b></button></a></td>
	  			

	  		</tr>	
	  			<?php } ?>
	  		

	  	</tbody>
	</table>
	<br>
	<br>
	<FORM align= "center"  METHOD=POST ACTION="index.php"> 
<!--	<button onclick="reFresh()" action=""><b>Actualizar</b></button>&nbsp&nbsp&nbsp-->
	<button onclick = "location='index.php'" name = "close"><b>Cerrar Sesion</b></button>
	</FORM>
		

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