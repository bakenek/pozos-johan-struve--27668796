<?php
  require 'modelo.php';
  
  $mg = new modelo();
  $consulta = $mg -> traer();
   echo json_encode($consulta);
?>