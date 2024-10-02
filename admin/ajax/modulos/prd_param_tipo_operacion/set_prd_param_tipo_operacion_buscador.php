<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrdParamTipoOperacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prd_param_tipo_operacion.id', Gral::getVars(1, 'buscador_prd_param_tipo_operacion_id'), Gral::getVars(1, 'buscador_prd_param_tipo_operacion_id_comparador'));
	$criterio->add('prd_param_tipo_operacion.descripcion', Gral::getVars(1, 'buscador_prd_param_tipo_operacion_descripcion'), Gral::getVars(1, 'buscador_prd_param_tipo_operacion_descripcion_comparador'));
	$criterio->add('prd_param_tipo_operacion.descripcion_corta', Gral::getVars(1, 'buscador_prd_param_tipo_operacion_descripcion_corta'), Gral::getVars(1, 'buscador_prd_param_tipo_operacion_descripcion_corta_comparador'));
	$criterio->add('prd_param_tipo_operacion.numero', Gral::getVars(1, 'buscador_prd_param_tipo_operacion_numero'), Gral::getVars(1, 'buscador_prd_param_tipo_operacion_numero_comparador'));
	$criterio->add('prd_param_tipo_operacion.codigo', Gral::getVars(1, 'buscador_prd_param_tipo_operacion_codigo'), Gral::getVars(1, 'buscador_prd_param_tipo_operacion_codigo_comparador'));
	$criterio->add('prd_param_tipo_operacion.observacion', Gral::getVars(1, 'buscador_prd_param_tipo_operacion_observacion'), Gral::getVars(1, 'buscador_prd_param_tipo_operacion_observacion_comparador'));
	$criterio->add('prd_param_tipo_operacion.estado', Gral::getVars(1, 'buscador_prd_param_tipo_operacion_estado'), Gral::getVars(1, 'buscador_prd_param_tipo_operacion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prd_param_operacion', 'prd_param_operacion.prd_param_tipo_operacion_id', 'prd_param_tipo_operacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_proceso_productivo', 'prd_proceso_productivo.id', 'prd_param_operacion.prd_proceso_productivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_linea_produccion', 'prd_linea_produccion.id', 'prd_param_operacion.prd_linea_produccion_id', 'LEFT JOIN');
	$criterio->addRealJoin('prd_equipo', 'prd_equipo.id', 'prd_param_operacion.prd_equipo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prd_param_tipo_operacion');
		$criterio->setCriterios();		
}
?>

