<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VehCoche::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('veh_coche.id', Gral::getVars(1, 'buscador_veh_coche_id'), Gral::getVars(1, 'buscador_veh_coche_id_comparador'));
	$criterio->add('veh_coche.veh_modelo_id', Gral::getVars(1, 'buscador_veh_coche_veh_modelo_id'), Gral::getVars(1, 'buscador_veh_coche_veh_modelo_id_comparador'));
	$criterio->add('veh_coche.descripcion', Gral::getVars(1, 'buscador_veh_coche_descripcion'), Gral::getVars(1, 'buscador_veh_coche_descripcion_comparador'));
	$criterio->add('veh_coche.version', Gral::getVars(1, 'buscador_veh_coche_version'), Gral::getVars(1, 'buscador_veh_coche_version_comparador'));
	$criterio->add('veh_coche.codigo', Gral::getVars(1, 'buscador_veh_coche_codigo'), Gral::getVars(1, 'buscador_veh_coche_codigo_comparador'));
	$criterio->add('veh_coche.patente', Gral::getVars(1, 'buscador_veh_coche_patente'), Gral::getVars(1, 'buscador_veh_coche_patente_comparador'));
	$criterio->add('veh_coche.anio', Gral::getVars(1, 'buscador_veh_coche_anio'), Gral::getVars(1, 'buscador_veh_coche_anio_comparador'));
	$criterio->add('veh_coche.observacion', Gral::getVars(1, 'buscador_veh_coche_observacion'), Gral::getVars(1, 'buscador_veh_coche_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('veh_modelo.veh_marca_id', Gral::getVars(1, 'buscador_veh_coche_veh_marca_id'), Gral::getVars(1, 'buscador_veh_coche_veh_marca_id_comparador'));
	$criterio->addRealJoin('veh_modelo', 'veh_modelo.id', 'veh_coche.veh_modelo_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('veh_coche_imagen', 'veh_coche_imagen.veh_coche_id', 'veh_coche.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_veh_coche', 'vta_presupuesto_veh_coche.veh_coche_id', 'veh_coche.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_veh_coche.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('veh_coche');
		$criterio->setCriterios();		
}
?>

