<?php

$conexion =  mysqli_connect ("localhost", "root", "", "perfiles");

if (mysqli_connect_error()) {
	die('error de conexion ('.mysqli_connect_errno() .') '. mysqli_connect_error());
}


?>