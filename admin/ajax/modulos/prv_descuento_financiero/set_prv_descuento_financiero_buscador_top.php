<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PrvDescuentoFinanciero::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PrvDescuentoFinanciero::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('prv_descuento_financiero.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('prv_descuento_financiero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.porcentaje_descuento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_descuento_financiero.prv_proveedor_id', 'LEFT JOIN');
    
$criterio->addTabla('prv_descuento_financiero');
$criterio->setCriterios();

