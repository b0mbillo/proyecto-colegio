<?php

include('conexion.php');
if (isset($_POST['boton'])) {

$nombreest = $_POST['nombreest'];
$fechanacimiento = $_POST['fechanacimiento'];
$lugarnacimiento = $_POST['lugarnacimiento'];
$sexo = $_POST['sexo'];
$grado = $_POST['grado'];
$telefonocontacto = $_POST['telefonocontacto'];
$lugarmunicipio = $_POST['lugarmunicipio'];
$lugarcomuna = $_POST['lugarcomuna'];
$estrato = $_POST['estrato'];
$tipodocumento = $_POST['tipodocumento'];
$lugarexpedicion = $_POST['lugarexpedicion'];
$documentoest = $_POST['documentoest'];
$numfolio = $_POST['numfolio'];
$sangre = $_POST['sangre'];
$tieneeps = $_POST['tieneeps'];
$eps = $_POST['eps'];
$nivelsisben = $_POST['nivelsisben'];
$puntsisben = $_POST['puntsisben'];
$tienears = $_POST['tienears'];
$ars = $_POST['ars'];
$religion = $_POST['religion'];
$desplazado = $_POST['desplazado'];
$desplazamiento = $_POST['desplazamiento'];
$maltrato = $_POST['maltrato'];
$embarazo = $_POST['embarazo'];
$etnia = $_POST['etnia'];
$dependem = $_POST['dependem'];
$veterano = $_POST['veterano'];
$heroe = $_POST['heroe'];

$nombreacudiente = $_POST['nombreacudiente'];
$documentoacudiente = $_POST['documentoacu'];
$correoacudiente = $_POST['correoacudiente'];
$direccion = $_POST['direccion'];
$telfijo = $_POST['telfijo'];
$telcelular = $_POST['telcelular'];
$parentesco = $_POST['parentesco'];


$insertarestudiante = mysqli_query($conexion,"INSERT INTO fichoestudiante(nombrecompleto, fechanacimiento, lugarnacimiento, sexo, gradocursar, telefono, municipio, comuna, estrato, tipodocumento, expediciondocumento, numerodocumento, numerofolio, tiposangre, eps, nombreeps, nivelsisben, puntajesisben, ars, nombrears, religion, desplazamiento, desplazamientodonde, maltrato, embarazoprecoz, etnia, madrecabeza, veterano, heroe) VALUES('$nombreest' , '$fechanacimiento', '$lugarnacimiento', '$sexo', '$grado', '$telefonocontacto', '$lugarmunicipio', '$lugarcomuna', '$estrato', '$tipodocumento', '$lugarexpedicion', '$documentoest', '$numfolio', '$sangre', '$tieneeps', '$eps', '$nivelsisben', '$puntsisben', '$tienears', '$ars', '$religion', '$desplazado', '$desplazamiento', '$maltrato', '$embarazo', '$etnia', '$dependem', '$veterano', '$heroe')");

$insertaracudiente = mysqli_query($conexion,"INSERT INTO fichoacudiente(nombrecompleto, numerodocumento, correo, direccion, telefono, celular, parentesco) VALUES('$nombreacudiente', '$documentoacudiente', '$correoacudiente', '$direccion', '$telfijo', '$telcelular', '$parentesco')");


if ($insertarestudiante && $insertaracudiente) {
	echo '<script>
	alert(" PREMATRICULA ENVIADA EXITOSAMENTE");
	window.history.back(-1);
	</script>';
	
}else{
	echo "ocurrio un error";
}

}

  ?>