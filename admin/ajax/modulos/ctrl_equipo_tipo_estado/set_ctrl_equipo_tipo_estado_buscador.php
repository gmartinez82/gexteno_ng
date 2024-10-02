<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CtrlEquipoTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ctrl_equipo_tipo_estado.id', Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_id'), Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_id_comparador'));
	$criterio->add('ctrl_equipo_tipo_estado.descripcion', Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_descripcion_comparador'));
	$criterio->add('ctrl_equipo_tipo_estado.codigo', Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_codigo'), Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_codigo_comparador'));
	$criterio->add('ctrl_equipo_tipo_estado.observacion', Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_observacion'), Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_observacion_comparador'));
	$criterio->add('ctrl_equipo_tipo_estado.estado', Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_estado'), Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_estado_comparador'));
	$criterio->add('ctrl_equipo_tipo_estado.activo', Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_activo'), Gral::getVars(1, 'buscador_ctrl_equipo_tipo_estado_activo_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ctrl_equipo_estado', 'ctrl_equipo_estado.ctrl_equipo_tipo_estado_id', 'ctrl_equipo_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('ctrl_equipo', 'ctrl_equipo.id', 'ctrl_equipo_estado.ctrl_equipo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ctrl_equipo_tipo_estado');
		$criterio->setCriterios();		
}
?>

