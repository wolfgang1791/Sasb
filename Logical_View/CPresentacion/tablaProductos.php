<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Ver Productos</title>
	</head>


<body >
	
	
		
	<?php 
		require_once("Session.php");
	
		    $_SESSION['idb']=$_GET['id'];
		 //   echo $_SESSION['idb'];
		 //	echo $_SESSION['usuario'];
		
		include "../CDatos/componenteDAO/DAOFactory.php";
		$dao = DAOFactory::getInstance();
        $productoDAO = $dao->getProductoDAO();
        $listaproductos = $productoDAO->listarProductos();  

	 ?>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<br>
	<h1 align="center"><b>Lista de Productos</b></h1>
	<div align="center">
	<br>
	<button onclick="reFresh()" action=""><b>Actualizar</b></button>&nbsp&nbsp&nbsp
	<button onclick = "location='menu.php?id=<?php echo $_SESSION['idb']?>'"><b>Volver al Menu</b></button>
	<br>
	<br>
	</div><br>
	<table >
		
		<thead>
			<tr>

		    <th>Id Producto</th>
		    <th>Nombre</th>
		    <th>Descripcion</th>
		    <th>Peso</th>
		    <th>Stock</th>
		    <th>Precio</th>
		    <th>Limite</th>
	  	</tr>
	  </thead>
	  	<tbody>
	  		<?php
	  			foreach($listaproductos as $muestra => $atributo) { //  
	  			?>
	  		<tr>
	  			<td><?php echo $atributo->getID();?></td>
	  			<td><?php echo $atributo->getNombre();?></td>
	  			<td><?php echo $atributo->getCategoria();?></td>
	  			<td><?php echo $atributo->getPeso()." gr";?></td>
	  			<td><?php echo $atributo->getStock()." u";?></td>
	  			<td><?php echo "S/. ".$atributo->getPrecio();?></td>
	  			<td><?php echo $atributo->getLimitestock()." u";?></td>

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