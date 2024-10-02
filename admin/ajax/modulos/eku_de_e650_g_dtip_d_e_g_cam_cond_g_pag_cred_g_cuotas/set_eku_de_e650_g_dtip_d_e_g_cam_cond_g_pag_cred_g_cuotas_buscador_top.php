<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE650GDtipDEGCamCondGPagCredGCuotas::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE650GDtipDEGCamCondGPagCredGCuotas::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e653_cmonecuo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e654_ddmonecuo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e651_dmoncuota', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_e652_dvenccuo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e650_g_dtip_d_e_g_cam_cond_g_pag_cred_g_cuotas');
$criterio->setCriterios();

