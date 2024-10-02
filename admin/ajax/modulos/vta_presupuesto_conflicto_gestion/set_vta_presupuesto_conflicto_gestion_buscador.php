<?php
include_once '_autoload.php';

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPresupuestoConflicto::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_presupuesto_conflicto.id', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_id'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_id_comparador'));
	$criterio->add('vta_presupuesto_conflicto.descripcion', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_descripcion'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_descripcion_comparador'));
	$criterio->add('vta_presupuesto_conflicto.vta_presupuesto_ins_insumo_id', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_vta_presupuesto_ins_insumo_id_comparador'));
	$criterio->add('vta_presupuesto_conflicto.importe_inicial', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_importe_inicial'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_importe_inicial_comparador'));
	$criterio->add('vta_presupuesto_conflicto.importe_actualizado', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_importe_actualizado'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_importe_actualizado_comparador'));
	$criterio->add('vta_presupuesto_conflicto.importe_resuelto', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_importe_resuelto'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_importe_resuelto_comparador'));
	$criterio->add('vta_presupuesto_conflicto.codigo', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_codigo'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_codigo_comparador'));
	$criterio->add('vta_presupuesto_conflicto.observacion', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_observacion'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_observacion_comparador'));
	$criterio->add('vta_presupuesto_conflicto.estado', Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_estado'), Gral::getVars(1, 'buscador_vta_presupuesto_conflicto_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_presupuesto_conflicto');
		$criterio->setCriterios();		
}
?>

