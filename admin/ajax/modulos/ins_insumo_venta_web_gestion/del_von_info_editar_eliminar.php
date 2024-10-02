<?php
include "_autoload.php";

$insumo_id = Gral::getVars(1, 'insumo_id', 0);
$venta_web_info_id = Gral::getVars(1, 'venta_web_info_id', 0);

$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_venta_web_info = InsVentaWebInfo::getOxId($venta_web_info_id);

if($ins_insumo){

    if($ins_venta_web_info){
        $ins_venta_web_info->deleteAll();
    }
}
