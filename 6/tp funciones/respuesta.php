<?php 
include_once ("funciones.php"); 
$n1 = $_POST ["n1"]; 
$n2 = $_POST ["n2"]; 
$s = sumar ($n1,$n2); 
 
echo ("la suma es "  . $s ."<br>"); 
$r = resta($n1,$n2); 
echo ("la resta es "  .$r. "<br>"); 
 
?>