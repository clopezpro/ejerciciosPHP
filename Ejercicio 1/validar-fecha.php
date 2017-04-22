<?php 

	$dia=$_POST["dia"];
	$mes=$_POST["mes"];
	$año=$_POST["año"];

	echo 'LA fecha recibida es   '.$dia.' de '.$mes.' del '.$año.'<br>';




	if(checkdate($mes, $dia, $año))
	{
		echo '!FECHA CORRECTA!';
	}
	else
	{
		echo 'Error de fecha, no existe el dia '.$dia.'/'.$mes.'/'.$año;

	}







 ?>