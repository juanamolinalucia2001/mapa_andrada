<?php
require'conexion.php';
require 'Geocoding.php';

use myPHPnotes\Geocoding;
$geo = new Geocoding("AIzaSyA20jxyoX7p5SzBJvu-5-gcFIe_QaUH-9Q");

$conexion->query("SET NAMES 'utf8'");
 $marcar= "SELECT  id , CONCAT(calle, '', numero,',',localidad,',',provincia) direccion FROM probar";

 $result=$conexion->query($marcar);
 while($row=$result->fetch_assoc()){
    $direccion=$row['direccion'];

    $coordinates=$geo->getCoordinates($direccion);
     var_dump($coordinates);
    $guardar="UPDATE probar SET latitud =".$coordinates['latitude'].",
	longitud = ".$coordinates['longitude']." WHERE id = ". $row['id'];
    $conexion->query($guardar);

}

	



?>

