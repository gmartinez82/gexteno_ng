<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE720GDtipDEGCamItemGValorItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE720GDtipDEGCamItemGValorItem::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_e721_dpuniproser', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_e725_dticamit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_e727_dtotbruopeitem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea002_ddescitem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea003_dporcdesit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea004_ddescgloitem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea006_dantpreuniit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea007_dantglopreuniit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea008_dtotopeitem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_ea009_dtotopegs', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_de_id', 'LEFT JOIN');
$criterio->addRealJoin('eku_de_e700_g_dtip_d_e_g_cam_item', 'eku_de_e700_g_dtip_d_e_g_cam_item.id', 'eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item.eku_de_e700_g_dtip_d_e_g_cam_item_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e720_g_dtip_d_e_g_cam_item_g_valor_item');
$criterio->setCriterios();

