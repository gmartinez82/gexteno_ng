<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CtrlEquipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ctrl_equipo.id', Gral::getVars(1, 'buscador_ctrl_equipo_id'), Gral::getVars(1, 'buscador_ctrl_equipo_id_comparador'));
	$criterio->add('ctrl_equipo.descripcion', Gral::getVars(1, 'buscador_ctrl_equipo_descripcion'), Gral::getVars(1, 'buscador_ctrl_equipo_descripcion_comparador'));
	$criterio->add('ctrl_equipo.codigo', Gral::getVars(1, 'buscador_ctrl_equipo_codigo'), Gral::getVars(1, 'buscador_ctrl_equipo_codigo_comparador'));
	$criterio->add('ctrl_equipo.observacion', Gral::getVars(1, 'buscador_ctrl_equipo_observacion'), Gral::getVars(1, 'buscador_ctrl_equipo_observacion_comparador'));
	$criterio->add('ctrl_equipo.estado', Gral::getVars(1, 'buscador_ctrl_equipo_estado'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ctrl_equipo_ctrl_sector', 'ctrl_equipo_ctrl_sector.ctrl_equipo_id', 'ctrl_equipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_sector', 'ctrl_sector.id', 'ctrl_equipo_ctrl_sector.ctrl_sector_id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_equipo_estado', 'ctrl_equipo_estado.ctrl_equipo_id', 'ctrl_equipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_equipo_tipo_estado', 'ctrl_equipo_tipo_estado.id', 'ctrl_equipo_estado.ctrl_equipo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_movimiento', 'per_mov_movimiento.ctrl_equipo_id', 'ctrl_equipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'per_mov_movimiento.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_movimiento.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_tipo_movimiento', 'per_mov_tipo_movimiento.id', 'per_mov_movimiento.per_mov_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_tipo_estado', 'per_mov_tipo_estado.id', 'per_mov_movimiento.per_mov_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ctrl_equipo');
		$criterio->setCriterios();		
}
?>

