<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Ejercicio 2</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/bootstrap.min.css">


</head>
<body>
	
	<div class="container">
		
			<h1> Ejercicio 2 </h1>

			<p> Ingrese por teclado un número, calcule y visualice:<br>
				 a)	El doble del número ingresado.
				 b)	La tercera parte del número ingresado.<br>
				 c)	El cubo del número ingresado <br>
    		</p>


<div class="col-md-4"></div>
<div class="col-md-4">

		<form action="resultado.php" method="post">

			<label for="numero"> Ingrese un numero </label>
			<input type="text" name="numero" accesskey="n" />
			<input type="submit" class="btn-info" name="calcularbtn" value="Calcular"/>
	 </form>	


</div>
<div class="col-md-4"></div>	


	</div>

</body>
</html>