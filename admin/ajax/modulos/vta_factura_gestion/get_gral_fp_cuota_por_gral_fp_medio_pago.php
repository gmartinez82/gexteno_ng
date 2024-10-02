<?php

include "_autoload.php";

$gral_fp_medio_pago_id = Gral::getVars(Gral::VARS_GET, 'gral_fp_medio_pago_id', null);
$arr = array();

if (!is_null($gral_fp_medio_pago_id)) {
    $gral_fp_cuotas = GralFpCuota::getOsxGralFpMedioPagoId($gral_fp_medio_pago_id);
    foreach ($gral_fp_cuotas as $gral_fp_cuota) {
        $arr_gral_fp_cuota = array(
            'id' => $gral_fp_cuota->getId(),
            'descripcion' => $gral_fp_cuota->getDescripcion(),
        );
        $arr[] = $arr_gral_fp_cuota;
    }
}
$arr_json = json_encode($arr);
echo $arr_json;
?>