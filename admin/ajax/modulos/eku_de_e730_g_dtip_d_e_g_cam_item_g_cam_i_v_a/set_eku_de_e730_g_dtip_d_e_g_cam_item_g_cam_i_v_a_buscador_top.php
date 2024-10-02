<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE730GDtipDEGCamItemGCamIVA::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE730GDtipDEGCamItemGCamIVA::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e731_iafeciva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e732_ddesafeciva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e733_dpropiva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e734_dtasaiva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e735_dbasgraviva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_e736_dliqivaitem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_de_id', 'LEFT JOIN');
$criterio->addRealJoin('eku_de_e700_g_dtip_d_e_g_cam_item', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e730_g_dtip_d_e_g_cam_item_g_cam_i_v_a');
$criterio->setCriterios();

