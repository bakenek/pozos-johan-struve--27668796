<?php
  class modelo{
	  private $conexion;
	  function _construct()
	  {
		  require_once('conexion.php');
		  $this-> conexion = new conexion();
		  $this-> conexion -> conectar();
	  }
	  
	  
	  function traer(){
		  $sql = "select * from mediciones";
		  $arreglo = array();
		  if ($consulta = $this->conexion->conexion->query($sql)){
			  
			  while($consulta = mysqli_fetch_array($consulta)){
				  $arreglo[] = $consulta;}
				  return $arreglo;
				  $this->conexion->cerrar();
		  }
	  }
  }

?>
