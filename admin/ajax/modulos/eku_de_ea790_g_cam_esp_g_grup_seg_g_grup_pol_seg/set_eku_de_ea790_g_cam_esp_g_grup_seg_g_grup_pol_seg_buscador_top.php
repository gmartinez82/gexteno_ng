<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeEa790GCamEspGGrupSegGGrupPolSeg::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeEa790GCamEspGGrupSegGGrupPolSeg::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea791_dpoliza', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea792_dunidvig', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea793_dvigencia', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea794_dnumpoliza', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea795_dfecinivig', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea796_dfecfinvig', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_ea797_dcodint', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_ea790_g_cam_esp_g_grup_seg_g_grup_pol_seg');
$criterio->setCriterios();

