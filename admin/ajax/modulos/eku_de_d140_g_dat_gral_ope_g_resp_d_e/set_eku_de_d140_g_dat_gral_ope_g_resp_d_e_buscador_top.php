<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeD140GDatGralOpeGRespDE::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeD140GDatGralOpeGRespDE::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d141_itipidrespde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d142_ddtipidrespde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d143_dnumidrespde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d144_dnomrespde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_d145_dcarrespde', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d140_g_dat_gral_ope_g_resp_d_e.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_d140_g_dat_gral_ope_g_resp_d_e.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_d140_g_dat_gral_ope_g_resp_d_e');
$criterio->setCriterios();

