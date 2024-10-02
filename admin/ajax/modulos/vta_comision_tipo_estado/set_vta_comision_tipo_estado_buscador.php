<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaComisionTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_comision_tipo_estado.id', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_id_comparador'));
	$criterio->add('vta_comision_tipo_estado.descripcion', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_descripcion_comparador'));
	$criterio->add('vta_comision_tipo_estado.codigo', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_codigo'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_codigo_comparador'));
	$criterio->add('vta_comision_tipo_estado.activo', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_activo'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_activo_comparador'));
	$criterio->add('vta_comision_tipo_estado.terminal', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_terminal'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_terminal_comparador'));
	$criterio->add('vta_comision_tipo_estado.anulado', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_anulado'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_anulado_comparador'));
	$criterio->add('vta_comision_tipo_estado.observacion', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_observacion'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_observacion_comparador'));
	$criterio->add('vta_comision_tipo_estado.estado', Gral::getVars(1, 'buscador_vta_comision_tipo_estado_estado'), Gral::getVars(1, 'buscador_vta_comision_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_comision', 'vta_comision.vta_comision_tipo_estado_id', 'vta_comision_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_preventista', 'vta_preventista.id', 'vta_comision.vta_preventista_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.id', 'vta_comision.vta_comprador_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_comision.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_comision_estado', 'vta_comision_estado.vta_comision_tipo_estado_id', 'vta_comision_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_comision_tipo_estado');
		$criterio->setCriterios();		
}
?>

