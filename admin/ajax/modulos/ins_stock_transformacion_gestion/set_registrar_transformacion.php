<?php

include "_autoload.php";

$cmb_pan_panol_id = Gral::getVars(1, 'cmb_pan_panol_id', null);
$cmb_ins_insumo_id = Gral::getVars(1, 'dbsug_ins_insumo_id', null);
$txt_cantidad = Gral::getVars(1, 'txt_cantidad', 0);

$cmb_afectar_costo = Gral::getVars(1, 'cmb_afectar_costo', 0);

$ins_insumo = InsInsumo::getOxId($cmb_ins_insumo_id);
$ins_insumo_destino_transformacions = $ins_insumo->getInsInsumoDestinoTransformacions();

$arr_origen = array(
    array(
        'panol_id' => $cmb_pan_panol_id,
        'insumo_id' => $cmb_ins_insumo_id,
        'cantidad' => $txt_cantidad,
    )
);

foreach ($ins_insumo_destino_transformacions as $ins_insumo_destino_transformacion) {
    $array = array(
        'panol_id' => $cmb_pan_panol_id,
        'insumo_id' => $ins_insumo_destino_transformacion->getInsInsumoDestino(),
        'cantidad' => ($ins_insumo_destino_transformacion->getCantidad() * $txt_cantidad),
        'afectar_costo' => $cmb_afectar_costo,
    );
    $arr_destino[] = $array;
}

InsStockTransformacion::setRegistrarTransformacion($arr_origen, $arr_destino);
?>