<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeF001GTotSub::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeF001GTotSub::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_f001_g_tot_sub.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_f001_g_tot_sub.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f002_dsubexe', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f003_dsubexo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f004_dsub5', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f005_dsub10', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f008_dtotope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f009_dtotdesc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f033_dtotdescglotem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f034_dtotantitem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f035_dtotant', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f010_dporcdesctotal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f011_ddesctotal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f012_danticipo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f013_dredon', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f025_dcomi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f014_dtotgralope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f015_diva5', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f016_diva10', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f036_dliqtotiva5', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f037_dliqtotiva10', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f026_divacomi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f017_dtotiva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f018_dbasegrav5', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f019_dbasegrav10', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f020_dtbasgraiva', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f023_dtotalgs', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.eku_f024_dtotcom', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_f001_g_tot_sub.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_f001_g_tot_sub.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_f001_g_tot_sub');
$criterio->setCriterios();

