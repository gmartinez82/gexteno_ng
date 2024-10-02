<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeNotaCreditoItem::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeNotaCreditoItem::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_nota_credito_item.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_nota_credito_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_item.importe_unitario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_item.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_item.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_concepto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_concepto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_nota_credito_concepto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_item.pde_nota_credito_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'pde_nota_credito_item.gral_tipo_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_nota_credito_concepto', 'pde_nota_credito_concepto.id', 'pde_nota_credito_item.pde_nota_credito_concepto_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_nota_credito_item');
$criterio->setCriterios();

