<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE640GDtipDEGCamCondGPagCred::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE640GDtipDEGCamCondGPagCred::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e641_icondcred', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e642_ddcondcred', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e643_dplazocre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e644_dcuotas', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_e645_dmonent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e640_g_dtip_d_e_g_cam_cond_g_pag_cred');
$criterio->setCriterios();

