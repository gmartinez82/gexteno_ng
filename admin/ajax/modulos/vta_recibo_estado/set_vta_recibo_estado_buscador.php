<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaReciboEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_recibo_estado.id', Gral::getVars(1, 'buscador_vta_recibo_estado_id'), Gral::getVars(1, 'buscador_vta_recibo_estado_id_comparador'));
	$criterio->add('vta_recibo_estado.descripcion', Gral::getVars(1, 'buscador_vta_recibo_estado_descripcion'), Gral::getVars(1, 'buscador_vta_recibo_estado_descripcion_comparador'));
	$criterio->add('vta_recibo_estado.vta_recibo_id', Gral::getVars(1, 'buscador_vta_recibo_estado_vta_recibo_id'), Gral::getVars(1, 'buscador_vta_recibo_estado_vta_recibo_id_comparador'));
	$criterio->add('vta_recibo_estado.vta_recibo_tipo_estado_id', Gral::getVars(1, 'buscador_vta_recibo_estado_vta_recibo_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_recibo_estado_vta_recibo_tipo_estado_id_comparador'));
	$criterio->add('vta_recibo_estado.inicial', Gral::getVars(1, 'buscador_vta_recibo_estado_inicial'), Gral::getVars(1, 'buscador_vta_recibo_estado_inicial_comparador'));
	$criterio->add('vta_recibo_estado.actual', Gral::getVars(1, 'buscador_vta_recibo_estado_actual'), Gral::getVars(1, 'buscador_vta_recibo_estado_actual_comparador'));
	$criterio->add('vta_recibo_estado.codigo', Gral::getVars(1, 'buscador_vta_recibo_estado_codigo'), Gral::getVars(1, 'buscador_vta_recibo_estado_codigo_comparador'));
	$criterio->add('vta_recibo_estado.observacion', Gral::getVars(1, 'buscador_vta_recibo_estado_observacion'), Gral::getVars(1, 'buscador_vta_recibo_estado_observacion_comparador'));
	$criterio->add('vta_recibo_estado.estado', Gral::getVars(1, 'buscador_vta_recibo_estado_estado'), Gral::getVars(1, 'buscador_vta_recibo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_recibo_estado');
		$criterio->setCriterios();		
}
?>

