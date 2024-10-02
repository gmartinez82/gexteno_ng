<?php
include "_autoload.php";

$gral_fp_forma_pago_id = Gral::getVars(2, 'gral_fp_forma_pago_id', null);
$gral_fp_medio_pagos = GralFpMedioPago::getOsxGralFpFormaPagoId($gral_fp_forma_pago_id);

$arr = array();

foreach($gral_fp_medio_pagos as $gral_fp_medio_pago){
	$arr_gral_fp_medio_pago = array(
		'id' => $gral_fp_medio_pago->getId(),
		'descripcion' => $gral_fp_medio_pago->getDescripcion(),
	);
	$arr[] = $arr_gral_fp_medio_pago;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>