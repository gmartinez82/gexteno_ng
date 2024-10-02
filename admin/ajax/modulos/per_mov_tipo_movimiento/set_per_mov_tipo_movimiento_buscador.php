<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerMovTipoMovimiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_mov_tipo_movimiento.id', Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_id'), Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_id_comparador'));
	$criterio->add('per_mov_tipo_movimiento.descripcion', Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_descripcion'), Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_descripcion_comparador'));
	$criterio->add('per_mov_tipo_movimiento.codigo', Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_codigo'), Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_codigo_comparador'));
	$criterio->add('per_mov_tipo_movimiento.observacion', Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_observacion'), Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_observacion_comparador'));
	$criterio->add('per_mov_tipo_movimiento.estado', Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_estado'), Gral::getVars(1, 'buscador_per_mov_tipo_movimiento_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('per_mov_movimiento', 'per_mov_movimiento.per_mov_tipo_movimiento_id', 'per_mov_tipo_movimiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'per_mov_movimiento.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_movimiento.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_sector', 'ctrl_sector.id', 'per_mov_movimiento.ctrl_sector_id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_equipo', 'ctrl_equipo.id', 'per_mov_movimiento.ctrl_equipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_tipo_estado', 'per_mov_tipo_estado.id', 'per_mov_movimiento.per_mov_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_mov_tipo_movimiento');
		$criterio->setCriterios();		
}
?>

