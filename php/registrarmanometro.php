<?php 
  include_once('../php/conexion.php'); // llamar a la pagina
  $link = Conectarse(); //conexion mysql
  //error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>        
    <!-- metacomandos  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/estilossistema.css">  
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script>
    $(document).ready(function(){
			// selecciona toda la casilla de texto al recibir el enfoque
			$("input[type=text]").focus(function(){	   
			  this.select();
			});
    });
    </script>
    
  </head>
  <body>
  	<h2 style="padding:100px 0 0 0">Registro de Manometro</h2>
    <div>
      <form action="registromanometro.php" method="post" target="_self"> 
        <fieldset>
          <legend>Ingreso de Datos </legend>
          <table align="center">
            <caption>MANOMETROS</caption>
            <thead><tr><th>Datos Requeridos</th><th>Informacion a Suministrar</th></tr></thead>
            <tbody>
              <tr><td>Nombre Manometro</td><td><input type="text"  name="nombre" id="nombre" size="30" maxlength="30" title="Nombre" placeholder="Ingrese nombre" required="required" autofocus="autofocus"></td>
              <tr><td>Ubicación</td><td><input type="text"  name="direccion" id="direccion" size="30" maxlength="30" title="Direccion" placeholder="Ingrese direccion" ></td>    
            </tbody>
            <tfoot><tr><td><input type="submit" value="Guardar" ></td><td></td></tfoot>
          </table> 
        <br/>
        </fieldset>
      </form>
    </div>
	<br/>

  	
    <div id="similboton"><a href="../php/principal.php">VOLVER</a></div>
    
  </body>
 </html>
