<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsMarca::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_marca.id', Gral::getVars(1, 'buscador_ins_marca_id'), Gral::getVars(1, 'buscador_ins_marca_id_comparador'));
	$criterio->add('ins_marca.descripcion', Gral::getVars(1, 'buscador_ins_marca_descripcion'), Gral::getVars(1, 'buscador_ins_marca_descripcion_comparador'));
	$criterio->add('ins_marca.codigo', Gral::getVars(1, 'buscador_ins_marca_codigo'), Gral::getVars(1, 'buscador_ins_marca_codigo_comparador'));
	$criterio->add('ins_marca.observacion', Gral::getVars(1, 'buscador_ins_marca_observacion'), Gral::getVars(1, 'buscador_ins_marca_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'ins_insumo.ins_matriz_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'ins_insumo.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida_pedido', 'ins_unidad_medida_pedido.id', 'ins_insumo.ins_unidad_medida_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_consumo', 'ins_tipo_consumo.id', 'ins_insumo.ins_tipo_consumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_necesidad', 'ins_tipo_necesidad.id', 'ins_insumo.ins_tipo_necesidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_nivel_aprovisionamiento', 'ins_nivel_aprovisionamiento.id', 'ins_insumo.ins_nivel_aprovisionamiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_insumo', 'ins_tipo_insumo.id', 'ins_insumo.ins_tipo_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_fabricante', 'ins_tipo_fabricante.id', 'ins_insumo.ins_tipo_fabricante_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo_ins_marca', 'ins_insumo_ins_marca.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca_imagen', 'ins_marca_imagen.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_categoria_ins_marca', 'ins_categoria_ins_marca.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor_ins_marca', 'prv_proveedor_ins_marca.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_proveedor_ins_marca.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_insumo', 'prv_insumo.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion', 'prv_importacion.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_importacion_tipo_estado', 'prv_importacion_tipo_estado.id', 'prv_importacion.prv_importacion_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_convenio_descuento', 'prv_convenio_descuento.id', 'prv_importacion.prv_convenio_descuento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_value_ins_marca', 'ml_value_ins_marca.ins_marca_id', 'ins_marca.id', 'LEFT JOIN');
	$criterio->addRealJoin('ml_value', 'ml_value.id', 'ml_value_ins_marca.ml_value_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_marca');
		$criterio->setCriterios();		
}
?>

