<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE020GDtipDEGCompPub::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE020GDtipDEGCompPub::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e021_dmodcont', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e022_dentcont', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e023_danocont', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e024_dseccont', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.eku_e025_dfecodcont', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e020_g_dtip_d_e_g_comp_pub.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e020_g_dtip_d_e_g_comp_pub.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e020_g_dtip_d_e_g_comp_pub');
$criterio->setCriterios();

