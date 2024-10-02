<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeC001GTimb::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeC001GTimb::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_c001_g_timb.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_c001_g_timb.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c002_itide', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c003_ddestide', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c004_dnumtim', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c005_dest', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c006_dpunexp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c007_dnumdoc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c010_dserienum', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c008_dfeinit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.eku_c009_dfefint', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_c001_g_timb.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_c001_g_timb.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_c001_g_timb');
$criterio->setCriterios();

