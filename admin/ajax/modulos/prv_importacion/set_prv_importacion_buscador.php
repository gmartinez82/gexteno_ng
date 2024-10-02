<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvImportacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_importacion.id', Gral::getVars(1, 'buscador_prv_importacion_id'), Gral::getVars(1, 'buscador_prv_importacion_id_comparador'));
	$criterio->add('prv_importacion.descripcion', Gral::getVars(1, 'buscador_prv_importacion_descripcion'), Gral::getVars(1, 'buscador_prv_importacion_descripcion_comparador'));
	$criterio->add('prv_importacion.codigo', Gral::getVars(1, 'buscador_prv_importacion_codigo'), Gral::getVars(1, 'buscador_prv_importacion_codigo_comparador'));
	$criterio->add('prv_importacion.prv_importacion_tipo_estado_id', Gral::getVars(1, 'buscador_prv_importacion_prv_importacion_tipo_estado_id'), Gral::getVars(1, 'buscador_prv_importacion_prv_importacion_tipo_estado_id_comparador'));
	$criterio->add('prv_importacion.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_importacion_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_importacion_prv_proveedor_id_comparador'));
	$criterio->add('prv_importacion.ins_marca_id', Gral::getVars(1, 'buscador_prv_importacion_ins_marca_id'), Gral::getVars(1, 'buscador_prv_importacion_ins_marca_id_comparador'));
	$criterio->add('prv_importacion.ins_marca_pieza', Gral::getVars(1, 'buscador_prv_importacion_ins_marca_pieza'), Gral::getVars(1, 'buscador_prv_importacion_ins_marca_pieza_comparador'));
	$criterio->add('prv_importacion.prv_convenio_descuento_id', Gral::getVars(1, 'buscador_prv_importacion_prv_convenio_descuento_id'), Gral::getVars(1, 'buscador_prv_importacion_prv_convenio_descuento_id_comparador'));
	$criterio->add('prv_importacion.descuento', Gral::getVars(1, 'buscador_prv_importacion_descuento'), Gral::getVars(1, 'buscador_prv_importacion_descuento_comparador'));
	$criterio->add('prv_importacion.cantidad_tab1', Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab1'), Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab1_comparador'));
	$criterio->add('prv_importacion.cantidad_tab2', Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab2'), Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab2_comparador'));
	$criterio->add('prv_importacion.cantidad_tab3', Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab3'), Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab3_comparador'));
	$criterio->add('prv_importacion.cantidad_tab4', Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab4'), Gral::getVars(1, 'buscador_prv_importacion_cantidad_tab4_comparador'));
	$criterio->add('prv_importacion.observacion', Gral::getVars(1, 'buscador_prv_importacion_observacion'), Gral::getVars(1, 'buscador_prv_importacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_costo', 'ins_insumo_costo.prv_importacion_id', 'prv_importacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_costo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'ins_insumo_costo.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_transformacion', 'ins_stock_transformacion.id', 'ins_insumo_costo.ins_stock_transformacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo_costo', 'prv_insumo_costo.prv_importacion_id', 'prv_importacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.id', 'prv_insumo_costo.prv_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion_estado', 'prv_importacion_estado.prv_importacion_id', 'prv_importacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion_tipo_estado', 'prv_importacion_tipo_estado.id', 'prv_importacion_estado.prv_importacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion_resultado', 'prv_importacion_resultado.prv_importacion_id', 'prv_importacion.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_importacion');
		$criterio->setCriterios();		
}
?>

