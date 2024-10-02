<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsStockResumen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_stock_resumen.id', Gral::getVars(1, 'buscador_ins_stock_resumen_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_id_comparador'));
	$criterio->add('ins_stock_resumen.descripcion', Gral::getVars(1, 'buscador_ins_stock_resumen_descripcion'), Gral::getVars(1, 'buscador_ins_stock_resumen_descripcion_comparador'));
	$criterio->add('ins_stock_resumen.ins_stock_resumen_tipo_estado_id', Gral::getVars(1, 'buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_ins_stock_resumen_tipo_estado_id_comparador'));
	$criterio->add('ins_stock_resumen.ins_insumo_id', Gral::getVars(1, 'buscador_ins_stock_resumen_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_ins_insumo_id_comparador'));
	$criterio->add('ins_stock_resumen.pan_panol_id', Gral::getVars(1, 'buscador_ins_stock_resumen_pan_panol_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_pan_panol_id_comparador'));
	$criterio->add('ins_stock_resumen.codigo', Gral::getVars(1, 'buscador_ins_stock_resumen_codigo'), Gral::getVars(1, 'buscador_ins_stock_resumen_codigo_comparador'));
	$criterio->add('ins_stock_resumen.cantidad', Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad'), Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad_comparador'));
	$criterio->add('ins_stock_resumen.cantidad_real', Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad_real'), Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad_real_comparador'));
	$criterio->add('ins_stock_resumen.cantidad_comprometida', Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad_comprometida'), Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad_comprometida_comparador'));
	$criterio->add('ins_stock_resumen.cantidad_pasivo', Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad_pasivo'), Gral::getVars(1, 'buscador_ins_stock_resumen_cantidad_pasivo_comparador'));
	$criterio->add('ins_stock_resumen.observacion', Gral::getVars(1, 'buscador_ins_stock_resumen_observacion'), Gral::getVars(1, 'buscador_ins_stock_resumen_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_stock_resumen_estado', 'ins_stock_resumen_estado.ins_stock_resumen_id', 'ins_stock_resumen.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_resumen_tipo_estado', 'ins_stock_resumen_tipo_estado.id', 'ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_stock_resumen');
		$criterio->setCriterios();		
}
?>

