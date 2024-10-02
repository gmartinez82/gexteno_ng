<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CtrlSector::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ctrl_sector.id', Gral::getVars(1, 'buscador_ctrl_sector_id'), Gral::getVars(1, 'buscador_ctrl_sector_id_comparador'));
	$criterio->add('ctrl_sector.gral_sucursal_id', Gral::getVars(1, 'buscador_ctrl_sector_gral_sucursal_id'), Gral::getVars(1, 'buscador_ctrl_sector_gral_sucursal_id_comparador'));
	$criterio->add('ctrl_sector.descripcion', Gral::getVars(1, 'buscador_ctrl_sector_descripcion'), Gral::getVars(1, 'buscador_ctrl_sector_descripcion_comparador'));
	$criterio->add('ctrl_sector.codigo', Gral::getVars(1, 'buscador_ctrl_sector_codigo'), Gral::getVars(1, 'buscador_ctrl_sector_codigo_comparador'));
	$criterio->add('ctrl_sector.observacion', Gral::getVars(1, 'buscador_ctrl_sector_observacion'), Gral::getVars(1, 'buscador_ctrl_sector_observacion_comparador'));
	$criterio->add('ctrl_sector.estado', Gral::getVars(1, 'buscador_ctrl_sector_estado'), Gral::getVars(1, 'buscador_ctrl_sector_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ctrl_equipo_ctrl_sector', 'ctrl_equipo_ctrl_sector.ctrl_sector_id', 'ctrl_sector.id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_equipo', 'ctrl_equipo.id', 'ctrl_equipo_ctrl_sector.ctrl_equipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_movimiento', 'per_mov_movimiento.ctrl_sector_id', 'ctrl_sector.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'per_mov_movimiento.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_mov_movimiento.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_tipo_movimiento', 'per_mov_tipo_movimiento.id', 'per_mov_movimiento.per_mov_tipo_movimiento_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_mov_tipo_estado', 'per_mov_tipo_estado.id', 'per_mov_movimiento.per_mov_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ctrl_sector');
		$criterio->setCriterios();		
}
?>

