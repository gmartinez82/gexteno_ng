<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeReciboConcepto::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeReciboConcepto::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_recibo_concepto.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_recibo_concepto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_concepto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recibo_concepto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_cuenta.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('cntb_cuenta', 'cntb_cuenta.id', 'pde_recibo_concepto.cntb_cuenta_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_recibo_concepto');
$criterio->setCriterios();

