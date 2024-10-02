<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeOcAgrupacionItem::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeOcAgrupacionItem::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_oc_agrupacion_item.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_oc_agrupacion_item.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_item.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_item.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_item.importe_esperado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_item.afecta_costo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion_item.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_insumo_costo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_comercial.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_comercial.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_comercial.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_oc_agrupacion', 'pde_oc_agrupacion.id', 'pde_oc_agrupacion_item.pde_oc_agrupacion_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_oc_agrupacion_item.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'pde_oc_agrupacion_item.prv_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.id', 'pde_oc_agrupacion_item.prv_insumo_costo_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_oc_agrupacion_item.prv_descuento_financiero_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_descuento_comercial', 'prv_descuento_comercial.id', 'pde_oc_agrupacion_item.prv_descuento_comercial_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_oc_agrupacion_item');
$criterio->setCriterios();

