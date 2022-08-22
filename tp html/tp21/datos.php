<?php
    $p = $_POST ["num1"];
    echo ("el peso en la tierra es:" . $p ."<br>");
	function calculate($peso){
		return ($peso/9.81) * 1.622;
	}
?>