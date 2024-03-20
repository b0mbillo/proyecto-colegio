<?php 
  $lifetime=0;
    session_set_cookie_params ($lifetime);
session_start();

if (isset($_SESSION['nombreprofesor'])) {
}else{
header('location:../index.php');
}
 ?>  
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS.1/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fonts.css">
    <link rel="stylesheet" href="../css/estiloMenu.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link rel="shortcut icon" type="image/x-icon" href="img/ESCUDO.png"/>
    <title>I. E. Jose Maria Bravo Marquez</title>
         
  </head>
  <div style="border: 1px solid #ccc; border-radius: 10px;width: 1109px; max-width: 1500px;margin-left: 13.5%; margin:20px auto;  background: #fff;" class="margen"> 
<body style="background: #e6e6e6">
  <header>      
    <div class="navegacion">       
      <nav>
        <ul>

          <li><a href="../index.html">Inicio</a>
            <div class="submenu">
            <div class="submenu-items">
              <p>Objetivos</p>
              <ul>
                <li><a href="../index.html" href="#Objetivos">Objetivos</a></li>
                <li><a href="../index.html" href="#Vision">Vision</a></li>
                <li><a href="../index.html" href="#Mision">Mision</a></li>
              </ul>
            </div>
           </div>
          </li>

          <li><a href="../simbolos.html">Nosotros</a>
           <div class="submenu">
            <div class="submenu-items" style=":"> 
              <div class="submenu-items">
              <p>Simbolos Institucionales</p>
              <ul>
                <li><a href="../simbolos.html" >Bandera</a></li>
                <li><a href="../simbolos.html" >Escudo</a></li>
                <li><a href="../simbolos.html" href="#Simbolos">Logo de calidad</a></li>
              </ul>
            </div>
           </div>
          </li>
          <li><a href="">Galeria</a>
            <div class="submenu">            
            <div class="submenu-items">
              <p>Informacion estudiantil</p>
              <ul>
                <li><a href="#"><img src="../img/analytics.png" width="90" height="80"></a></li>

              </ul>
            </div>
            <div class="submenu-items">
              <p align="center" style="padding:13px">Sede 1</p>
              <ul>
                <li><a href="#">Preescolar</a></li>
                <li><a href="#">Primaria</a></li>
                <li><a href="#">Mediatecnica</a></li>
              </ul>
            </div>
            <div class="submenu-items">
              <p align="center" style="padding:13px">Sede 2</p>
              <ul>
                <li><a href="#">Primaria</a></li>
                <li><a href="#">Bachillerato</a></li>
                <li><a href="#">Mediatecnica</a></li>
              </ul>
            </div>
            </div>
          </li>
          <li><a href="">Foro estudiantil</a>
            <div class="submenu">
              <div class="submenu-items">
                <p>Grados</p>
                  <ul>
                    <li><a href="#">11º</a></li>
                    <li><a href="#">10º</a></li>
                    <li><a href="#">9º</a></li>
                    <li><a href="#">8º</a></li>
                  </ul>
                </div>
            </div>
          </li>
          <li><a href="../contactenos.html">Contacto</a></li>

          <li style="margin-left:483px;"><a href="../formulario matricula/form.php">Prematricula</a>
            
          </li>
        </ul>
      </nav>
    </div>   
  </header>

    <div class="clearfix visible-sm-block"></div>
        
            <div class="container-fluid" id="inner" >
              <div class="row">
                <div class="  col-md-4" width="40" style="margin-left:-150px;background: #e6e6e6; border-radius: 5px;" >
                  <center>
                    <h3>
                      <div class="footer-top-title" >
                        <a id="nombre" style="text-decoration: none; margin-left: -20px; margin-top: 20px;">Nombre
                        <!-- Nombre del estudiante por medio de una consulta php ...--> 
                        </a>
                      </div>
                      <div class="box">
                        <form action="cargar.php" method="POST" enctype="multipart/form-data">
                          <?php
                          include "cargar.php";
                          if ($carp = opendir($carpeta)) {
      while ($archivo = readdir($carp)) {
        if ($archivo !="." && $archivo!='..') {
          
          
          echo "<table border=0><tr>";
          
            echo '<td><img src="'.$carpeta.'/'.$archivo.'"title="imagen" width="100" heigth="100" "alt="imagen"></td>';
        } 
        echo "</tr></table>";     
      }
     
    }
  
    ?>

                        
                                                
                          <input class="archivo" type="file" name="archivo" value="subir foto de perfil"><br>
                          <input type="submit" value="subir foto de perfil" name="boton">
                        </form><br>
                      </div>
                    </h3>
                  </center>                      
                </div>                
              </div>
            </div><br><br>

 

        <div class="clearfix visible-sm-block"></div>


  <!-- Latest compiled and minified JavaScript -->

    <script src="js/Jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</body>
    <center><HR width="80%" size="3" ></center><br>    
                     
    <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12" align="center">
                  <center>
                    <a target="_blank" href="index.html" style="text-decoration: none;">Inicio</a> -
                    <a target="_blank" href="menu.html" style="text-decoration: none;">Menu</a> -
                    <a target="_blank" href="Contactanos.html" style="text-decoration: none;">Contactanos</a>
                    </center>                                        
                        <!-- Copyright -->
                        © 2018 Copyright:<a href="" style="text-decoration: none;"> JOSE MARIA BRAVO MARQUEZ</a>
                    </div>
                    
                </div>
            </div>        
    </footer>
  </div>
</html>