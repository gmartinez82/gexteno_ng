<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeD010GDatGralOpeGOpeCom::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeD010GDatGralOpeGOpeCom::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d011_itiptra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d012_ddestiptra', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d013_itimp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d014_ddestimp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d015_cmoneope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d016_ddesmoneope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d017_dcondticam', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d018_dticam', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d019_icondant', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.eku_d020_ddescondant', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d010_g_dat_gral_ope_g_ope_com.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_d010_g_dat_gral_ope_g_ope_com.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_d010_g_dat_gral_ope_g_ope_com');
$criterio->setCriterios();

