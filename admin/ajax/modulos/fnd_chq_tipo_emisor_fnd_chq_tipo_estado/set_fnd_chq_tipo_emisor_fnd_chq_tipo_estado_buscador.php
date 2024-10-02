<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndChqTipoEmisorFndChqTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.id', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_id_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.descripcion', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_descripcion_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_emisor_id', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_emisor_id_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_id', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_id_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.fnd_chq_tipo_estado_posible', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_fnd_chq_tipo_estado_posible_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_automatico', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_automatico_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_manual', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_manual_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.predeterminado', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_predeterminado_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_otro_comprobante', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_otro_comprobante_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.cambio_simultaneo', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_cambio_simultaneo_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.codigo', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_codigo_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.observacion', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_observacion_comparador'));
	$criterio->add('fnd_chq_tipo_emisor_fnd_chq_tipo_estado.estado', Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado'), Gral::getVars(1, 'buscador_fnd_chq_tipo_emisor_fnd_chq_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_chq_tipo_emisor_fnd_chq_tipo_estado');
		$criterio->setCriterios();		
}
?>

