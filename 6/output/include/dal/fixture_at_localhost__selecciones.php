<?php
$dalTableselecciones = array();
$dalTableselecciones["nombre_seleccion"] = array("type"=>200,"varname"=>"nombre_seleccion", "name" => "nombre_seleccion");
$dalTableselecciones["id_colormedia"] = array("type"=>3,"varname"=>"id_colormedia", "name" => "id_colormedia");
$dalTableselecciones["id_colorpantalon"] = array("type"=>3,"varname"=>"id_colorpantalon", "name" => "id_colorpantalon");
$dalTableselecciones["id_dt"] = array("type"=>3,"varname"=>"id_dt", "name" => "id_dt");
$dalTableselecciones["id_colorcamiseta"] = array("type"=>3,"varname"=>"id_colorcamiseta", "name" => "id_colorcamiseta");
$dalTableselecciones["id_seleccion"] = array("type"=>3,"varname"=>"id_seleccion", "name" => "id_seleccion");
	$dalTableselecciones["id_seleccion"]["key"]=true;

$dal_info["fixture_at_localhost__selecciones"] = &$dalTableselecciones;
?>