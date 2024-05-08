<?php
$dalTablegoles = array();
$dalTablegoles["id_partido"] = array("type"=>3,"varname"=>"id_partido", "name" => "id_partido");
$dalTablegoles["id_jugador"] = array("type"=>3,"varname"=>"id_jugador", "name" => "id_jugador");
$dalTablegoles["id_tipogol"] = array("type"=>3,"varname"=>"id_tipogol", "name" => "id_tipogol");
$dalTablegoles["minuto_gol"] = array("type"=>3,"varname"=>"minuto_gol", "name" => "minuto_gol");
	$dalTablegoles["id_partido"]["key"]=true;

$dal_info["fixture_at_localhost__goles"] = &$dalTablegoles;
?>