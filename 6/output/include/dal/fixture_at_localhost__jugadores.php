<?php
$dalTablejugadores = array();
$dalTablejugadores["id_seleccion"] = array("type"=>3,"varname"=>"id_seleccion", "name" => "id_seleccion");
$dalTablejugadores["apellido_jugador"] = array("type"=>200,"varname"=>"apellido_jugador", "name" => "apellido_jugador");
$dalTablejugadores["nombre_jugador"] = array("type"=>200,"varname"=>"nombre_jugador", "name" => "nombre_jugador");
$dalTablejugadores["num_camiseta"] = array("type"=>200,"varname"=>"num_camiseta", "name" => "num_camiseta");
$dalTablejugadores["id_posicion"] = array("type"=>3,"varname"=>"id_posicion", "name" => "id_posicion");
$dalTablejugadores["id_jugador"] = array("type"=>3,"varname"=>"id_jugador", "name" => "id_jugador");
	$dalTablejugadores["id_jugador"]["key"]=true;

$dal_info["fixture_at_localhost__jugadores"] = &$dalTablejugadores;
?>