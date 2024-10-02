<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerPersona::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_persona.id', Gral::getVars(1, 'buscador_per_persona_id'), Gral::getVars(1, 'buscador_per_persona_id_comparador'));
	$criterio->add('per_persona.legajo', Gral::getVars(1, 'buscador_per_persona_legajo'), Gral::getVars(1, 'buscador_per_persona_legajo_comparador'));
	$criterio->add('per_persona.descripcion', Gral::getVars(1, 'buscador_per_persona_descripcion'), Gral::getVars(1, 'buscador_per_persona_descripcion_comparador'));
	$criterio->add('per_persona.gral_empresa_id', Gral::getVars(1, 'buscador_per_persona_gral_empresa_id'), Gral::getVars(1, 'buscador_per_persona_gral_empresa_id_comparador'));
	$criterio->add('per_persona.gral_sucursal_id', Gral::getVars(1, 'buscador_per_persona_gral_sucursal_id'), Gral::getVars(1, 'buscador_per_persona_gral_sucursal_id_comparador'));
	$criterio->add('per_persona.gral_tipo_documento_id', Gral::getVars(1, 'buscador_per_persona_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_per_persona_gral_tipo_documento_id_comparador'));
	$criterio->add('per_persona.documento', Gral::getVars(1, 'buscador_per_persona_documento'), Gral::getVars(1, 'buscador_per_persona_documento_comparador'));
	$criterio->add('per_persona.cuil', Gral::getVars(1, 'buscador_per_persona_cuil'), Gral::getVars(1, 'buscador_per_persona_cuil_comparador'));
	$criterio->add('per_persona.nacimiento', Gral::getFechaToDB(Gral::getVars(1, 'buscador_per_persona_nacimiento')), Gral::getVars(1, 'buscador_per_persona_nacimiento_comparador'));
	$criterio->add('per_persona.gral_sexo_id', Gral::getVars(1, 'buscador_per_persona_gral_sexo_id'), Gral::getVars(1, 'buscador_per_persona_gral_sexo_id_comparador'));
	$criterio->add('per_persona.geo_localidad_id', Gral::getVars(1, 'buscador_per_persona_geo_localidad_id'), Gral::getVars(1, 'buscador_per_persona_geo_localidad_id_comparador'));
	$criterio->add('per_persona.codigo_postal', Gral::getVars(1, 'buscador_per_persona_codigo_postal'), Gral::getVars(1, 'buscador_per_persona_codigo_postal_comparador'));
	$criterio->add('per_persona.nacionalidad', Gral::getVars(1, 'buscador_per_persona_nacionalidad'), Gral::getVars(1, 'buscador_per_persona_nacionalidad_comparador'));
	$criterio->add('per_persona.per_tipo_estado_id', Gral::getVars(1, 'buscador_per_persona_per_tipo_estado_id'), Gral::getVars(1, 'buscador_per_persona_per_tipo_estado_id_comparador'));
	$criterio->add('per_persona.observacion', Gral::getVars(1, 'buscador_per_persona_observacion'), Gral::getVars(1, 'buscador_per_persona_observacion_comparador'));
	$criterio->add('per_persona.estado', Gral::getVars(1, 'buscador_per_persona_estado'), Gral::getVars(1, 'buscador_per_persona_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_per_persona_geo_provincia_id'), Gral::getVars(1, 'buscador_per_persona_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'per_persona.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_per_persona_geo_pais_id'), Gral::getVars(1, 'buscador_per_persona_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_persona_imagen', 'per_persona_imagen.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona_archivo', 'per_persona_archivo.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_estado', 'per_estado.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_tipo_estado', 'per_tipo_estado.id', 'per_estado.per_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona_dedo', 'per_persona_dedo.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona_gral_sucursal', 'per_persona_gral_sucursal.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'per_persona_gral_sucursal.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona_us_usuario', 'per_persona_us_usuario.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'per_persona_us_usuario.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_movimiento', 'per_mov_movimiento.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'per_mov_movimiento.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_tipo_movimiento', 'per_mov_tipo_movimiento.id', 'per_mov_movimiento.per_mov_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_sector', 'ctrl_sector.id', 'per_mov_movimiento.ctrl_sector_id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_equipo', 'ctrl_equipo.id', 'per_mov_movimiento.ctrl_equipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_tipo_estado', 'per_mov_tipo_estado.id', 'per_mov_movimiento.per_mov_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_planificacion', 'per_mov_planificacion.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad', 'gral_novedad.id', 'per_mov_planificacion.gral_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'per_mov_planificacion.pln_jornada_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_turno_novedad', 'pln_turno_novedad.id', 'per_mov_planificacion.pln_turno_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo', 'gral_novedad_motivo.id', 'per_mov_planificacion.gral_novedad_motivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_novedad_motivo_extendido', 'gral_novedad_motivo_extendido.id', 'per_mov_planificacion.gral_novedad_motivo_extendido_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_dia', 'gral_dia.id', 'per_mov_planificacion.gral_dia_id', 'LEFT JOIN');
	$criterio->addRealJoin('os_orden_servicio', 'os_orden_servicio.per_persona_id', 'per_persona.id', 'LEFT JOIN');
	$criterio->addRealJoin('os_tipo', 'os_tipo.id', 'os_orden_servicio.os_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('os_prioridad', 'os_prioridad.id', 'os_orden_servicio.os_prioridad_id', 'LEFT JOIN');
	$criterio->addRealJoin('os_tipo_estado', 'os_tipo_estado.id', 'os_orden_servicio.os_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_persona');
		$criterio->setCriterios();		
}
?>

