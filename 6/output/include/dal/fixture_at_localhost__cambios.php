<?php
$dalTablecambios = array();
$dalTablecambios["id_partido"] = array("type"=>3,"varname"=>"id_partido", "name" => "id_partido");
$dalTablecambios["id_jugadorin"] = array("type"=>3,"varname"=>"id_jugadorin", "name" => "id_jugadorin");
$dalTablecambios["id_jugadorout"] = array("type"=>3,"varname"=>"id_jugadorout", "name" => "id_jugadorout");
$dalTablecambios["minuto_cambio"] = array("type"=>3,"varname"=>"minuto_cambio", "name" => "minuto_cambio");
	$dalTablecambios["id_partido"]["key"]=true;

$dal_info["fixture_at_localhost__cambios"] = &$dalTablecambios;
?>