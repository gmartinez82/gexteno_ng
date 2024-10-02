<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PerMovMovimiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('per_mov_movimiento.id', Gral::getVars(1, 'buscador_per_mov_movimiento_id'), Gral::getVars(1, 'buscador_per_mov_movimiento_id_comparador'));
	$criterio->add('per_mov_movimiento.descripcion', Gral::getVars(1, 'buscador_per_mov_movimiento_descripcion'), Gral::getVars(1, 'buscador_per_mov_movimiento_descripcion_comparador'));
	$criterio->add('per_mov_movimiento.gral_empresa_id', Gral::getVars(1, 'buscador_per_mov_movimiento_gral_empresa_id'), Gral::getVars(1, 'buscador_per_mov_movimiento_gral_empresa_id_comparador'));
	$criterio->add('per_mov_movimiento.per_persona_id', Gral::getVars(1, 'buscador_per_mov_movimiento_per_persona_id'), Gral::getVars(1, 'buscador_per_mov_movimiento_per_persona_id_comparador'));
	$criterio->add('per_mov_movimiento.codigo', Gral::getVars(1, 'buscador_per_mov_movimiento_codigo'), Gral::getVars(1, 'buscador_per_mov_movimiento_codigo_comparador'));
	$criterio->add('per_mov_movimiento.per_mov_tipo_movimiento_id', Gral::getVars(1, 'buscador_per_mov_movimiento_per_mov_tipo_movimiento_id'), Gral::getVars(1, 'buscador_per_mov_movimiento_per_mov_tipo_movimiento_id_comparador'));
	$criterio->add('per_mov_movimiento.fechahora', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_per_mov_movimiento_fechahora')), Gral::getVars(1, 'buscador_per_mov_movimiento_fechahora_comparador'));
	$criterio->add('per_mov_movimiento.ctrl_sector_id', Gral::getVars(1, 'buscador_per_mov_movimiento_ctrl_sector_id'), Gral::getVars(1, 'buscador_per_mov_movimiento_ctrl_sector_id_comparador'));
	$criterio->add('per_mov_movimiento.ctrl_equipo_id', Gral::getVars(1, 'buscador_per_mov_movimiento_ctrl_equipo_id'), Gral::getVars(1, 'buscador_per_mov_movimiento_ctrl_equipo_id_comparador'));
	$criterio->add('per_mov_movimiento.per_mov_tipo_estado_id', Gral::getVars(1, 'buscador_per_mov_movimiento_per_mov_tipo_estado_id'), Gral::getVars(1, 'buscador_per_mov_movimiento_per_mov_tipo_estado_id_comparador'));
	$criterio->add('per_mov_movimiento.observacion', Gral::getVars(1, 'buscador_per_mov_movimiento_observacion'), Gral::getVars(1, 'buscador_per_mov_movimiento_observacion_comparador'));
	$criterio->add('per_mov_movimiento.estado', Gral::getVars(1, 'buscador_per_mov_movimiento_estado'), Gral::getVars(1, 'buscador_per_mov_movimiento_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('per_mov_movimiento');
		$criterio->setCriterios();		
}
?>

