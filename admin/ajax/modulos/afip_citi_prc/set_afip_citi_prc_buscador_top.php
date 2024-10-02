<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(AfipCitiPrc::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
AfipCitiPrc::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('afip_citi_prc.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('afip_citi_prc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.anio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('afip_citi_prc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'afip_citi_prc.gral_empresa_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'afip_citi_prc.gral_mes_id', 'LEFT JOIN');
    
$criterio->addTabla('afip_citi_prc');
$criterio->setCriterios();

