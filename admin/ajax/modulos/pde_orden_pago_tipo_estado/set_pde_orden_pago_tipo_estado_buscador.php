<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeOrdenPagoTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_orden_pago_tipo_estado.id', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_id_comparador'));
	$criterio->add('pde_orden_pago_tipo_estado.descripcion', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_descripcion_comparador'));
	$criterio->add('pde_orden_pago_tipo_estado.codigo', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_codigo'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_codigo_comparador'));
	$criterio->add('pde_orden_pago_tipo_estado.activo', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_activo'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_activo_comparador'));
	$criterio->add('pde_orden_pago_tipo_estado.terminal', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_terminal'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_terminal_comparador'));
	$criterio->add('pde_orden_pago_tipo_estado.anulado', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_anulado'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_anulado_comparador'));
	$criterio->add('pde_orden_pago_tipo_estado.observacion', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_observacion'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_observacion_comparador'));
	$criterio->add('pde_orden_pago_tipo_estado.estado', Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_estado'), Gral::getVars(1, 'buscador_pde_orden_pago_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.pde_orden_pago_tipo_estado_id', 'pde_orden_pago_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'pde_orden_pago.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'pde_orden_pago.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'pde_orden_pago.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'pde_orden_pago.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_orden_pago.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_mes', 'gral_mes.id', 'pde_orden_pago.gral_mes_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'pde_orden_pago.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_estado', 'pde_orden_pago_estado.pde_orden_pago_tipo_estado_id', 'pde_orden_pago_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_preventista', 'prv_preventista.id', 'pde_orden_pago_estado.prv_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'pde_orden_pago_estado.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_orden_pago_tipo_estado');
		$criterio->setCriterios();		
}
?>

