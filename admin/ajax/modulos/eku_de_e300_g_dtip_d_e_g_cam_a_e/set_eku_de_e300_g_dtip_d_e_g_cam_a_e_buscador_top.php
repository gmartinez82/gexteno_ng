<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE300GDtipDEGCamAE::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE300GDtipDEGCamAE::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e301_inatven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e302_ddesnatven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e304_itipidven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e305_ddtipidven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e306_dnumidven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e307_dnomven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e308_ddirven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e309_dnumcasven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e310_cdepven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e311_ddesdepven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e312_cdisven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e313_ddesdisven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e314_cciuven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e315_ddesciuven', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e316_ddirprov', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e317_cdepprov', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e318_ddesdepprov', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e319_cdisprov', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e320_ddesdisprov', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e321_cciuprov', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_e322_ddesciuprov', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e300_g_dtip_d_e_g_cam_a_e.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e300_g_dtip_d_e_g_cam_a_e.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e300_g_dtip_d_e_g_cam_a_e');
$criterio->setCriterios();

