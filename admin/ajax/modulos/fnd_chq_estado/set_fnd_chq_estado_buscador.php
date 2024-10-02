<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndChqEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_chq_estado.id', Gral::getVars(1, 'buscador_fnd_chq_estado_id'), Gral::getVars(1, 'buscador_fnd_chq_estado_id_comparador'));
	$criterio->add('fnd_chq_estado.descripcion', Gral::getVars(1, 'buscador_fnd_chq_estado_descripcion'), Gral::getVars(1, 'buscador_fnd_chq_estado_descripcion_comparador'));
	$criterio->add('fnd_chq_estado.fnd_chq_cheque_id', Gral::getVars(1, 'buscador_fnd_chq_estado_fnd_chq_cheque_id'), Gral::getVars(1, 'buscador_fnd_chq_estado_fnd_chq_cheque_id_comparador'));
	$criterio->add('fnd_chq_estado.fnd_chq_tipo_estado_id', Gral::getVars(1, 'buscador_fnd_chq_estado_fnd_chq_tipo_estado_id'), Gral::getVars(1, 'buscador_fnd_chq_estado_fnd_chq_tipo_estado_id_comparador'));
	$criterio->add('fnd_chq_estado.inicial', Gral::getVars(1, 'buscador_fnd_chq_estado_inicial'), Gral::getVars(1, 'buscador_fnd_chq_estado_inicial_comparador'));
	$criterio->add('fnd_chq_estado.actual', Gral::getVars(1, 'buscador_fnd_chq_estado_actual'), Gral::getVars(1, 'buscador_fnd_chq_estado_actual_comparador'));
	$criterio->add('fnd_chq_estado.endosado', Gral::getVars(1, 'buscador_fnd_chq_estado_endosado'), Gral::getVars(1, 'buscador_fnd_chq_estado_endosado_comparador'));
	$criterio->add('fnd_chq_estado.fnd_caja_id', Gral::getVars(1, 'buscador_fnd_chq_estado_fnd_caja_id'), Gral::getVars(1, 'buscador_fnd_chq_estado_fnd_caja_id_comparador'));
	$criterio->add('fnd_chq_estado.gral_caja_id', Gral::getVars(1, 'buscador_fnd_chq_estado_gral_caja_id'), Gral::getVars(1, 'buscador_fnd_chq_estado_gral_caja_id_comparador'));
	$criterio->add('fnd_chq_estado.codigo', Gral::getVars(1, 'buscador_fnd_chq_estado_codigo'), Gral::getVars(1, 'buscador_fnd_chq_estado_codigo_comparador'));
	$criterio->add('fnd_chq_estado.observacion', Gral::getVars(1, 'buscador_fnd_chq_estado_observacion'), Gral::getVars(1, 'buscador_fnd_chq_estado_observacion_comparador'));
	$criterio->add('fnd_chq_estado.estado', Gral::getVars(1, 'buscador_fnd_chq_estado_estado'), Gral::getVars(1, 'buscador_fnd_chq_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_chq_estado');
		$criterio->setCriterios();		
}
?>

