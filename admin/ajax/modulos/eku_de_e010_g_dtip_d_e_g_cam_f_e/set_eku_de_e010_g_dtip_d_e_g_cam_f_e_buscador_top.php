<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE010GDtipDEGCamFE::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE010GDtipDEGCamFE::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.eku_e011_iindpres', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.eku_e012_ddesindpres', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.eku_e013_dfecemnr', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e010_g_dtip_d_e_g_cam_f_e.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e010_g_dtip_d_e_g_cam_f_e.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e010_g_dtip_d_e_g_cam_f_e');
$criterio->setCriterios();

