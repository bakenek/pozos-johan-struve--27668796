<?php 
  include_once('../php/conexion.php'); // llamar a la pagina
  $link = Conectarse(); //conexion mysql
  //error_reporting(0);

  //seleccionar la lista de manometros para usarla en el formulario de registro
  $sql = "SELECT * FROM manometros order by nombre_manometros"; 
  $result = mysqli_query($link, $sql);
  if (mysqli_num_rows($result) <= 0) {
    echo "No hay manometros registrados, verifique";
    // aqui debo volver a la pagina principal indicando que no hay registros
    exit(); // FINALIZO EL SCRIPT 
  }
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
		$(document).ready(inicializarEventos);
		function inicializarEventos(){
			$("input[type=text]").focus(function(){	   
			  this.select();
			});
		}
    </script>

  </head>
  <body>
  	<h2 style="padding:100px 0 0 0">Registro de Mediciones</h2>
    <div>
      <form action="registromedicion.php" method="post" enctype="multipart/form-data" target="_self"> 
        <fieldset>
          <legend>Ingreso de Mediciones</legend>
          <table align="center">
            <caption>MEDICIONES</caption>
            <thead><tr><th>Datos Requeridos</th><th>Informacion a Suministrar</th></tr></thead>
            <tbody>
				<tr><td>manometro</td><td><select name="idmanometro" id="manometro">
                	<option value="0" autofocus="autofocus">"Seleccione valor"</option>
 	            <?php
    	          while ($reg = mysqli_fetch_assoc($result)){
        	        echo "<option value=".$reg['idmanometros'].">".trim($reg['nombre_manometros']).' - '.trim($reg['ubicacion_manometros'])."</option>";
            	  }
              	?>
              	</select></td></tr>
				<tr><td>fecha</td><td><input type="date"  name="fecha" id="fecha" size="30" maxlength="30" title="fecha" placeholder="fecha" required="required" ></td></tr>
                <tr><td>valor</td><td><input type="number"  name="valor" id="valor" size="20" maxlength="20" title="valor" placeholder="Ingrese el valor de la medicion" min="0" max="999999" value="0" pattern="^[0-9]{0,12}([,][0-9]{2,2})?$" required="required"></td></tr>                                
            </tbody>
            <tfoot><tr><td><input type="submit" value="Guardar" ></td><td>Favor completar todos los campos</td></tfoot>
          </table>  
        </fieldset>
      </form>
    </div>
    <!--
    <a href="../php/principal.php">Volver</a>
    -->
    <div id="similboton"><a href="../php/principal.php">VOLVER</a></div>
  </body>
 </html>
