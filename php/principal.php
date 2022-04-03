<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Johan Struve">

   	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Pozos">
    <meta name="keywords" content="medicion de pozos">
    <meta name="revisit-after" content="7 days">   
  
  
  
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
  </script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/estiloppal.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/flip.css">
	<!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!--Google icons-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!--favicon-->
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">    
    
   <!--operatividad-->
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        

	<!--scripts-->
    <script type="text/javascript" src="../js/jquery.min.js"></script> <!-- este siempre debe ser el primer archivo JS-->
  	<script>
        $(document).ready(function() {
            $('.overlay a').click(function(){
                event.preventDefault(); 
                $('body, html').animate({
                    scrollTop:$(this.hash).offset().top <!-- hash significa destino-->
                },1000);
            });
			
			
			$("#panel1").slideUp("");
			$("#panel2").slideUp("");
			
			
			/*paneles de informacion*/ 
			$("#flip1").click(function(){
				$("#panel1").slideToggle("slow");
				$("#panel2").slideUp("slow");
			});	   
			$("#flip2").click(function(){
				$("#panel2").slideToggle("slow");
				$("#panel1").slideUp("slow");
			});
			
			
		});

					
	</script>
  
  
</head>

<body>
	<nav>
    <div class="cuerpo">
  		<section>
			<p>&nbsp;&nbsp;<strong>Mediciones pozo petrolero</strong><p>
  		</section>
	</div>
	<div class="contenedorpanel">
        <div class="flip" id="flip1">Registrar</div>
        <div class="panel" id="panel1"> 
              <div class="item"><a href="../php/registrarmanometro.php" target="_self">Manometro</a></div>
			  <div class="item"><a href="../php/registrarmedicion.php" target="_self">Medicion</a></div>
        </div>
        <div class="flip" id="flip2"><a href="../php/grafica.html">historico de mediciones</a></div>
	</div>
    </nav>
</body>
</html>




