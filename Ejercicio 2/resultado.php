<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado || ejercicio 2</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	
<div class="container">

<div class="col-1">

	<h1> Resultado ejercicio 2  </h1>

 </div>

<div class="col-md-5"></div> 
<div class="col-md-5">
					<?php 
						if (isset($_POST["numero"]))
						{
							$numero=$_POST["numero"];
						
							 echo 'el numero es      : '.$numero.'<br>';
						
							 echo 'EL doble es  		: '.($numero*2).'<br>';
						
							 echo 'La tercera parte es : '.($numero/3).'<br>';
						
							 echo 'El cubo es          : '.pow($numero,3).'<br>';
						}
						else
						{
							echo "no envio nungun dato error ";
						}
						
						 ?></div>
	 	
	 </div>


</body>
</html>





