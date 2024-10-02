<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE600GDtipDEGCamCond::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE600GDtipDEGCamCond::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.eku_e601_icondope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.eku_e602_ddcondope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e600_g_dtip_d_e_g_cam_cond.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e600_g_dtip_d_e_g_cam_cond.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e600_g_dtip_d_e_g_cam_cond');
$criterio->setCriterios();

