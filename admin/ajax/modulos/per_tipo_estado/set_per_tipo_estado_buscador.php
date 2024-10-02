<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_tipo_estado.id', Gral::getVars(1, 'buscador_per_tipo_estado_id'), Gral::getVars(1, 'buscador_per_tipo_estado_id_comparador'));
	$criterio->add('per_tipo_estado.descripcion', Gral::getVars(1, 'buscador_per_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_per_tipo_estado_descripcion_comparador'));
	$criterio->add('per_tipo_estado.codigo', Gral::getVars(1, 'buscador_per_tipo_estado_codigo'), Gral::getVars(1, 'buscador_per_tipo_estado_codigo_comparador'));
	$criterio->add('per_tipo_estado.observacion', Gral::getVars(1, 'buscador_per_tipo_estado_observacion'), Gral::getVars(1, 'buscador_per_tipo_estado_observacion_comparador'));
	$criterio->add('per_tipo_estado.estado', Gral::getVars(1, 'buscador_per_tipo_estado_estado'), Gral::getVars(1, 'buscador_per_tipo_estado_estado_comparador'));
	$criterio->add('per_tipo_estado.activo', Gral::getVars(1, 'buscador_per_tipo_estado_activo'), Gral::getVars(1, 'buscador_per_tipo_estado_activo_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_persona', 'per_persona.per_tipo_estado_id', 'per_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'per_persona.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'per_persona.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'per_persona.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sexo', 'gral_sexo.id', 'per_persona.gral_sexo_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'per_persona.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'per_persona.geo_pais_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_estado', 'per_estado.per_tipo_estado_id', 'per_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_tipo_estado');
		$criterio->setCriterios();		
}
?>

