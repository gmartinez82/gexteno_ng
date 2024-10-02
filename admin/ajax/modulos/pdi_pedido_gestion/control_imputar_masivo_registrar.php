<?php

include "_autoload.php";

$panol_id = Gral::getVars(2, 'panol_id', 0);
$coche_id = Gral::getVars(2, 'coche_id', 0);
$operario_id = Gral::getVars(2, 'operario_id', 0);

$pan_panol = PanPanol::getOxId($panol_id);
$veh_coche = VehCoche::getOxId($coche_id);
$ope_operario = OpeOperario::getOxId($operario_id);

$arr_error['error'] = false;

$cantidad_acumulada = array();

// control del array en session
$array_imputar_masivo = Gral::getSes('PDI_PEDIDO_IMPUTAR_MASIVO');
foreach ($array_imputar_masivo as $i => $cantidad) {
    $arr = explode('-', $i);
    $insumo_id = $arr[0];
    $ot_id = $arr[1];
    $tarea_resuelta_id = $arr[2];

    $ins_insumo = InsInsumo::getOxId($insumo_id);
    $tal_orden_trabajo = TalOrdenTrabajo::getOxId($ot_id);
    $tal_tarea_resuelta = TalTareaResuelta::getOxId($tarea_resuelta_id);

    $cantidad_acumulada[$insumo_id]+= $cantidad;

    $cantidad_en_stock = 0;
    if ($ins_insumo && $pan_panol) {
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
        if ($ins_stock_resumen) {
            $cantidad_en_stock = $ins_stock_resumen->getCantidad();
        }
    }

    // se controla el stock del panol
    if ($ins_insumo && $pan_panol) {
        if ($cantidad > $cantidad_en_stock) {
            $arr_error['pdi_pedido_imputar_masivo_' . $i . '_error'] = 'La cantidad entregada SUPERA el STOCK Actual de: ' . $cantidad_en_stock . ' ' . $ins_insumo->getInsUnidadMedida()->getDescripcion();
            $arr_error['error'] = true;
        }
    }

    if ($tal_orden_trabajo->getVehCocheId() != $veh_coche->getId()) {
        $arr_error['pdi_pedido_imputar_masivo_' . $i . '_error'] = 'La OT no corresponde con el coche indicado';
        $arr_error['error'] = true;
    }

    if ($tal_tarea_resuelta->getOpeOperarioId() != $ope_operario->getId()) {
        $arr_error['pdi_pedido_imputar_masivo_' . $i . '_error'] = 'La Tarea Resuelta no corresponde al operario indicado';
        $arr_error['error'] = true;
    }
}

/* Control */
if ($panol_id == 0) {
    $arr_error['pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id_error'] = 'Debe Indicar un Panol';
    $arr_error['error'] = true;
}
if ($coche_id == 0) {
    $arr_error['pdi_pedido_imputar_masivo_cmb_veh_coche_id_error'] = 'Debe Indicar un Coche';
    $arr_error['error'] = true;
}
if ($operario_id == 0) {
    $arr_error['pdi_pedido_imputar_masivo_cmb_ope_operario_id_error'] = 'Debe indicar un operario';
    $arr_error['error'] = true;
}

// agregado 14/11/2016 por psrosen
// se controla el stock total del insumo vs la cantidad de veces agregado, por si se agrega en distintos lugares
foreach ($cantidad_acumulada as $insumo_id => $cantidad) {
    $ins_insumo = InsInsumo::getOxId($insumo_id);

    $cantidad_en_stock = 0;
    if ($ins_insumo && $pan_panol) {
        $ins_stock_resumen = $ins_insumo->getInsStockResumenEnPanol($pan_panol);
        if ($ins_stock_resumen) {
            $cantidad_en_stock = $ins_stock_resumen->getCantidad();
        }
    }
    
    // se controla el stock del panol de manera general
    if ($ins_insumo && $pan_panol) {
        if ($cantidad > $cantidad_en_stock) {
            $arr_error['div_error_general'] = 'La cantidad TOTAL de '.$cantidad.' '.$ins_insumo->getInsUnidadMedida()->getDescripcion().' que se intenta entregar del insumo "'.$ins_insumo->getDescripcion().'" SUPERA el STOCK Actual de: ' . $cantidad_en_stock . ' ' . $ins_insumo->getInsUnidadMedida()->getDescripcion();
            $arr_error['error'] = true;
        }
    }    
}


$arr_json = json_encode($arr_error);
echo $arr_json;
?>