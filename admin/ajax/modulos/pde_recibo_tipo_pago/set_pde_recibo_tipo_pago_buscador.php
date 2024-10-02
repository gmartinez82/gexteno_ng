<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeReciboTipoPago::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_recibo_tipo_pago.id', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_id'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_id_comparador'));
	$criterio->add('pde_recibo_tipo_pago.descripcion', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_descripcion'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_descripcion_comparador'));
	$criterio->add('pde_recibo_tipo_pago.descripcion_corta', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_descripcion_corta'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_descripcion_corta_comparador'));
	$criterio->add('pde_recibo_tipo_pago.codigo', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_codigo'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_codigo_comparador'));
	$criterio->add('pde_recibo_tipo_pago.codigo_min', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_codigo_min'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_codigo_min_comparador'));
	$criterio->add('pde_recibo_tipo_pago.color', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_color'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_color_comparador'));
	$criterio->add('pde_recibo_tipo_pago.color_secundario', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_color_secundario'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_color_secundario_comparador'));
	$criterio->add('pde_recibo_tipo_pago.observacion', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_observacion'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_observacion_comparador'));
	$criterio->add('pde_recibo_tipo_pago.estado', Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_estado'), Gral::getVars(1, 'buscador_pde_recibo_tipo_pago_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.pde_recibo_tipo_pago_id', 'pde_recibo_tipo_pago.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recibo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_recibo', 'pde_tipo_recibo.id', 'pde_recibo.pde_tipo_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_recibo.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_recibo.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_recibo.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_recibo.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_condicion_pago', 'pde_recibo_condicion_pago.id', 'pde_recibo.pde_recibo_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_recibo.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'pde_recibo.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_recibo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'pde_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_recibo_tipo_pago');
		$criterio->setCriterios();		
}
?>

