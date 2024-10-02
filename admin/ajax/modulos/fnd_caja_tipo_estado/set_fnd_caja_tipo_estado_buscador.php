<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndCajaTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_caja_tipo_estado.id', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_id'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_id_comparador'));
	$criterio->add('fnd_caja_tipo_estado.descripcion', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_descripcion_comparador'));
	$criterio->add('fnd_caja_tipo_estado.codigo', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_codigo'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_codigo_comparador'));
	$criterio->add('fnd_caja_tipo_estado.activo', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_activo'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_activo_comparador'));
	$criterio->add('fnd_caja_tipo_estado.terminal', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_terminal'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_terminal_comparador'));
	$criterio->add('fnd_caja_tipo_estado.anulado', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_anulado'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_anulado_comparador'));
	$criterio->add('fnd_caja_tipo_estado.observacion', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_observacion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_observacion_comparador'));
	$criterio->add('fnd_caja_tipo_estado.estado', Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_estado'), Gral::getVars(1, 'buscador_fnd_caja_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.fnd_caja_tipo_estado_id', 'fnd_caja_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_cajero', 'fnd_cajero.id', 'fnd_caja.fnd_cajero_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_caja', 'gral_caja.id', 'fnd_caja.gral_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_estado', 'fnd_caja_estado.fnd_caja_tipo_estado_id', 'fnd_caja_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_caja_tipo_estado');
		$criterio->setCriterios();		
}
?>

