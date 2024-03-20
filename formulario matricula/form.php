<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulario de pre-inscripcion</title>

      <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/master.css">
   <!--   <script type="text/javascript" src="validar.js"></script> -->
  </head>
  <body>

    <form action="prematricula.php" method="post">

      <h1 style="margin-top: 15px;">Pre-matricula</h1>

      <fieldset>

<h1>Recuerde llenar de manera correcta y precisa todos los datos</h1>
        <legend><span class="number">1</span>Informacion del estudiante</legend>
        <label for="nombreest">Nombre completo</label>
        <input type="text" required="" name="nombreest" maxlength="50">

        <label for="fechanacimiento">Fecha de nacimiento</label>
        <input type="date" required="" name="fechanacimiento" >

        <label for="lugarnacimiento">Lugar de nacimiento:</label>
        <input type="text" required="" name="lugarnacimiento" maxlength="50" >

        <label>Sexo:</label>
        <input type="radio" value="Hombre" name="sexo"><label  class="light">Masculino</label><br>
        <input type="radio" value="Mujer" name="sexo"><label  class="light">Femenino</label><br><br>

         <label for="grado">Grado a cursar</label>
        <select name="grado">
          <option value="octavo">8</option>
          <option value="noveno">9</option>
          <option value="decimo">10</option>
          <option value="once">11</option>
        </select>

        <label for="telefonocontacto">Telefono de contacto:</label>
         <p>siga el patron --- -- --</p>
        <input required="" type="text" pattern="[0-9]{3} [0-9]{2} [0-9]{2}" placeholder="ej: 222 22 22" name="telefonocontacto">


        <label for="lugarmunicipio">Municipio:</label>
        <select name="lugarmunicipio">
          <option value="bello">bello</option>
          <option value="itagui">itagui</option>
          <option value="medellin">medellin</option>
          <option value="rionegro">rionegro</option>
          <option value="santodomingo">santo domingo</option>
          <option value="envigado">envigado</option>
        </select>

        <label for="lugarcomuna">Comuna:</label>
        <select  name="lugarcomuna">
          <option value="comuna1">Comuna 1 - Popular</option>
          <option value="comuna2">Comuna 2 - Santa Cruz</option>
          <option value="comuna3">Comuna 3 - Manrique</option>
          <option value="comuna4">Comuna 4 - Aranjuez</option>
          <option value="comuna5">Comuna 5 - Castilla</option>
          <option value="comuna6">Comuna 6 - Doce de octubre</option>
          <option value="comuna7">Comuna 7 - Robledo</option>
          <option value="comuna8">Comuna 8 - Villa Hermosa</option>
          <option value="comuna9">Comuna 9 - Buenos Aires</option>
          <option value="comuna10">Comuna 10 - La Candelaria</option>
          <option value="comuna11">Comuna 11 - Laureles—Estadio</option>
          <option value="comuna12">Comuna 13 - San Javier</option>
          <option value="comuna13">Comuna 12 - La América</option>
          <option value="comuna14">Comuna 14 - Poblado</option>
          <option value="comuna15">Comuna 15 - Guayabal</option>
          <option value="comuna16">Comuna 16 - Belén</option>
        </select>
       

        <label for="estrato">Estrato:</label>
        <select   name="estrato">
          <option value="estrato1">estrato º1</option>
          <option value="estrato2">estrato º2</option>
          <option value="estrato3">estrato º3</option>
          <option value="estrato4">estrato º4</option>
          <option value="estrato5">estrato º5</option>
          <option value="estrato6">estrato º6</option>
          <option value="estrato7">estrato º7</option>
        </select>

        <label>Tipo de documento:</label>
        <input type="radio"  value="CC" name="tipodocumento"><label  class="light">Cedula de ciudadania(CC)</label><br>
        <input type="radio"  value="TI" name="tipodocumento"><label  class="light">Tarjeta de identidad(TI)</label><br><br>

        <label for="lugarexpedicion">Lugar de expedicion del documento:</label>
        <input required="" type="text"  name="lugarexpedicion" maxlength="50">

        <label for="documentoest">Numero de documento:</label>
        <input required="" type="number"  name="documentoest" maxlength="10">

        <label for="numfolio">Numero de folio:</label>
        <input required="" type="number" placeholder="Ej: 04125361"  name="numfolio" maxlength="8">

        <label for="sangre">Tipo de sangre:</label>
        <input type="radio"  value="o-" name="sangre"><label class="light">O-</label><br>
        <input type="radio"  value="o+" name="sangre"><label class="light">O+</label><br>
        <input type="radio"  value="a-" name="sangre"><label class="light">A-</label><br>
        <input type="radio"  value="a+" name="sangre"><label class="light">A+</label><br>
        <input type="radio"  value="b-" name="sangre"><label class="light">B-</label><br>
        <input type="radio"  value="b+" name="sangre"><label class="light">B+</label><br>
        <input type="radio"  value="ab-" name="sangre"><label  class="light">AB-</label><br>
        <input type="radio"  value="ab+" name="sangre"><label  class="light">AB+</label><br><br>

 <script>
function validarepssi() {
  var eps = document.getElementById("eps");
  if (window.getComputedStyle(eps).display === "none") {
    eps.style.display = "block";
  }
}

function validarepsno() {
  var eps = document.getElementById("eps");
  if (window.getComputedStyle(eps).display === "block") {
    eps.style.display = "none";
  }
}

function validararssi() {
  var eps = document.getElementById("ars");
  if (window.getComputedStyle(eps).display === "none") {
    eps.style.display = "block";
  }
}

function validararsno() {
  var eps = document.getElementById("ars");
  if (window.getComputedStyle(eps).display === "block") {
    eps.style.display = "none";
  }
}
</script>


        <label >Tiene eps:</label>
        <input type="radio" id="epssi" value="si" onclick="validarepssi()" name="tieneeps"><label  class="light">Si</label><br>
        <input type="radio" id="epsno"  value="no" onclick="validarepsno()" name="tieneeps"><label class="light">No</label><br>

             <input id="eps" type="text" name="eps" value="ninguno" placeholder="cual: " maxlength="50">
        
       
         
          
      

        <label for="nivelsisben">Nivel del sisben:</label>
        <input type="radio" value="1" name="nivelsisben"><label  class="light">1</label><br>
        <input type="radio"  value="2" name="nivelsisben"><label class="light">2</label><br>
        <input type="radio"  value="3" name="nivelsisben"><label  class="light">3</label><br>

        <label for="puntsisben">Puntaje del sisben:</label>
        <input type="number" required=""  name="puntsisben" min="1" maxlength="2">

        <label >Tiene ARS:</label>
        <input type="radio" id="siars" value="si" onclick="validararssi()" name="tienears"><label class="light">Si</label><br>
        <input type="radio" id="noars" value="no" onclick="validararsno()" name="tienears"><label  class="light">No</label><br>
 
              <input  type="text" name="ars" id="ars" value="ninguno" placeholder="cual: " maxlength="50">






        <label for="religion">Religion:</label>
        <input type="text" required="" name="religion" maxlength="20">

        <label >Sufrio desplazamiento:</label>
        <input type="radio" id="sidesplazado" value="si" name="desplazado"><label  class="light">Si</label><br>
        <input type="radio" id="nodesplazado" value="no" name="desplazado"><label  class="light">No</label><br>

              <input  type="text" name="desplazamiento" value="ninguno"  placeholder="de donde: " maxlength="50">






        <label for="maltrato">Maltrato:</label>
        <input type="radio" id="fisico" value="fisico" name="maltrato"><label  class="light">Fisico</label><br>
        <input type="radio" id="psiquico" value="psiquico" name="maltrato"><label  class="light">Psiquico</label><br>
        <input type="radio" id="sexual" value="sexual" name="maltrato"><label  class="light">Sexual</label><br>
        <input type="radio" id="ninguno" value="ninguno" name="maltrato"><label  class="light">Ninguno</label><br><br>


        <label for="embarazo">Embarazo precoz:</label>
        <input type="radio"  value="si" name="embarazo"><label  class="light">Si</label><br>
        <input type="radio"  value="no" name="embarazo"><label  class="light">No</label><br><br>

        <label for="etnia">Pertenece a alguna etnia especificamente:</label>
        <input type="text"  name="etnia" placeholder="si no deje vacio" value="ninguno" maxlength="50">

        <label for="dependem">Depende de madre cabeza de familia:</label>
        <input type="radio"  value="si" name="dependem"><label  class="light">Si</label><br>
        <input type="radio"  value="no" name="dependem"><label class="light">No</label><br>

        <label for="veterano">Es beneficiario de veterano de la fuerza publica:</label>
        <input type="radio"  value="si" name="veterano"><label  class="light">Si</label><br>
        <input type="radio"  value="no" name="veterano"><label  class="light">No</label><br>

        <label for="heroe">Es beneficiario de heroe de la nacion:</label>
        <input type="radio"  value="si" name="heroe"><label class="light">Si</label><br>
        <input type="radio"  value="no" name="heroe"><label class="light">No</label><br>
      </fieldset>





<!-- ---------------------------------------------------------------------------------------------- -->





        <legend><span class="number">2</span>Informacion del pariente o acudiente </legend>
        <label for="nombreacudiente">Nombre completo:</label>
        <input type="text" required="" name="nombreacudiente" required="" maxlength="45">
      
     
      <label for="documentoacudiente">Numero de documento:</label>
      <input type="number" required="" name="documentoacu" required="" maxlength="45">
    

      
        <label for="correoacudiente">Correo electronico</label>
        <input type="email" required="" name="correoacudiente" required="" maxlength="45">
      
   
        <label for="direccion">Direccion de residencia</label>
        <input type="text" required="" name="direccion" required="" placeholder="Ej: cll 72a #49-29">
      

      
        <label for="telfijo">Telefono fijo</label>
         <p>siga el patron --- -- --</p>
        <input type="tel" required="" placeholder="ej: 222 22 22" pattern="[0-9]{3} [0-9]{2} [0-9]{2}" name="telfijo" required="">
      

     
        <label for="telcelular">Número de celular</label>
         <p>siga el patron --- --- -- --</p>
        <input type="tel" required="" pattern="[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" placeholder="ej: 315 333 32 23" name="telcelular" required="">

      

      
        <label for="parentesco">Parentesco con el estudiante</label>
        <input type="radio"  value="progenitor" name="parentesco"><label for="progenitor" class="light"></label>Padre/Madre<br>
        <input type="radio"  value="otro" name="parentesco"><label for="otro" class="light">Otro</label><br>
     
<h1>revise que todos los campos hayan sido completados y esten correctos</h1>
  
      <button type="submit" name="boton">Finalizar la inscripcion</button>
    </form>

  </body>
</html>
