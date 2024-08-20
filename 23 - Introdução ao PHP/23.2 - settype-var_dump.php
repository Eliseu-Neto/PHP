<?php

$var = "true";
/*
var_dump($var);
echo "<br>"; 
*/
settype($var, 'bool');
var_dump($var); // true
echo("<br>");
/*
$var = "";
settype($var, 'bool');

echo gettype($var); 

?>