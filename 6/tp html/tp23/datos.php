<?php
    include("funciones.php");
		$valueToFind = $_POST['num1'];
    $codes = '{"61":"Brasilia", "71": "Salvador", "11":"Sao Paulo", "21": "Rio de Janeiro", "32": "Juiz de Fora", "19": "Campinas", "27": "Vitoria", "31": "Belo Horizonte"}';
    $codes = json_decode($codes, true); 
		$city = getCity($codes, $valueToFind);
		if($city[0]){
			echo "El codigo $valueToFind pertenece a $city[1]";
		}
    if (!$city[0]) {
        echo "El código $valueToFind no ha sido encontrado";
    }
?>