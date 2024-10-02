<?php
include "_autoload.php";

$gral_empresa_id = Gral::getVars(Gral::VARS_GET, 'gral_empresa_id', null);
$cntb_ejercicios = CntbEjercicio::getOsxGralEmpresaId($gral_empresa_id);

$arr = array();

foreach($cntb_ejercicios as $cntb_ejercicio){
	$arr_cntb_ejercicio = array(
		'id'          => $cntb_ejercicio->getId(),
		'descripcion' => $cntb_ejercicio->getDescripcion(),
	);
	$arr[] = $arr_cntb_ejercicio;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>