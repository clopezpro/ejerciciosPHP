<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Ejercici1 </title>
</head>
<body>
	<div class="container">


	


		
		<h1> SELECCIONA UNA FECHA</h1>


<form action="validar-fecha.php" method="post">
	


				<div class="col-md-4">

					<select class="form-control" name="dia">
					<?php 
						for ($i=1; $i<=31 ; $i++) 
						{ 
							if($i==date('j'))
								echo '<option value="'.$i.'"selected>'.$i.'</option>';
							else
								echo '<option value="'.$i.'">'.$i.'</option>';
						}

					 ?>
					  
					</select>
				</div>
				<div class="col-md-4">
					<select class="form-control" name="mes">
					  <?php 
						for ($i=1; $i<=12 ; $i++) 
						{ 
							if($i==date('m'))
								echo '<option value="'.$i.'"selected>'.$i.'</option>';
							else
								echo '<option value="'.$i.'">'.$i.'</option>';
						}

					 ?>
					</select>
				</div>
				<div class="col-md-4">
					<select class="form-control" name="año">
					  <?php 
						for ($i=date('o'); $i>=1990 ; $i--) 
						{ 
							if($i==date('o'))
								echo '<option value="'.$i.'"selected>'.$i.'</option>';
							else
								echo '<option value="'.$i.'">'.$i.'</option>';
						}

					 ?>
					</select>
				</div>

				<div class="col-md-12">
					<button type="submit" value="enviar" >  enviar</button>
				</div>
		
	</form>
	
</div>
	<script src="../js/bootrap.bootstrap.min.js"></script>
</body>
</html>