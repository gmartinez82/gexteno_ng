<?php
include "_autoload.php";

$insumo_id = Gral::getVars(1, 'hdn_insumo_id', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_categoria = $ins_insumo->getInsCategoria();

$txt_coche_descripcion_corta = Gral::getVars(1, 'txt_coche_descripcion_corta', '');

$arr['error'] = false;

/* Controles */
if(strlen($txt_coche_descripcion_corta) < 3){
	$arr['txt_coche_descripcion_corta_error'] = 'Debe ingresar una descripcion de al menos 3 caracteres';
	$arr['error'] = true;
}		

$arr_json = json_encode($arr);
echo $arr_json;


?>