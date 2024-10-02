<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiTipoOrigen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_tipo_origen.id', Gral::getVars(1, 'buscador_pdi_tipo_origen_id'), Gral::getVars(1, 'buscador_pdi_tipo_origen_id_comparador'));
	$criterio->add('pdi_tipo_origen.descripcion', Gral::getVars(1, 'buscador_pdi_tipo_origen_descripcion'), Gral::getVars(1, 'buscador_pdi_tipo_origen_descripcion_comparador'));
	$criterio->add('pdi_tipo_origen.codigo', Gral::getVars(1, 'buscador_pdi_tipo_origen_codigo'), Gral::getVars(1, 'buscador_pdi_tipo_origen_codigo_comparador'));
	$criterio->add('pdi_tipo_origen.observacion', Gral::getVars(1, 'buscador_pdi_tipo_origen_observacion'), Gral::getVars(1, 'buscador_pdi_tipo_origen_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.pdi_tipo_origen_id', 'pdi_tipo_origen.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pdi_pedido.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_urgencia', 'pdi_urgencia.id', 'pdi_pedido.pdi_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pdi_pedido.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_tipo_estado', 'pdi_tipo_estado.id', 'pdi_pedido.pdi_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion', 'pdi_pedido_agrupacion.id', 'pdi_pedido.pdi_pedido_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_item', 'pdi_pedido_agrupacion_item.id', 'pdi_pedido.pdi_pedido_agrupacion_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_agrupacion_tipo_estado', 'pdi_pedido_agrupacion_tipo_estado.id', 'pdi_pedido_agrupacion.pdi_pedido_agrupacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_tipo_origen');
		$criterio->setCriterios();		
}
?>

