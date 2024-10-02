<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE791GCamEspGGrupEner::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE791GCamEspGGrupEner::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e792_dnromed', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e793_dactiv', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e794_dcateg', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e795_dlecant', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e796_dlecact', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.eku_e797_dconkwh', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e791_g_cam_esp_g_grup_ener.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e791_g_cam_esp_g_grup_ener.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e791_g_cam_esp_g_grup_ener');
$criterio->setCriterios();

