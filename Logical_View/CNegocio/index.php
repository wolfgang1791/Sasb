<?php

include "Sensor.php";

$recibido =(float)$_GET["peso"];

echo $recibido."<br>";


$sensor = new Sensor();

$sensor->calcularCambio($recibido);

?>
