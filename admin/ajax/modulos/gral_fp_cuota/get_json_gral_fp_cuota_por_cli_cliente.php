<?php

include "_autoload.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$cli_cliente = CliCliente::getOxId($cli_cliente_id);

if ($cli_cliente) {
    $cli_cliente_gral_fp_cuotas = $cli_cliente->getCliClienteGralFpCuotas();

    $arr = array();

    if (count($cli_cliente_gral_fp_cuotas) > 0) {
        foreach ($cli_cliente_gral_fp_cuotas as $cli_cliente_gral_fp_cuota) {
            $gral_fp_cuota = $cli_cliente_gral_fp_cuota->getGralFpCuota();
            $arr_cuota = array(
                'id' => $gral_fp_cuota->getId(),
                'descripcion' => $gral_fp_cuota->getDescripcion(),
                'gral_fp_medio_pago_id' => $gral_fp_cuota->getGralFpMedioPago()->getId(),
                'gral_fp_medio_pago_descripcion' => $gral_fp_cuota->getGralFpMedioPago()->getDescripcion(),
                'gral_fp_forma_pago_id' => $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getId(),
                'gral_fp_forma_pago_descripcion' => $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getDescripcion(),
                'selected' => 1,
            );
            $arr[] = $arr_cuota;
        }
    } else {
        $arr_cuota = array(
            'id' => '',
            'descripcion' => '...',
            'gral_fp_medio_pago_id' => '',
            'gral_fp_medio_pago_descripcion' => '',
            'gral_fp_forma_pago_id' => '',
            'gral_fp_forma_pago_descripcion' => '',
            'selected' => 1,
        );
        $arr[] = $arr_cuota;

        $gral_fp_cuotas = GralFpCuota::getGralFpCuotas(null, null, true);
        foreach ($gral_fp_cuotas as $gral_fp_cuota) {
            $arr_cuota = array(
                'id' => $gral_fp_cuota->getId(),
                'descripcion' => $gral_fp_cuota->getDescripcion(),
                'gral_fp_medio_pago_id' => $gral_fp_cuota->getGralFpMedioPago()->getId(),
                'gral_fp_medio_pago_descripcion' => $gral_fp_cuota->getGralFpMedioPago()->getDescripcion(),
                'gral_fp_forma_pago_id' => $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getId(),
                'gral_fp_forma_pago_descripcion' => $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getDescripcion(),
                'selected' => 0,
            );
            $arr[] = $arr_cuota;
        }
    }
} else {
    $arr_cuota = array(
        'id' => '',
        'descripcion' => '...',
            'gral_fp_medio_pago_id' => '',
            'gral_fp_medio_pago_descripcion' => '',
            'gral_fp_forma_pago_id' => '',
            'gral_fp_forma_pago_descripcion' => '',
        'selected' => 1,
    );
    $arr[] = $arr_cuota;

    $gral_fp_cuotas = GralFpCuota::getGralFpCuotas(null, null, true);
    foreach ($gral_fp_cuotas as $gral_fp_cuota) {
        $arr_cuota = array(
            'id' => $gral_fp_cuota->getId(),
            'descripcion' => $gral_fp_cuota->getDescripcion(),
            'gral_fp_medio_pago_id' => $gral_fp_cuota->getGralFpMedioPago()->getId(),
            'gral_fp_medio_pago_descripcion' => $gral_fp_cuota->getGralFpMedioPago()->getDescripcion(),
            'gral_fp_forma_pago_id' => $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getId(),
            'gral_fp_forma_pago_descripcion' => $gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPago()->getDescripcion(),
            'selected' => 0,
        );
        $arr[] = $arr_cuota;
    }
}
$arr_json = json_encode($arr);
echo $arr_json;
?>