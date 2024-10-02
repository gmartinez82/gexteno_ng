<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsStockResumenEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_stock_resumen_estado.id', Gral::getVars(1, 'buscador_ins_stock_resumen_estado_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_estado_id_comparador'));
	$criterio->add('ins_stock_resumen_estado.ins_stock_resumen_id', Gral::getVars(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_id_comparador'));
	$criterio->add('ins_stock_resumen_estado.ins_stock_resumen_tipo_estado_id', Gral::getVars(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id'), Gral::getVars(1, 'buscador_ins_stock_resumen_estado_ins_stock_resumen_tipo_estado_id_comparador'));
	$criterio->add('ins_stock_resumen_estado.observacion', Gral::getVars(1, 'buscador_ins_stock_resumen_estado_observacion'), Gral::getVars(1, 'buscador_ins_stock_resumen_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_stock_resumen_estado');
		$criterio->setCriterios();		
}
?>

