<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeD200GDatGralOpeGDatRec::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeD200GDatGralOpeGDatRec::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d201_inatrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d202_itiope', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d203_cpaisrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d204_ddespaisre', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d205_iticontrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d206_drucrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d207_ddvrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d208_itipidrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d209_ddtipidrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d210_dnumidrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d211_dnomrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d212_dnomfanrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d213_ddirrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d218_dnumcasrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d219_cdeprec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d220_ddesdeprec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d221_cdisrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d222_ddesdisrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d223_cciurec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d224_ddesciurec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d214_dtelrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d215_dcelrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d216_demailrec', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_d217_dcodcliente', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_d200_g_dat_gral_ope_g_dat_rec.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_d200_g_dat_gral_ope_g_dat_rec.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_d200_g_dat_gral_ope_g_dat_rec');
$criterio->setCriterios();

