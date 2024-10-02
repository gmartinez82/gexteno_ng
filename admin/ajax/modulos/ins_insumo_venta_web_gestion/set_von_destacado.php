<?php
include "_autoload.php";

$insumo_id = Gral::getVars(1, 'insumo_id', 0);
$destacado = Gral::getVars(1, 'destacado', 0);
$ins_insumo = InsInsumo::getOxId($insumo_id);

if($ins_insumo){
    $ins_venta_web_infos = $ins_insumo->getInsVentaWebInfos();
    $ins_venta_web_info = $ins_venta_web_infos[0];

    if($ins_venta_web_info){
        $ins_venta_web_info->setDestacado($destacado);
        $ins_venta_web_info->save();
    }
}