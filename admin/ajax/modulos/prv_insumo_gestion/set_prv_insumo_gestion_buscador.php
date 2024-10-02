<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_insumo.id', Gral::getVars(1, 'buscador_prv_insumo_id'), Gral::getVars(1, 'buscador_prv_insumo_id_comparador'));
	$criterio->add('prv_insumo.descripcion', Gral::getVars(1, 'buscador_prv_insumo_descripcion'), Gral::getVars(1, 'buscador_prv_insumo_descripcion_comparador'));
	$criterio->add('prv_insumo.ins_insumo_id', Gral::getVars(1, 'buscador_prv_insumo_ins_insumo_id'), Gral::getVars(1, 'buscador_prv_insumo_ins_insumo_id_comparador'));
	$criterio->add('prv_insumo.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_insumo_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_insumo_prv_proveedor_id_comparador'));
	$criterio->add('prv_insumo.codigo_proveedor', Gral::getVars(1, 'buscador_prv_insumo_codigo_proveedor'), Gral::getVars(1, 'buscador_prv_insumo_codigo_proveedor_comparador'));
	$criterio->add('prv_insumo.ins_marca_id', Gral::getVars(1, 'buscador_prv_insumo_ins_marca_id'), Gral::getVars(1, 'buscador_prv_insumo_ins_marca_id_comparador'));
	$criterio->add('prv_insumo.codigo_marca', Gral::getVars(1, 'buscador_prv_insumo_codigo_marca'), Gral::getVars(1, 'buscador_prv_insumo_codigo_marca_comparador'));
	$criterio->add('prv_insumo.ins_matriz_id', Gral::getVars(1, 'buscador_prv_insumo_ins_matriz_id'), Gral::getVars(1, 'buscador_prv_insumo_ins_matriz_id_comparador'));
	$criterio->add('prv_insumo.ins_marca_pieza', Gral::getVars(1, 'buscador_prv_insumo_ins_marca_pieza'), Gral::getVars(1, 'buscador_prv_insumo_ins_marca_pieza_comparador'));
	$criterio->add('prv_insumo.codigo_pieza', Gral::getVars(1, 'buscador_prv_insumo_codigo_pieza'), Gral::getVars(1, 'buscador_prv_insumo_codigo_pieza_comparador'));
	$criterio->add('prv_insumo.codigo', Gral::getVars(1, 'buscador_prv_insumo_codigo'), Gral::getVars(1, 'buscador_prv_insumo_codigo_comparador'));
	$criterio->add('prv_insumo.fecha_actualizacion', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_prv_insumo_fecha_actualizacion')), Gral::getVars(1, 'buscador_prv_insumo_fecha_actualizacion_comparador'));
	$criterio->add('prv_insumo.observacion', Gral::getVars(1, 'buscador_prv_insumo_observacion'), Gral::getVars(1, 'buscador_prv_insumo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.prv_insumo_id', 'prv_insumo.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.id', 'prv_insumo_costo.prv_importacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_insumo');
		$criterio->setCriterios();		
}
?>

