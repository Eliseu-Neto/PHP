<?php

	echo date("D, d") . " de " . date("M") . " de " . date("Y");

	echo " - " . date("H:i:s");
	
	//Quarta-feira, 9 de Setembro de 2015
	
	//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
	echo "<br>";
echo date('l jS \de F Y h:i:s A'); //Observem a barra invertida que garante a letra realmente ser exibida
/*
	

$formato = "H:i:s d/m/Y";
$data = date($formato);
echo $data;*/
?>
