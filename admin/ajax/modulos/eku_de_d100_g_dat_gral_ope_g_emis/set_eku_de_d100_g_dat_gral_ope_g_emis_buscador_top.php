<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeD100GDatGralOpeGEmis::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeD100GDatGralOpeGEmis::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d101_drucem', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d102_ddvemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d103_itipcont', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d104_ctipreg', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d105_dnomemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d106_dnomfanemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d107_ddiremi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d108_dnumcas', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d109_dcompdir1', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d110_dcompdir2', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d111_cdepemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d112_ddesdepemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d113_cdisemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d114_ddesdisemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d115_cciuemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d116_ddesciuemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d117_dtelemi', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d118_demaile', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.eku_d119_ddensuc', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d100_g_dat_gral_ope_g_emis.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_d100_g_dat_gral_ope_g_emis.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_d100_g_dat_gral_ope_g_emis');
$criterio->setCriterios();

