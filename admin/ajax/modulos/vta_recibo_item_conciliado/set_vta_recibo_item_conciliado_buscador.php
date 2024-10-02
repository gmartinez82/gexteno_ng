<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaReciboItemConciliado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_recibo_item_conciliado.id', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_id'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_id_comparador'));
	$criterio->add('vta_recibo_item_conciliado.descripcion', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_descripcion'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_descripcion_comparador'));
	$criterio->add('vta_recibo_item_conciliado.vta_recibo_item_id', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_vta_recibo_item_id'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_vta_recibo_item_id_comparador'));
	$criterio->add('vta_recibo_item_conciliado.importe_original', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_importe_original'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_importe_original_comparador'));
	$criterio->add('vta_recibo_item_conciliado.importe_conciliado', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_importe_conciliado'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_importe_conciliado_comparador'));
	$criterio->add('vta_recibo_item_conciliado.importe_diferencia', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_importe_diferencia'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_importe_diferencia_comparador'));
	$criterio->add('vta_recibo_item_conciliado.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_fecha')), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_fecha_comparador'));
	$criterio->add('vta_recibo_item_conciliado.codigo', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_codigo'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_codigo_comparador'));
	$criterio->add('vta_recibo_item_conciliado.observacion', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_observacion'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_observacion_comparador'));
	$criterio->add('vta_recibo_item_conciliado.estado', Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_estado'), Gral::getVars(1, 'buscador_vta_recibo_item_conciliado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_recibo_item_conciliado');
		$criterio->setCriterios();		
}
?>

