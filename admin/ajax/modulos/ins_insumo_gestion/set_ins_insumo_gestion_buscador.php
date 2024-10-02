<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo.id', Gral::getVars(1, 'buscador_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo.ins_marca_id', Gral::getVars(1, 'buscador_ins_insumo_ins_marca_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_marca_id_comparador'));
	$criterio->add('ins_insumo.ins_matriz_id', Gral::getVars(1, 'buscador_ins_insumo_ins_matriz_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_matriz_id_comparador'));
	$criterio->add('ins_insumo.descripcion', Gral::getVars(1, 'buscador_ins_insumo_descripcion'), Gral::getVars(1, 'buscador_ins_insumo_descripcion_comparador'));
	$criterio->add('ins_insumo.codigo_marca', Gral::getVars(1, 'buscador_ins_insumo_codigo_marca'), Gral::getVars(1, 'buscador_ins_insumo_codigo_marca_comparador'));
	$criterio->add('ins_insumo.codigo_interno', Gral::getVars(1, 'buscador_ins_insumo_codigo_interno'), Gral::getVars(1, 'buscador_ins_insumo_codigo_interno_comparador'));
	$criterio->add('ins_insumo.codigo_barra', Gral::getVars(1, 'buscador_ins_insumo_codigo_barra'), Gral::getVars(1, 'buscador_ins_insumo_codigo_barra_comparador'));
	$criterio->add('ins_insumo.codigo_barra_interno', Gral::getVars(1, 'buscador_ins_insumo_codigo_barra_interno'), Gral::getVars(1, 'buscador_ins_insumo_codigo_barra_interno_comparador'));
	$criterio->add('ins_insumo.es_comprable', Gral::getVars(1, 'buscador_ins_insumo_es_comprable'), Gral::getVars(1, 'buscador_ins_insumo_es_comprable_comparador'));
	$criterio->add('ins_insumo.es_consumible', Gral::getVars(1, 'buscador_ins_insumo_es_consumible'), Gral::getVars(1, 'buscador_ins_insumo_es_consumible_comparador'));
	$criterio->add('ins_insumo.es_transformable_origen', Gral::getVars(1, 'buscador_ins_insumo_es_transformable_origen'), Gral::getVars(1, 'buscador_ins_insumo_es_transformable_origen_comparador'));
	$criterio->add('ins_insumo.es_transformable_destino', Gral::getVars(1, 'buscador_ins_insumo_es_transformable_destino'), Gral::getVars(1, 'buscador_ins_insumo_es_transformable_destino_comparador'));
	$criterio->add('ins_insumo.ins_unidad_medida_pedido_id', Gral::getVars(1, 'buscador_ins_insumo_ins_unidad_medida_pedido_id'), Gral::getVars(1, 'buscador_ins_insumo_ins_unidad_medida_pedido_id_comparador'));
	$criterio->add('ins_insumo.retornable', Gral::getVars(1, 'buscador_ins_insumo_retornable'), Gral::getVars(1, 'buscador_ins_insumo_retornable_comparador'));
	$criterio->add('ins_insumo.identificable', Gral::getVars(1, 'buscador_ins_insumo_identificable'), Gral::getVars(1, 'buscador_ins_insumo_identificable_comparador'));
	$criterio->add('ins_insumo.punto_minimo', Gral::getVars(1, 'buscador_ins_insumo_punto_minimo'), Gral::getVars(1, 'buscador_ins_insumo_punto_minimo_comparador'));
	$criterio->add('ins_insumo.punto_pedido', Gral::getVars(1, 'buscador_ins_insumo_punto_pedido'), Gral::getVars(1, 'buscador_ins_insumo_punto_pedido_comparador'));
	$criterio->add('ins_insumo.punto_maximo', Gral::getVars(1, 'buscador_ins_insumo_punto_maximo'), Gral::getVars(1, 'buscador_ins_insumo_punto_maximo_comparador'));
	$criterio->add('ins_insumo.cantidad_maxima_pedido', Gral::getVars(1, 'buscador_ins_insumo_cantidad_maxima_pedido'), Gral::getVars(1, 'buscador_ins_insumo_cantidad_maxima_pedido_comparador'));
	$criterio->add('ins_insumo.observacion', Gral::getVars(1, 'buscador_ins_insumo_observacion'), Gral::getVars(1, 'buscador_ins_insumo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_costo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.ins_insumo_id', 'ins_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'prv_insumo.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'prv_insumo.ins_matriz_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo');
		$criterio->setCriterios();		
}
?>

