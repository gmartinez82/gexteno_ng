<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE700GDtipDEGCamItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE700GDtipDEGCamItem::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e701_dcodint', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e702_dpararanc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e703_dncm', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e704_ddncpg', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e705_ddncpe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e706_dgtin', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e707_dgtinpq', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e708_ddesproser', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e709_cunimed', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e710_ddesunimed', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e711_dcantproser', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e712_cpaisorig', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e713_ddespaisorig', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e714_dinfitem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e715_crelmerc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e716_ddesrelmerc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e717_dcanquimer', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e718_dporquimer', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.eku_e719_dcdcanticipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e700_g_dtip_d_e_g_cam_item.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e700_g_dtip_d_e_g_cam_item.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e700_g_dtip_d_e_g_cam_item');
$criterio->setCriterios();

