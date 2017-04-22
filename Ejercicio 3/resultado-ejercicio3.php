<?php 

if ($_POST["numero1"]!=null &&  $_POST["numero2"]!=null)
{

	echo "DATOS RECIBIDOS ".$_POST["numero1"].' '.$_POST["numero2"]."<br>"."<br>"."<br>";

	$numero1=$_POST["numero1"];
	$numero2=$_POST["numero2"];

	if($numero1>$numero2)
	{
		$suma=$numero1+$numero2;
		$resta=$numero1-$numero2;

		echo "la suma es  :".$suma."<br>";
		echo "la resta es :".$resta."<br>";
	}
	else
	{
		$producto=$numero2/$numero1;
		$divicion=$numero2*$numero1;
		echo "El producto es :".$producto."<br>";
		echo "La divicion es :".$divicion."<br>";
	}




}
else
{
	echo "no se recibio ningun dato";
}
	



 ?>