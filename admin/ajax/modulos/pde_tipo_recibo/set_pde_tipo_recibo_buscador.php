<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeTipoRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_tipo_recibo.id', Gral::getVars(1, 'buscador_pde_tipo_recibo_id'), Gral::getVars(1, 'buscador_pde_tipo_recibo_id_comparador'));
	$criterio->add('pde_tipo_recibo.descripcion', Gral::getVars(1, 'buscador_pde_tipo_recibo_descripcion'), Gral::getVars(1, 'buscador_pde_tipo_recibo_descripcion_comparador'));
	$criterio->add('pde_tipo_recibo.codigo_min', Gral::getVars(1, 'buscador_pde_tipo_recibo_codigo_min'), Gral::getVars(1, 'buscador_pde_tipo_recibo_codigo_min_comparador'));
	$criterio->add('pde_tipo_recibo.codigo', Gral::getVars(1, 'buscador_pde_tipo_recibo_codigo'), Gral::getVars(1, 'buscador_pde_tipo_recibo_codigo_comparador'));
	$criterio->add('pde_tipo_recibo.informa', Gral::getVars(1, 'buscador_pde_tipo_recibo_informa'), Gral::getVars(1, 'buscador_pde_tipo_recibo_informa_comparador'));
	$criterio->add('pde_tipo_recibo.observacion', Gral::getVars(1, 'buscador_pde_tipo_recibo_observacion'), Gral::getVars(1, 'buscador_pde_tipo_recibo_observacion_comparador'));
	$criterio->add('pde_tipo_recibo.estado', Gral::getVars(1, 'buscador_pde_tipo_recibo_estado'), Gral::getVars(1, 'buscador_pde_tipo_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_condicion_iva_pde_tipo_recibo', 'gral_condicion_iva_pde_tipo_recibo.pde_tipo_recibo_id', 'pde_tipo_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'gral_condicion_iva_pde_tipo_recibo.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo', 'pde_recibo.pde_tipo_recibo_id', 'pde_tipo_recibo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_recibo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_origen_recibo', 'pde_tipo_origen_recibo.id', 'pde_recibo.pde_tipo_origen_recibo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_recibo.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_recibo.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_recibo.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_estado', 'pde_recibo_tipo_estado.id', 'pde_recibo.pde_recibo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_condicion_pago', 'pde_recibo_condicion_pago.id', 'pde_recibo.pde_recibo_condicion_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recibo_tipo_pago', 'pde_recibo_tipo_pago.id', 'pde_recibo.pde_recibo_tipo_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_recibo.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_diario_asiento', 'cntb_diario_asiento.id', 'pde_recibo.cntb_diario_asiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_recibo.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'pde_recibo.fnd_caja_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_tipo_recibo');
		$criterio->setCriterios();		
}
?>

