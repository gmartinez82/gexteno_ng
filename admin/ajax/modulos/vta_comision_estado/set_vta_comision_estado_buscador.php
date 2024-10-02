<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComisionEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comision_estado.id', Gral::getVars(1, 'buscador_vta_comision_estado_id'), Gral::getVars(1, 'buscador_vta_comision_estado_id_comparador'));
	$criterio->add('vta_comision_estado.descripcion', Gral::getVars(1, 'buscador_vta_comision_estado_descripcion'), Gral::getVars(1, 'buscador_vta_comision_estado_descripcion_comparador'));
	$criterio->add('vta_comision_estado.vta_comision_id', Gral::getVars(1, 'buscador_vta_comision_estado_vta_comision_id'), Gral::getVars(1, 'buscador_vta_comision_estado_vta_comision_id_comparador'));
	$criterio->add('vta_comision_estado.vta_comision_tipo_estado_id', Gral::getVars(1, 'buscador_vta_comision_estado_vta_comision_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_comision_estado_vta_comision_tipo_estado_id_comparador'));
	$criterio->add('vta_comision_estado.inicial', Gral::getVars(1, 'buscador_vta_comision_estado_inicial'), Gral::getVars(1, 'buscador_vta_comision_estado_inicial_comparador'));
	$criterio->add('vta_comision_estado.actual', Gral::getVars(1, 'buscador_vta_comision_estado_actual'), Gral::getVars(1, 'buscador_vta_comision_estado_actual_comparador'));
	$criterio->add('vta_comision_estado.codigo', Gral::getVars(1, 'buscador_vta_comision_estado_codigo'), Gral::getVars(1, 'buscador_vta_comision_estado_codigo_comparador'));
	$criterio->add('vta_comision_estado.nota_interna', Gral::getVars(1, 'buscador_vta_comision_estado_nota_interna'), Gral::getVars(1, 'buscador_vta_comision_estado_nota_interna_comparador'));
	$criterio->add('vta_comision_estado.nota_publica', Gral::getVars(1, 'buscador_vta_comision_estado_nota_publica'), Gral::getVars(1, 'buscador_vta_comision_estado_nota_publica_comparador'));
	$criterio->add('vta_comision_estado.observacion', Gral::getVars(1, 'buscador_vta_comision_estado_observacion'), Gral::getVars(1, 'buscador_vta_comision_estado_observacion_comparador'));
	$criterio->add('vta_comision_estado.estado', Gral::getVars(1, 'buscador_vta_comision_estado_estado'), Gral::getVars(1, 'buscador_vta_comision_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_comision_estado');
		$criterio->setCriterios();		
}
?>

