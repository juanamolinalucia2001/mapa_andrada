<?php
require'Geocoding.php';
require'conexion.php';
use myPHPnotes\Geocoding;
$geo = new Geocoding("AIzaSyA20jxyoX7p5SzBJvu-5-gcFIe_QaUH-9Q");

//indica que se traiga en español la direccion (si no lo pones se va todo a la chingada)
$conexion->query("SET NAMES 'utf8'");

//selecciona solo la 1er direccion cargada
 $marcar= "SELECT direccion FROM prueba";
 $result= $conexion->query($marcar); 
 $marcax= $result->fetch_assoc();
 $direccion = $marcax['direccion'];

//funcion que convierte una direccion en lat y long
$coordinates=$geo->getCoordinates($direccion);
var_dump($coordinates);


?>
