<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE770GDtipDEGCamItemGVehNuevo::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE770GDtipDEGCamItemGVehNuevo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e771_itipopvn', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e772_ddestipopvn', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e773_dchasis', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e774_dcolor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e775_dpotencia', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e776_dcapmot', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e777_dpnet', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e778_dpbruto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e779_itipcom', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e780_ddestipcom', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e781_dnromotor', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e782_dcaptracc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e783_danofab', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e784_ctipveh', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e785_dcapac', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_e786_dcilin', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_de_id', 'LEFT JOIN');
$criterio->addRealJoin('eku_de_e700_g_dtip_d_e_g_cam_item', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo');
$criterio->setCriterios();

