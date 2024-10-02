<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeRecepcion::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_recepcion.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.nro_comprobante', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.cantidad', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.fecha_entrega', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.vencimiento', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_recepcion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_recepcion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_recepcion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_oc.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('ins_insumo.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_tipo_estado_facturacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_tipo_estado_facturacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_tipo_estado_facturacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_agrupacion.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_agrupacion.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_recepcion_agrupacion.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('pde_tipo_recepcion', 'pde_tipo_recepcion.id', 'pde_recepcion.pde_tipo_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_recepcion.pde_centro_recepcion_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recepcion.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_recepcion.pde_pedido_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_recepcion.pde_oc_id', 'LEFT JOIN');
$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_recepcion.ins_insumo_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recepcion_tipo_estado', 'pde_recepcion_tipo_estado.id', 'pde_recepcion.pde_recepcion_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recepcion_tipo_estado_facturacion', 'pde_recepcion_tipo_estado_facturacion.id', 'pde_recepcion.pde_recepcion_tipo_estado_facturacion_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_recepcion_agrupacion', 'pde_recepcion_agrupacion.id', 'pde_recepcion.pde_recepcion_agrupacion_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_recepcion');
$criterio->setCriterios();

