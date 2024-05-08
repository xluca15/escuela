<?php
$dalTableestadios = array();
$dalTableestadios["id_estadio"] = array("type"=>3,"varname"=>"id_estadio", "name" => "id_estadio");
$dalTableestadios["nombre_estadio"] = array("type"=>200,"varname"=>"nombre_estadio", "name" => "nombre_estadio");
$dalTableestadios["nombre_ciudad"] = array("type"=>200,"varname"=>"nombre_ciudad", "name" => "nombre_ciudad");
$dalTableestadios["capacidad_estadio"] = array("type"=>3,"varname"=>"capacidad_estadio", "name" => "capacidad_estadio");
	$dalTableestadios["id_estadio"]["key"]=true;

$dal_info["fixture_at_localhost__estadios"] = &$dalTableestadios;
?>