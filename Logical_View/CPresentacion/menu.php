<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>

	<?php
		require_once("Session.php");
	//	SESSION_START();
		$_SESSION['idb']=$_GET['id'];
	/*	echo $_SESSION['idb'];
		echo "<br>";
		echo $_SESSION['usuario'];
	*/
	?>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div align="center">
	<h1><b>Menu</b></h1>

	<button onclick = "location='tablaProductos.php?id=<?php echo $_SESSION['idb']?>'"><b>Ver Productos</b></button></br>
	<br>
	<button onclick = "location='tablaOrdenes.php?id=<?php echo $_SESSION['idb']?>'"><b>Ver Ordenes</b></button></br>
	<br>
	<button ><b>Ver Estadisticas</b></button></br>
	<br>
	<br>
	<button onclick = "location='SelBodega.php'"><b>Atras</b></button> 
	
	</div>








</body>
</html>