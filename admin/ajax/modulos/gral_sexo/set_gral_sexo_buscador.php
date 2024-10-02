<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralSexo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_sexo.id', Gral::getVars(1, 'buscador_gral_sexo_id'), Gral::getVars(1, 'buscador_gral_sexo_id_comparador'));
	$criterio->add('gral_sexo.descripcion', Gral::getVars(1, 'buscador_gral_sexo_descripcion'), Gral::getVars(1, 'buscador_gral_sexo_descripcion_comparador'));
	$criterio->add('gral_sexo.codigo', Gral::getVars(1, 'buscador_gral_sexo_codigo'), Gral::getVars(1, 'buscador_gral_sexo_codigo_comparador'));
	$criterio->add('gral_sexo.observacion', Gral::getVars(1, 'buscador_gral_sexo_observacion'), Gral::getVars(1, 'buscador_gral_sexo_observacion_comparador'));
	$criterio->add('gral_sexo.estado', Gral::getVars(1, 'buscador_gral_sexo_estado'), Gral::getVars(1, 'buscador_gral_sexo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_persona', 'per_persona.gral_sexo_id', 'gral_sexo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'per_persona.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'per_persona.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'per_persona.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'per_persona.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'per_persona.geo_pais_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_tipo_estado', 'per_tipo_estado.id', 'per_persona.per_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_sexo');
		$criterio->setCriterios();		
}
?>

