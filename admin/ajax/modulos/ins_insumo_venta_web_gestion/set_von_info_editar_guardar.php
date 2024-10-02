<?php
include "_autoload.php";

$insumo_id = Gral::getVars(1, 'insumo_id', 0);
$venta_web_info_id = Gral::getVars(1, 'venta_web_info_id', 0);
$txt_von_descripcion = Gral::getVars(1, 'txt_von_descripcion', '');
$txa_von_descripcion_breve = Gral::getVars(1, 'txa_von_descripcion_breve', '');
$txa_von_descripcion_ext = Gral::getVars(1, 'txa_von_descripcion_ext', '');

$ins_insumo = InsInsumo::getOxId($insumo_id);
$ins_venta_web_info = InsVentaWebInfo::getOxId($venta_web_info_id);

if($ins_insumo){

    if(!$ins_venta_web_info){
        $ins_venta_web_info = new InsVentaWebInfo();
        $ins_venta_web_info->setInsInsumoId($insumo_id);
    }
    $ins_venta_web_info->setDescripcion($txt_von_descripcion);
    $ins_venta_web_info->setDescripcionBreve($txa_von_descripcion_breve);
    $ins_venta_web_info->setDescripcionExt($txa_von_descripcion_ext);
    //$ins_venta_web_info->setDestacado($destacado);
    $ins_venta_web_info->setEstado(1);
    $ins_venta_web_info->save();
    
    //Gral::prr($ins_venta_web_info);
}
