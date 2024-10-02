<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE960GDtipDEGTranspGVehTras::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE960GDtipDEGTranspGVehTras::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e961_dtivehtras', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e962_dmarveh', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e967_dtipidenveh', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e963_dnroidveh', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e964_dadicveh', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e965_dnromatveh', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_e966_dnrovuelo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e960_g_dtip_d_e_g_transp_g_veh_tras');
$criterio->setCriterios();

