<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE810GCamEspGGrupSup::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE810GCamEspGGrupSup::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e811_dnomcaj', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e812_defectivo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e813_dvuelto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e814_ddonac', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.eku_e815_ddesdonac', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e810_g_cam_esp_g_grup_sup.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e810_g_cam_esp_g_grup_sup.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e810_g_cam_esp_g_grup_sup');
$criterio->setCriterios();

