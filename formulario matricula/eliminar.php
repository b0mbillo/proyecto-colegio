<?php 

       $conexion=mysqli_connect("localhost","root","","prematricula");
if (mysqli_connect_errno()) {
  echo "error de conexion" . mysqli_connect_error();
}
 $documento = $_POST['documentoestudiante'];
  $ficho = mysqli_query($conexion,"SELECT idficho FROM fichoestudiante WHERE numerodocumento ='$documento' ");
 while ($fila = $ficho->fetch_assoc()) {
  
   $eliminaracudiente = mysqli_query($conexion,"DELETE FROM fichoacudiente WHERE idfichoacudiente = '$fila[idficho]'");
  $eliminarestudiante = mysqli_query($conexion,"DELETE FROM fichoestudiante WHERE numerodocumento = '$documento'");
  if ($eliminarestudiante && $eliminaracudiente) {
  	echo '<script>
	alert("registro eliminado exitosamente");
	window.history.back(-1);
	</script>';
  }else{
  	 echo '<script>
  alert("ha ocurrido un error en la solicitud");
  window.history.back(-1);
  </script>';
  }
 } 
  echo '<script>
  alert(" no hay registros para eliminar ");
  window.location.replace("crud.php");
  </script>';


  
 ?>