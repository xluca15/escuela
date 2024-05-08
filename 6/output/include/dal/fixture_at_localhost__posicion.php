<?php
$dalTableposicion = array();
$dalTableposicion["id_posicion"] = array("type"=>3,"varname"=>"id_posicion", "name" => "id_posicion");
$dalTableposicion["nombre_posicion"] = array("type"=>200,"varname"=>"nombre_posicion", "name" => "nombre_posicion");
	$dalTableposicion["id_posicion"]["key"]=true;

$dal_info["fixture_at_localhost__posicion"] = &$dalTableposicion;
?>