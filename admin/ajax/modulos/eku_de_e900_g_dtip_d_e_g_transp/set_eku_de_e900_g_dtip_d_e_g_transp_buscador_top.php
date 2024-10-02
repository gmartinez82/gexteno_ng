<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(EkuDeE900GDtipDEGTransp::SES_CRITERIOS);
$criterio->setAmbiguo(false);
$criterio->addDistinct(true);
$criterio->setBuscador('');

$criterio->addTrueInicialEnWhere();
EkuDeE900GDtipDEGTransp::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();
    
    $criterio->setAmbiguo(true);
    $criterio->setBuscador($txt_buscador);

$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e901_itiptrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e902_ddestiptrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e903_imodtrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e904_ddesmodtrans', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e905_irespflete', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e906_ccondneg', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e907_dnumanif', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e908_dnudespimp', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e909_dinitras', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e910_dfintras', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e911_cpaisdest', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.eku_e912_ddespaisdest', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de_e900_g_dtip_d_e_g_transp.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('eku_de.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('eku_de', 'eku_de.id', 'eku_de_e900_g_dtip_d_e_g_transp.eku_de_id', 'LEFT JOIN');
    
$criterio->addTabla('eku_de_e900_g_dtip_d_e_g_transp');
$criterio->setCriterios();

