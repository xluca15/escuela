<?php
$dalTablepartidos = array();
$dalTablepartidos["id_partido"] = array("type"=>3,"varname"=>"id_partido", "name" => "id_partido");
$dalTablepartidos["id_seleccionlocal"] = array("type"=>3,"varname"=>"id_seleccionlocal", "name" => "id_seleccionlocal");
$dalTablepartidos["id_seleccionvisitante"] = array("type"=>3,"varname"=>"id_seleccionvisitante", "name" => "id_seleccionvisitante");
$dalTablepartidos["id_fecha"] = array("type"=>3,"varname"=>"id_fecha", "name" => "id_fecha");
$dalTablepartidos["fecha"] = array("type"=>135,"varname"=>"fecha", "name" => "fecha");
$dalTablepartidos["hora"] = array("type"=>3,"varname"=>"hora", "name" => "hora");
$dalTablepartidos["goles_local"] = array("type"=>3,"varname"=>"goles_local", "name" => "goles_local");
$dalTablepartidos["goles_visitante"] = array("type"=>3,"varname"=>"goles_visitante", "name" => "goles_visitante");
	$dalTablepartidos["id_partido"]["key"]=true;

$dal_info["fixture_at_localhost__partidos"] = &$dalTablepartidos;
?>