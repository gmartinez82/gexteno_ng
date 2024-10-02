<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(VtaPresupuestoInsInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
VtaPresupuestoInsInsumo::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('vta_presupuesto_ins_insumo.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('vta_presupuesto_ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.importe_unitario', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.descuento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.conflicto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.importe_costo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.porcentaje_politica_descuento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.importe_politica_descuento', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.porcentaje_comision', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.importe_comision', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.cantidad_bulto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.importe_descuento_bulto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.porcentaje_descuento_bulto', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto_ins_insumo.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_presupuesto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_costo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_costo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_costo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('vta_politica_descuento_rango.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_bulto.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_bulto.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo_bulto.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_ins_insumo.vta_presupuesto_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'vta_presupuesto_ins_insumo.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'vta_presupuesto_ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_lista_precio', 'ins_lista_precio.id', 'vta_presupuesto_ins_insumo.ins_lista_precio_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.id', 'vta_presupuesto_ins_insumo.ins_insumo_costo_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_politica_descuento', 'vta_politica_descuento.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_id', 'LEFT JOIN');
$criterio->addRealJoin('vta_politica_descuento_rango', 'vta_politica_descuento_rango.id', 'vta_presupuesto_ins_insumo.vta_politica_descuento_rango_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo_bulto', 'ins_insumo_bulto.id', 'vta_presupuesto_ins_insumo.ins_insumo_bulto_id', 'LEFT JOIN');
    
$criterio->addTabla('vta_presupuesto_ins_insumo');
$criterio->setCriterios();

