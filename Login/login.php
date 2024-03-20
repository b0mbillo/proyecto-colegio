<?php

include ("conexion.php");

$codprof= $_POST['cod_prof'];
$docprof= $_POST['doc_prof'];
$docest = $_POST['doc_est'];
$codest = $_POST['cod_est'];


$estudiante = mysqli_query($conexion,"SELECT * from estudiantes where documento = '$docest' and codigo = '$codest'");

$profesor = mysqli_query($conexion,"SELECT * from profesores where documento = '$docprof' and codigo = '$codprof'");

if (mysqli_num_rows($profesor)>0) {
	$fila = mysqli_fetch_row($profesor);
	$name= $fila[1];
	$lifetime=0;
	session_set_cookie_params ($lifetime);
	session_start();
	$_SESSION['nombreprofesor'] = $name; 
    header("location:../perfil/perfilprof.php");

}elseif(mysqli_num_rows($estudiante)>0){
	$fila = mysqli_fetch_row($estudiante);
		$name= $fila[1];
		$lifetime=0;
		session_set_cookie_params ($lifetime);
	session_start();
	$_SESSION['nombreestudiante'] = $name;
    header("location:../perfil/perfilest.php"); 
}else{
	echo '<script>
	alert("usted no forma parte de la institución o ha ingresado datos erroneos");
	window.history.back(-1);
	</script>';
}
?>