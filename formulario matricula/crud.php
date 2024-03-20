<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" type="text/css" href="css/hogar.css">
  <title></title>
</head>
<body>
<div class="formularioscaja">

<form class="form" method="get" action="">
  <input type="text" name="documentoestudiante" placeholder="doc estudiante"></input>
  <button type="submit"  name="buscarestudiante">buscar por estudiante</button>
  </form>

  <form class="form"  method="get" action="">
  <input  type="text" name="documentoacudiente" placeholder="doc acudiente"></input>
  <button type="submit"  name="buscaracudiente">buscar por acudiente</button>
  </form>
    
     <form class="form" style="min-width: 100px; max-width: 100px; margin-top: -10px;" action="informeacudientes.php">
  <button type="submit">informe acudientes</button>
  </form>
   <form class="form" style="min-width: 100px; max-width: 100px; margin-top: -10px;" action="informeestudiantes.php">
  <button type="submit">informe estudiantes</button>
  </form>
<script>
  function alerta() {
    
     opcion = confirm("estas seguro de eliminar este registro?");
     if (opcion == true) {
       document.getElementById("elminar").action = "eliminar.php";
       document.getElementById("elminar").submit();}
}
  </script>

<form method="post" style="margin-left: 7.6%; text-align: right;"  action="javascript:void(0);" id="elminar" name="elminar" class="form">
   <input type="text" name="documentoestudiante" placeholder="doc estudiante"></input>
  <button onclick="alerta()" type="submit"  name="eliminar">eliminar</button>
  </form>
 
<br><br><br>


 <?php 
       $conexion=mysqli_connect("localhost","root","","prematricula");
if (mysqli_connect_errno()) {
  echo "error de conexion" . mysqli_connect_error();
}
 
//-- -------------------------------CONSULTAS-------------------------------------- -->
//----------------------------------------CONSULTA ESTUDIANTE ---------------------------------------------------
 
if (isset($_GET['buscarestudiante'])) {
  $documento = $_GET['documentoestudiante'];
  $consultaestudiante = "SELECT * FROM fichoestudiante WHERE numerodocumento = '$documento'";
  $buscarestudiante = mysqli_query($conexion,$consultaestudiante);


if ($buscarestudiante->num_rows > 0) {
 echo '<div class="scrollbusqueda">';
   echo "<br><table border='1' align='center'>";
     echo "<tr>
        <td><h4>id</h4></td>
        <td><h4>nombre</h4></td>
        <td><h4>fechanacimiento</h4></td>
        <td><h4>lugarnacimiento</h4></td>
        <td><h4>sexo</h4></td>
        <td><h4>gradocursar</h4></td>
        <td><h4>telefono</h4></td>
        <td><h4>municipio</h4></td>
        <td><h4>comuna</h4></td>
        <td><h4>estrato</h4></td>
        <td><h4>tipodocumento</h4></td>
        <td><h4>expediciondocumento</h4></td>
        <td><h4>numerodocumento</h4></td>
        <td><h4>numerofolio</h4></td>
        <td><h4>tiposangre</h4></td>
        <td><h4>eps</h4></td>
        <td><h4>nombreeps</h4></td>
        <td><h4>nivelsisben</h4></td>
        <td><h4>puntajesisben</h4></td>
        <td><h4>ars</h4></td>
        <td><h4>nombrears</h4></td>
        <td><h4>religion</h4></td>
        <td><h4>desplazamiento</h4></td>
        <td><h4>desplazamientodonde</h4></td>
        <td><h4>maltrato</h4></td>
        <td><h4>embarazoprecoz</h4></td>
        <td><h4>etnia</h4></td>
        <td><h4>madrecabeza</h4></td>
        <td><h4>veterano</h4></td>
        <td><h4>heroe</h4></td>
      </tr>";
}else{
  echo "<div>no se encuentra ningun registro</div>";
}
    while($fila = $buscarestudiante->fetch_assoc()){
     $fichoestudiante = $fila['idficho'];
     echo "<tr><td>" .$fila["idficho"]."</td>". "<td>" . $fila["nombrecompleto"]."</td>"." <td> ".$fila["fechanacimiento"]."</td>" ."<td>". $fila["lugarnacimiento"]." </td>" ."<td>".$fila["sexo"]."</td>"."<td>".$fila["gradocursar"]."</td>" . "<td>". $fila["telefono"]."</td>" ."<td>". $fila["municipio"]."</td>"."<td>".$fila["comuna"]."</td>"."<td>".$fila["estrato"]."</td>"."<td>".$fila["tipodocumento"]."</td>"."<td>".$fila["expediciondocumento"]."</td>"."<td>".$fila["numerodocumento"]."</td>"."<td>".$fila["numerofolio"]."</td>"."<td>".$fila["tiposangre"]."</td>"."<td>".$fila["eps"]."</td>"."<td>".$fila["nombreeps"]."</td>"."<td>".$fila["nivelsisben"]."</td>"."<td>".$fila["puntajesisben"]."</td>"."<td>".$fila["ars"]."</td>"."<td>".$fila["nombrears"]."</td>"."<td>".$fila["religion"]."</td>". "<td>" . $fila["desplazamiento"]."</td>"." <td> ".$fila["desplazamientodonde"]."</td>" ."<td>". $fila["maltrato"]." </td>" ."<td>".$fila["embarazoprecoz"]."</td>"."<td>".$fila["etnia"]."</td>" . "<td>". $fila["madrecabeza"]."</td>" ."<td>". $fila["veterano"]."</td>" ."<td>". $fila["heroe"]. "</td></tr>";



// ------------------------------------------------------------------------------------------

     
     echo "<table border='1' align='center'>";
    echo "<br><tr>
        <td><h4>id</h4></td>
        <td><h4>nombre</h4></td>
        <td><h4>documento</h4></td>
        <td><h4>correo</h4></td>
        <td><h4>direccion</h4></td>
        <td><h4>telefono</h4></td>
        <td><h4>celular</h4></td>
        <td><h4>parentesco</h4></td>
      <tr>";
     $relacionEA = mysqli_query($conexion,"SELECT * FROM fichoacudiente WHERE idfichoacudiente = '$fichoestudiante'");
     while($filaA = $relacionEA->fetch_assoc()){
          echo "<tr><td>" .$filaA["idfichoacudiente"]."</td>". "<td>" . $filaA["nombrecompleto"]."</td>"." <td> ".$filaA["numerodocumento"]."</td>" ."<td>". $filaA["correo"]." </td>" ."<td>".$filaA["direccion"]."</td>"."<td>".$filaA["telefono"]."</td>" . "<td>". $filaA["celular"]."</td>" ."<td>". $filaA["parentesco"]."</td></tr>";
      }
      echo "</table>";echo '</div>';
   }
}


//----------------------------------------CONSULTA ACUDIENTE ---------------------------------------------------
 
 if (isset($_GET['buscaracudiente'])) {
  $documento = $_GET['documentoacudiente'];
  $consultaacudiente = "SELECT * FROM fichoacudiente WHERE numerodocumento = '$documento'";
  $buscaracudiente = mysqli_query($conexion,$consultaacudiente);

if ($buscaracudiente->num_rows > 0) {
  echo '<div class="scrollbusqueda">';
      echo "<br><table border='1' align='center'>";
    echo "<tr>
        <td><h4>id</h4></td>
        <td><h4>nombre</h4></td>
        <td><h4>documento</h4></td>
        <td><h4>correo</h4></td>
        <td><h4>direccion</h4></td>
        <td><h4>telefono</h4></td>
        <td><h4>celular</h4></td>
        <td><h4>parentesco</h4></td>
      <tr>";
}else{
  echo "<div>no se encuentra ningun registro</div>";
}
    while($filaA = $buscaracudiente->fetch_assoc()){
      echo "<tr><td>" .$filaA["idfichoacudiente"]."</td>". "<td>" . $filaA["nombrecompleto"]."</td>"." <td> ".$filaA["numerodocumento"]."</td>" ."<td>". $filaA["correo"]." </td>" ."<td>".$filaA["direccion"]."</td>"."<td>".$filaA["telefono"]."</td>" . "<td>". $filaA["celular"]."</td>" ."<td>". $filaA["parentesco"]."</td></tr>";


// ------------------------------------------------------------------------------------------

 echo "<table border='1' align='center'>";
    echo "<br><tr>
        <td><h4>id</h4></td>
        <td><h4>nombre</h4></td>
        <td><h4>fechanacimiento</h4></td>
        <td><h4>lugarnacimiento</h4></td>
        <td><h4>sexo</h4></td>
        <td><h4>gradocursar</h4></td>
        <td><h4>telefono</h4></td>
        <td><h4>municipio</h4></td>
        <td><h4>comuna</h4></td>
        <td><h4>estrato</h4></td>
        <td><h4>tipodocumento</h4></td>
        <td><h4>expediciondocumento</h4></td>
        <td><h4>numerodocumento</h4></td>
        <td><h4>numerofolio</h4></td>
        <td><h4>tiposangre</h4></td>
        <td><h4>eps</h4></td>
        <td><h4>nombreeps</h4></td>
        <td><h4>nivelsisben</h4></td>
        <td><h4>puntajesisben</h4></td>
        <td><h4>ars</h4></td>
        <td><h4>nombrears</h4></td>
        <td><h4>religion</h4></td>
        <td><h4>desplazamiento</h4></td>
        <td><h4>desplazamientodonde</h4></td>
        <td><h4>maltrato</h4></td>
        <td><h4>embarazoprecoz</h4></td>
        <td><h4>etnia</h4></td>
        <td><h4>madrecabeza</h4></td>
        <td><h4>veterano</h4></td>
        <td><h4>heroe</h4></td>
      </tr>";

    $fichoacudiente = $filaA['idfichoacudiente'];
     $relacionAE = mysqli_query($conexion,"SELECT * FROM fichoestudiante WHERE idficho = '$fichoacudiente'");
     while($fila = $relacionAE->fetch_assoc()){
                    echo "<tr><td>" .$fila["idficho"]."</td>". "<td>" . $fila["nombrecompleto"]."</td>"." <td> ".$fila["fechanacimiento"]."</td>" ."<td>". $fila["lugarnacimiento"]." </td>" ."<td>".$fila["sexo"]."</td>"."<td>".$fila["gradocursar"]."</td>" . "<td>". $fila["telefono"]."</td>" ."<td>". $fila["municipio"]."</td>"."<td>".$fila["comuna"]."</td>"."<td>".$fila["estrato"]."</td>"."<td>".$fila["tipodocumento"]."</td>"."<td>".$fila["expediciondocumento"]."</td>"."<td>".$fila["numerodocumento"]."</td>"."<td>".$fila["numerofolio"]."</td>"."<td>".$fila["tiposangre"]."</td>"."<td>".$fila["eps"]."</td>"."<td>".$fila["nombreeps"]."</td>"."<td>".$fila["nivelsisben"]."</td>"."<td>".$fila["puntajesisben"]."</td>"."<td>".$fila["ars"]."</td>"."<td>".$fila["nombrears"]."</td>"."<td>".$fila["religion"]."</td>". "<td>" . $fila["desplazamiento"]."</td>"." <td> ".$fila["desplazamientodonde"]."</td>" ."<td>". $fila["maltrato"]." </td>" ."<td>".$fila["embarazoprecoz"]."</td>"."<td>".$fila["etnia"]."</td>" . "<td>". $fila["madrecabeza"]."</td>" ."<td>". $fila["veterano"]."</td>" ."<td>". $fila["heroe"]. "</td></tr>";
      }
      echo "</table>";echo '</div>';
   }
}
 mysqli_close($conexion);
   ?>

<!-- --------------------------ESTUDIANTES------------------------------------------ -->

    <div class="scroll">
      <h1>Estudiantes Prematricula</h1><br>
  <?php
       $conexion=mysqli_connect("localhost","root","","prematricula");
if (mysqli_connect_errno()) {
  echo "error de conexion" . mysqli_connect_error();
}

$mostrarestudiante="SELECT * FROM fichoestudiante";
$resultado= mysqli_query($conexion,$mostrarestudiante);


if ($resultado->num_rows > 0) {
  
     echo "<table border='1' align='center'>";
    echo "<tr>
        <td><h4>id</h4></td>
        <td><h4>nombre</h4></td>
        <td><h4>fechanacimiento</h4></td>
        <td><h4>lugarnacimiento</h4></td>
        <td><h4>sexo</h4></td>
        <td><h4>gradocursar</h4></td>
        <td><h4>telefono</h4></td>
        <td><h4>municipio</h4></td>
        <td><h4>comuna</h4></td>
        <td><h4>estrato</h4></td>
        <td><h4>tipodocumento</h4></td>
        <td><h4>expediciondocumento</h4></td>
        <td><h4>numerodocumento</h4></td>
        <td><h4>numerofolio</h4></td>
        <td><h4>tiposangre</h4></td>
        <td><h4>eps</h4></td>
        <td><h4>nombreeps</h4></td>
        <td><h4>nivelsisben</h4></td>
        <td><h4>puntajesisben</h4></td>
        <td><h4>ars</h4></td>
        <td><h4>nombrears</h4></td>
        <td><h4>religion</h4></td>
        <td><h4>desplazamiento</h4></td>
        <td><h4>desplazamientodonde</h4></td>
        <td><h4>maltrato</h4></td>
        <td><h4>embarazoprecoz</h4></td>
        <td><h4>etnia</h4></td>
        <td><h4>madrecabeza</h4></td>
        <td><h4>veterano</h4></td>
        <td><h4>heroe</h4></td>
      </tr>";
    while($fila = $resultado->fetch_assoc()) {
     

        echo "<tr><td>" .$fila["idficho"]."</td>". "<td>" . $fila["nombrecompleto"]."</td>"." <td> ".$fila["fechanacimiento"]."</td>" ."<td>". $fila["lugarnacimiento"]." </td>" ."<td>".$fila["sexo"]."</td>"."<td>".$fila["gradocursar"]."</td>" . "<td>". $fila["telefono"]."</td>" ."<td>". $fila["municipio"]."</td>"."<td>".$fila["comuna"]."</td>"."<td>".$fila["estrato"]."</td>"."<td>".$fila["tipodocumento"]."</td>"."<td>".$fila["expediciondocumento"]."</td>"."<td>".$fila["numerodocumento"]."</td>"."<td>".$fila["numerofolio"]."</td>"."<td>".$fila["tiposangre"]."</td>"."<td>".$fila["eps"]."</td>"."<td>".$fila["nombreeps"]."</td>"."<td>".$fila["nivelsisben"]."</td>"."<td>".$fila["puntajesisben"]."</td>"."<td>".$fila["ars"]."</td>"."<td>".$fila["nombrears"]."</td>"."<td>".$fila["religion"]."</td>". "<td>" . $fila["desplazamiento"]."</td>"." <td> ".$fila["desplazamientodonde"]."</td>" ."<td>". $fila["maltrato"]." </td>" ."<td>".$fila["embarazoprecoz"]."</td>"."<td>".$fila["etnia"]."</td>" . "<td>". $fila["madrecabeza"]."</td>" ."<td>". $fila["veterano"]."</td>" ."<td>". $fila["heroe"]. "</td></tr>";
       
    }
     echo "</table>";
  }
   mysqli_close($conexion);
    ?>
      
    </div>


<!-- ----------------------------ACUDIENTES----------------------------------------- -->


  <div class="acudiente">
  
        <h1>Acudientes Prematricula</h1><br>
    <?php
       $conexion=mysqli_connect("localhost","root","","prematricula");
if (mysqli_connect_errno()) {
  echo "error de conexion" . mysqli_connect_error();
}


$mostraracudiente="SELECT * FROM fichoacudiente";
$resultado= mysqli_query($conexion,$mostraracudiente);


if ($resultado->num_rows > 0) {
    echo "<table border='1' align='center'>";
    echo "<tr>
        <td><h4>id</h4></td>
        <td><h4>nombre</h4></td>
        <td><h4>documento</h4></td>
        <td><h4>correo</h4></td>
        <td><h4>direccion</h4></td>
        <td><h4>telefono</h4></td>
        <td><h4>celular</h4></td>
        <td><h4>parentesco</h4></td>
      <tr>";
    while($fila = $resultado->fetch_assoc()) {
      

        echo "<tr><td>" .$fila["idfichoacudiente"]."</td>". "<td>" . $fila["nombrecompleto"]."</td>"." <td> ".$fila["numerodocumento"]."</td>" ."<td>". $fila["correo"]." </td>" ."<td>".$fila["direccion"]."</td>"."<td>".$fila["telefono"]."</td>" . "<td>". $fila["celular"]."</td>" ."<td>". $fila["parentesco"]."</td></tr>";
      
    }
      echo "</table>";
  }
  mysqli_close($conexion);
    ?>
    


  </div>

</body>
</html>