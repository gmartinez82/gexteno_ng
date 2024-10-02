<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPresupuestoCancelacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_presupuesto_cancelacion.id', Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_id'), Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_id_comparador'));
	$criterio->add('vta_presupuesto_cancelacion.descripcion', Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_descripcion'), Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_descripcion_comparador'));
	$criterio->add('vta_presupuesto_cancelacion.vta_presupuesto_ins_insumo_id', Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_vta_presupuesto_ins_insumo_id_comparador'));
	$criterio->add('vta_presupuesto_cancelacion.codigo', Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_codigo'), Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_codigo_comparador'));
	$criterio->add('vta_presupuesto_cancelacion.observacion', Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_observacion'), Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_observacion_comparador'));
	$criterio->add('vta_presupuesto_cancelacion.estado', Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_estado'), Gral::getVars(1, 'buscador_vta_presupuesto_cancelacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_presupuesto_cancelacion');
		$criterio->setCriterios();		
}
?>

