<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsUnidadMedidaPedido::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_unidad_medida_pedido.id', Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_id'), Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_id_comparador'));
	$criterio->add('ins_unidad_medida_pedido.descripcion', Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_descripcion'), Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_descripcion_comparador'));
	$criterio->add('ins_unidad_medida_pedido.codigo', Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_codigo'), Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_codigo_comparador'));
	$criterio->add('ins_unidad_medida_pedido.observacion', Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_observacion'), Gral::getVars(1, 'buscador_ins_unidad_medida_pedido_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.ins_unidad_medida_pedido_id', 'ins_unidad_medida_pedido.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_categoria', 'ins_categoria.id', 'ins_insumo.ins_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_matriz', 'ins_matriz.id', 'ins_insumo.ins_matriz_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_marca', 'ins_marca.id', 'ins_insumo.ins_marca_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_unidad_medida', 'ins_unidad_medida.id', 'ins_insumo.ins_unidad_medida_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_consumo', 'ins_tipo_consumo.id', 'ins_insumo.ins_tipo_consumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_necesidad', 'ins_tipo_necesidad.id', 'ins_insumo.ins_tipo_necesidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_nivel_aprovisionamiento', 'ins_nivel_aprovisionamiento.id', 'ins_insumo.ins_nivel_aprovisionamiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_iva', 'gral_tipo_iva.id', 'ins_insumo.gral_tipo_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_insumo', 'ins_tipo_insumo.id', 'ins_insumo.ins_tipo_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_tipo_fabricante', 'ins_tipo_fabricante.id', 'ins_insumo.ins_tipo_fabricante_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_unidad_medida_pedido');
		$criterio->setCriterios();		
}
?>

