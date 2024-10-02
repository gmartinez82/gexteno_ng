<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsStockResumenTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_stock_resumen_tipo_estado.id', Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_id_comparador'));
	$criterio->add('ins_stock_resumen_tipo_estado.descripcion', Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_descripcion_comparador'));
	$criterio->add('ins_stock_resumen_tipo_estado.codigo', Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_codigo'), Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_codigo_comparador'));
	$criterio->add('ins_stock_resumen_tipo_estado.observacion', Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_observacion'), Gral::getVars(1, 'buscador_ins_stock_resumen_tipo_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_stock_resumen', 'ins_stock_resumen.ins_stock_resumen_tipo_estado_id', 'ins_stock_resumen_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_stock_resumen.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'ins_stock_resumen.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_stock_resumen_estado', 'ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id', 'ins_stock_resumen_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_stock_resumen_tipo_estado');
		$criterio->setCriterios();		
}
?>

