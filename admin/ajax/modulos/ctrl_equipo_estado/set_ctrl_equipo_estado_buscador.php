<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CtrlEquipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ctrl_equipo_estado.id', Gral::getVars(1, 'buscador_ctrl_equipo_estado_id'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_id_comparador'));
	$criterio->add('ctrl_equipo_estado.descripcion', Gral::getVars(1, 'buscador_ctrl_equipo_estado_descripcion'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_descripcion_comparador'));
	$criterio->add('ctrl_equipo_estado.codigo', Gral::getVars(1, 'buscador_ctrl_equipo_estado_codigo'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_codigo_comparador'));
	$criterio->add('ctrl_equipo_estado.ctrl_equipo_id', Gral::getVars(1, 'buscador_ctrl_equipo_estado_ctrl_equipo_id'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_ctrl_equipo_id_comparador'));
	$criterio->add('ctrl_equipo_estado.ctrl_equipo_tipo_estado_id', Gral::getVars(1, 'buscador_ctrl_equipo_estado_ctrl_equipo_tipo_estado_id'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_ctrl_equipo_tipo_estado_id_comparador'));
	$criterio->add('ctrl_equipo_estado.inicial', Gral::getVars(1, 'buscador_ctrl_equipo_estado_inicial'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_inicial_comparador'));
	$criterio->add('ctrl_equipo_estado.actual', Gral::getVars(1, 'buscador_ctrl_equipo_estado_actual'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_actual_comparador'));
	$criterio->add('ctrl_equipo_estado.estado', Gral::getVars(1, 'buscador_ctrl_equipo_estado_estado'), Gral::getVars(1, 'buscador_ctrl_equipo_estado_estado_comparador'));
	$criterio->add('ctrl_equipo_estado.creado', Gral::getFechaHoraToDB(Gral::getVars(1, 'buscador_ctrl_equipo_estado_creado')), Gral::getVars(1, 'buscador_ctrl_equipo_estado_creado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ctrl_equipo_estado');
		$criterio->setCriterios();		
}
?>

