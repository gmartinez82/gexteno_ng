<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsStockTransformacionDestino::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_stock_transformacion_destino.id', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_id'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_id_comparador'));
	$criterio->add('ins_stock_transformacion_destino.descripcion', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_descripcion'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_descripcion_comparador'));
	$criterio->add('ins_stock_transformacion_destino.ins_stock_transformacion_id', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_ins_stock_transformacion_id'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_ins_stock_transformacion_id_comparador'));
	$criterio->add('ins_stock_transformacion_destino.ins_insumo_id', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_ins_insumo_id_comparador'));
	$criterio->add('ins_stock_transformacion_destino.pan_panol_id', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_pan_panol_id'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_pan_panol_id_comparador'));
	$criterio->add('ins_stock_transformacion_destino.codigo', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_codigo'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_codigo_comparador'));
	$criterio->add('ins_stock_transformacion_destino.cantidad', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_cantidad'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_cantidad_comparador'));
	$criterio->add('ins_stock_transformacion_destino.observacion', Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_observacion'), Gral::getVars(1, 'buscador_ins_stock_transformacion_destino_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_stock_transformacion_destino');
		$criterio->setCriterios();		
}
?>

