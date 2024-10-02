<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdLineaProduccionPrdParamOperacionPrdEquipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.id', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_id'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_id_comparador'));
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.descripcion', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_descripcion'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_descripcion_comparador'));
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_linea_produccion_id', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_linea_produccion_id'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_linea_produccion_id_comparador'));
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_param_operacion_id', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_param_operacion_id'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_param_operacion_id_comparador'));
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.prd_equipo_id', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_equipo_id'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_prd_equipo_id_comparador'));
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.codigo', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_codigo'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_codigo_comparador'));
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.observacion', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_observacion'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_observacion_comparador'));
	$criterio->add('prd_linea_produccion_prd_param_operacion_prd_equipo.estado', Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_estado'), Gral::getVars(1, 'buscador_prd_linea_produccion_prd_param_operacion_prd_equipo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_linea_produccion_prd_param_operacion_prd_equipo');
		$criterio->setCriterios();		
}
?>

