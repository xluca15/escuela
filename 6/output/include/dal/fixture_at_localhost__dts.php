<?php
$dalTabledts = array();
$dalTabledts["id_dt"] = array("type"=>3,"varname"=>"id_dt", "name" => "id_dt");
$dalTabledts["nombreyapellido"] = array("type"=>200,"varname"=>"nombreyapellido", "name" => "nombreyapellido");
$dalTabledts["fecha_ingreso"] = array("type"=>200,"varname"=>"fecha_ingreso", "name" => "fecha_ingreso");
	$dalTabledts["id_dt"]["key"]=true;

$dal_info["fixture_at_localhost__dts"] = &$dalTabledts;
?>