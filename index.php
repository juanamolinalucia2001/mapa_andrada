<?php
require'Geocoding.php';
require'conexion.php';
use myPHPnotes\Geocoding;
$geo = new Geocoding("AIzaSyA20jxyoX7p5SzBJvu-5-gcFIe_QaUH-9Q");
//funcion que convierte una direccion en lat y long
$coordinates=$geo->getCoordinates('$marcar');
var_dump($coordinates);
//selecciona todas las direcciones cargadas
 $marcar= "SELECT direccion FROM prueba";
 //$result= $conexion->query($marcar); 

?>
