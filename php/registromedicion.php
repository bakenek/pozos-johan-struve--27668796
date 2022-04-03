<?php 
  include_once('../php/conexion.php'); // llamar a la pagina
  $link = Conectarse(); //conexion mysql
  //error_reporting(0);

  // recabando los valores del formulario con codigo de seguridad en php
  $lcmsg = '';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idmanometro = $_REQUEST['idmanometro'];
	$ldfecha     = $_REQUEST['fecha'];
    $valor       = test_input($_REQUEST['valor']);
  }else{
    header('Location: ../index.html'); 
  }
  function test_input($data) {
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); // elimina los caracteres ascii superiores al 127
	$data = trim($data);
	return $data;
  }

	if($idmanometro == '0'){
		$lcmsg .= 'Debe seleccionar un manometro \\n no se agrego el registro';	
		}else{
			// insercion en la base de datos 
			$sql = "INSERT INTO mediciones (idmediciones,idmanometros, fecha_medicion, valor_medicion) 
			VALUES (NULL, '$idmanometro', '$ldfecha', '$valor');";
			if (mysqli_query($link, $sql)) {
			$last_idscptor = mysqli_insert_id($link);
			//echo "Registro insertado exitosamente, ID: ". $last_idempr;
				$lcmsg .= 'Registro insertado exitosamente, ID: '. $last_idscptor.' \\n';		
			} else {
				$lcmsg .= "Error: " . $sql . "<br>" . mysqli_error($link);
			}
		}
  echo "<script>alert('".$lcmsg."')</script>";
  mysqli_close($link);
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>        
    <!-- metacomandos  -->
    <meta charset="UTF-8">
  </head>
  <body>
  	<h2>Registro Mediciones</h2>
      <?php

      ?>
   <meta http-equiv='refresh' content='01;URL=../php/principal.php'>
  </body>
 </html>