<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndCajaTipoMovimiento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_caja_tipo_movimiento.id', Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_id'), Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_id_comparador'));
	$criterio->add('fnd_caja_tipo_movimiento.descripcion', Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_descripcion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_descripcion_comparador'));
	$criterio->add('fnd_caja_tipo_movimiento.automatico', Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_automatico'), Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_automatico_comparador'));
	$criterio->add('fnd_caja_tipo_movimiento.codigo', Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_codigo'), Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_codigo_comparador'));
	$criterio->add('fnd_caja_tipo_movimiento.observacion', Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_observacion'), Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_observacion_comparador'));
	$criterio->add('fnd_caja_tipo_movimiento.estado', Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_estado'), Gral::getVars(1, 'buscador_fnd_caja_tipo_movimiento_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('fnd_caja_movimiento', 'fnd_caja_movimiento.fnd_caja_tipo_movimiento_id', 'fnd_caja_tipo_movimiento.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja', 'fnd_caja.id', 'fnd_caja_movimiento.fnd_caja_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'fnd_caja_movimiento.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_caja_movimiento_tipo_estado', 'fnd_caja_movimiento_tipo_estado.id', 'fnd_caja_movimiento.fnd_caja_movimiento_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_caja_tipo_movimiento');
		$criterio->setCriterios();		
}
?>

