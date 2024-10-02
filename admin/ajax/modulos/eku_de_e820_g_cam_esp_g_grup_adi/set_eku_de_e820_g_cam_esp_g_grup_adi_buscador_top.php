<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE820GCamEspGGrupAdi::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE820GCamEspGGrupAdi::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e821_dciclo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e822_dfecinic', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e823_dfecfinc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e824_dvencpag', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e825_dcontrato', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.eku_e826_dsalant', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e820_g_cam_esp_g_grup_adi.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e820_g_cam_esp_g_grup_adi.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e820_g_cam_esp_g_grup_adi');
$criterio->setCriterios();

