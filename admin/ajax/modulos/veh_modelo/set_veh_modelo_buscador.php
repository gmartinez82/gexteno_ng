<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VehModelo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('veh_modelo.id', Gral::getVars(1, 'buscador_veh_modelo_id'), Gral::getVars(1, 'buscador_veh_modelo_id_comparador'));
	$criterio->add('veh_modelo.veh_marca_id', Gral::getVars(1, 'buscador_veh_modelo_veh_marca_id'), Gral::getVars(1, 'buscador_veh_modelo_veh_marca_id_comparador'));
	$criterio->add('veh_modelo.descripcion', Gral::getVars(1, 'buscador_veh_modelo_descripcion'), Gral::getVars(1, 'buscador_veh_modelo_descripcion_comparador'));
	$criterio->add('veh_modelo.codigo', Gral::getVars(1, 'buscador_veh_modelo_codigo'), Gral::getVars(1, 'buscador_veh_modelo_codigo_comparador'));
	$criterio->add('veh_modelo.observacion', Gral::getVars(1, 'buscador_veh_modelo_observacion'), Gral::getVars(1, 'buscador_veh_modelo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_veh_modelo', 'ins_insumo_veh_modelo.veh_modelo_id', 'veh_modelo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_veh_modelo.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('veh_coche', 'veh_coche.veh_modelo_id', 'veh_modelo.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('veh_modelo');
		$criterio->setCriterios();		
}
?>

