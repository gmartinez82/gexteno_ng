<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPresupuestoVehCoche::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_presupuesto_veh_coche.id', Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_id'), Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_id_comparador'));
	$criterio->add('vta_presupuesto_veh_coche.descripcion', Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_descripcion'), Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_descripcion_comparador'));
	$criterio->add('vta_presupuesto_veh_coche.vta_presupuesto_id', Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_vta_presupuesto_id'), Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_vta_presupuesto_id_comparador'));
	$criterio->add('vta_presupuesto_veh_coche.veh_coche_id', Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_veh_coche_id'), Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_veh_coche_id_comparador'));
	$criterio->add('vta_presupuesto_veh_coche.codigo', Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_codigo'), Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_codigo_comparador'));
	$criterio->add('vta_presupuesto_veh_coche.observacion', Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_observacion'), Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_observacion_comparador'));
	$criterio->add('vta_presupuesto_veh_coche.estado', Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_estado'), Gral::getVars(1, 'buscador_vta_presupuesto_veh_coche_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_presupuesto_veh_coche');
		$criterio->setCriterios();		
}
?>

