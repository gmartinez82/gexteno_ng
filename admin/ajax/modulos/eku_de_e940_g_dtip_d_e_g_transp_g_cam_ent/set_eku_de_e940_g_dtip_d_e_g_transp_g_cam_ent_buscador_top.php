<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE940GDtipDEGTranspGCamEnt::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE940GDtipDEGTranspGCamEnt::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e941_ddirlocent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e942_dnumcasent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e943_dcomp1ent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e944_dcomp2ent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e945_cdepent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e946_ddesdepent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e947_cdisent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e948_ddesdisent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e949_cciuent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e950_ddesciuent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_e951_dtelent', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent');
$criterio->setCriterios();

