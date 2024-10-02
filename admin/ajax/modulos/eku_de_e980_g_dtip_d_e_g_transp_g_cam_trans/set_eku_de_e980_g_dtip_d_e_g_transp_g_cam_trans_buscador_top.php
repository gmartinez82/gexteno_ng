<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE980GDtipDEGTranspGCamTrans::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE980GDtipDEGTranspGCamTrans::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e981_inattrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e982_dnomtrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e983_dructrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e984_ddvtrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e985_itipidtrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e986_ddtipidtrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e987_dnumidtrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e988_cnactrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e989_ddesnactrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e990_dnumidchof', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e991_dnomchof', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e992_ddomfisc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e993_ddirchof', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e994_dnombag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e995_drucag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e996_ddvag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_e997_ddirage', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e980_g_dtip_d_e_g_transp_g_cam_trans');
$criterio->setCriterios();

