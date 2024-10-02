<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE605GDtipDEGCamCondGPaConEIni::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE605GDtipDEGCamCondGPaConEIni::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e606_itipago', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e607_ddestipag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e608_dmontipag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e609_cmonetipag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e610_ddmonetipag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_e611_dticamtipa', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e605_g_dtip_d_e_g_cam_cond_g_pa_con_e_ini');
$criterio->setCriterios();

