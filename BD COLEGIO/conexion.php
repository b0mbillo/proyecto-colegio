<?php  

$conexion = mysqli_connect ("localhost", "baldo", "123456789", "jmbm");

if ($conexion->connect_error) {

	die('error de conexion: '.$conexion->connect_error); 
}

echo "conectado exitosamente";

?>

