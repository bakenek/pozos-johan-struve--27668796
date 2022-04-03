<?php 
  include_once('../php/conexion.php'); // llamar a la pagina
  $link = Conectarse(); //conexion mysql
  //error_reporting(0);

  // recabando los valores del formulario con codigo de seguridad en php
  $lcmsg = '';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lcnombre    = test_input($_REQUEST['nombre']);
    $lcDireccion = test_input($_REQUEST['direccion']);
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

	$lsFechHoy = date("ymd");
	// insercion en la base de datos 
	$sql = "INSERT INTO manometros (idmanometros, nombre_manometros, ubicacion_manometros) 
	VALUES (NULL,'$lcnombre', '$lcDireccion');";
	if (mysqli_query($link, $sql)) {
	$last_idscptor = mysqli_insert_id($link);
	//echo "Registro insertado exitosamente, ID: ". $last_idempr;
		$lcmsg .= 'Registro insertado exitosamente, ID: '. $last_idscptor.' \\n';		
	} else {
		$lcmsg .= "Error: " . $sql . "<br>" . mysqli_error($link);
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
  	<h2>Registro Manometro</h2>
      <?php

      ?>
   <meta http-equiv='refresh' content='01;URL=../php/principal.php'>
  </body>
 </html>