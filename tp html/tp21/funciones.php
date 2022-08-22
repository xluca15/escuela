<?php
		include("datos.php");
    $num1 = $_POST['num1'];
    $res = calculate($num1);
    echo "El peso en la luna es: $res";
?>