<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiPedidoAgrupacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_pedido_agrupacion.id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion.descripcion', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_descripcion'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_descripcion_comparador'));
	$criterio->add('pdi_pedido_agrupacion.codigo', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_codigo'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_codigo_comparador'));
	$criterio->add('pdi_pedido_agrupacion.pan_panol_origen', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pan_panol_origen'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pan_panol_origen_comparador'));
	$criterio->add('pdi_pedido_agrupacion.pan_panol_destino', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pan_panol_destino'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pan_panol_destino_comparador'));
	$criterio->add('pdi_pedido_agrupacion.pdi_pedido_agrupacion_tipo_estado_id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pdi_pedido_agrupacion_tipo_estado_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pdi_pedido_agrupacion_tipo_estado_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion.pdi_tipo_origen_id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pdi_tipo_origen_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pdi_tipo_origen_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion.pdi_urgencia_id', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pdi_urgencia_id'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_pdi_urgencia_id_comparador'));
	$criterio->add('pdi_pedido_agrupacion.nota_publica', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_nota_publica'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_nota_publica_comparador'));
	$criterio->add('pdi_pedido_agrupacion.nota_interna', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_nota_interna'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_nota_interna_comparador'));
	$criterio->add('pdi_pedido_agrupacion.observacion', Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_observacion'), Gral::getVars(1, 'buscador_pdi_pedido_agrupacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.pdi_pedido_agrupacion_id', 'pdi_pedido_agrupacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pdi_pedido.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_origen', 'pdi_tipo_origen.id', 'pdi_pedido.pdi_tipo_origen_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_urgencia', 'pdi_urgencia.id', 'pdi_pedido.pdi_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pdi_pedido.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_item', 'pdi_pedido_agrupacion_item.id', 'pdi_pedido.pdi_pedido_agrupacion_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_estado', 'pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_id', 'pdi_pedido_agrupacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_tipo_estado', 'pdi_pedido_agrupacion_tipo_estado.id', 'pdi_pedido_agrupacion_estado.pdi_pedido_agrupacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_enviado', 'pdi_pedido_agrupacion_enviado.pdi_pedido_agrupacion_id', 'pdi_pedido_agrupacion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_pedido_agrupacion');
		$criterio->setCriterios();		
}
?>

