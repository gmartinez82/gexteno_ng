<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$txt_buscador = Gral::getVars(1, 'txt_buscador', '-----');



$criterio = new Criterio(PdeFactura::SES_CRITERIOS);
$criterio->setAmbiguo(true);
$criterio->addDistinct(true);

$criterio->addTrueInicialEnWhere();
PdeFactura::setAplicarFiltrosDeAlcance($criterio);

$criterio->addInicioSubconsulta();
    $criterio->addTrueInicialEnWhere();


$criterio->addFinSubconsulta();

if($txt_buscador != '-----'){
    $criterio->addInicioSubconsulta();

$criterio->add('pde_factura.id', $txt_buscador, Criterio::LIKE, false, Criterio::_AND);
$criterio->add('pde_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.numero_punto_venta', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.numero_factura', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.numero_factura_completo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.cae', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.numero_despacho', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.fecha_emision', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.fecha_vencimiento', Gral::getFechaToDB($txt_buscador), Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.persona_descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.razon_social', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.domicilio_legal', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.cuit', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.anio', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.nota_interna', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura.estado', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_proveedor.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura_tipo_estado.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura_tipo_estado.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_factura_tipo_estado.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_origen_factura.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_origen_factura.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_tipo_origen_factura.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_condicion_iva.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_tipo_personeria.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_empresa.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('pde_centro_pedido.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_fp_forma_pago.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_actividad.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_actividad.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_actividad.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_escenario.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_escenario.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_escenario.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('gral_mes.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('cntb_diario_asiento.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.descripcion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.codigo', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
$criterio->add('prv_descuento_financiero.observacion', $txt_buscador, Criterio::LIKE, false, Criterio::_OR);
    $criterio->addFinSubconsulta();
}
    

$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_factura.prv_proveedor_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_factura_tipo_estado', 'pde_factura_tipo_estado.id', 'pde_factura.pde_factura_tipo_estado_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_tipo_factura', 'pde_tipo_factura.id', 'pde_factura.pde_tipo_factura_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_tipo_origen_factura', 'pde_tipo_origen_factura.id', 'pde_factura.pde_tipo_origen_factura_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_factura.gral_condicion_iva_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_factura.gral_tipo_personeria_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_factura.gral_empresa_id', 'LEFT JOIN');
$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_factura.pde_centro_pedido_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_fp_forma_pago', 'gral_fp_forma_pago.id', 'pde_factura.gral_fp_forma_pago_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_actividad', 'gral_actividad.id', 'pde_factura.gral_actividad_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_escenario', 'gral_escenario.id', 'pde_factura.gral_escenario_id', 'LEFT JOIN');
$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_factura.gral_mes_id', 'LEFT JOIN');
$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'pde_factura.cntb_diario_asiento_id', 'LEFT JOIN');
$criterio->addRealJoin('prv_descuento_financiero', 'prv_descuento_financiero.id', 'pde_factura.prv_descuento_financiero_id', 'LEFT JOIN');
    
$criterio->addTabla('pde_factura');
$criterio->setCriterios();

