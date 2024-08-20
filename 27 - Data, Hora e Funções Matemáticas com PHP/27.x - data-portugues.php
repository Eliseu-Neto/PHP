<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo');
 
	$date = '2011-05-08';
	$date = 'today';
	echo strftime("%A, %d de %B de %Y", strtotime( $date ));
	?>
	
	
	
	






