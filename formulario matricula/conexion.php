<?php  

$conexion = mysqli_connect ("localhost", "root", "", "prematricula");

if (mysqli_connect_error($conexion)) {

	die('error de conexion: '.$conexion->connect_error); 
}


?>

