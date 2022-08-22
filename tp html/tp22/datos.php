<?php
		include("funciones.php");
    $num1 = $_POST['num1'];
    $res = EsMultiploDe3($num1);
		$fres = "No es multiplo";
		if($res == true) $fres = "Es multiplo";
    echo "Resultado: $fres";
?>