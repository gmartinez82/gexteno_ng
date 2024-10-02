<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeD130GDatGralOpeGEmisGActEco::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeD130GDatGralOpeGEmisGActEco::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.eku_d131_cacteco', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.eku_d132_ddesacteco', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_d130_g_dat_gral_ope_g_emis_g_act_eco');
$criterio->setCriterios();

