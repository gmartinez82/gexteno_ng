<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaRemitoTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_remito_tipo_estado.id', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_id'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_id_comparador'));
	$criterio->add('vta_remito_tipo_estado.descripcion', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_descripcion_comparador'));
	$criterio->add('vta_remito_tipo_estado.codigo', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_codigo'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_codigo_comparador'));
	$criterio->add('vta_remito_tipo_estado.activo', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_activo'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_activo_comparador'));
	$criterio->add('vta_remito_tipo_estado.interno', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_interno'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_interno_comparador'));
	$criterio->add('vta_remito_tipo_estado.terminal', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_terminal'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_terminal_comparador'));
	$criterio->add('vta_remito_tipo_estado.observacion', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_observacion'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_observacion_comparador'));
	$criterio->add('vta_remito_tipo_estado.estado', Gral::getVars(1, 'buscador_vta_remito_tipo_estado_estado'), Gral::getVars(1, 'buscador_vta_remito_tipo_estado_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_remito', 'vta_remito.vta_remito_tipo_estado_id', 'vta_remito_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_remito.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_remito.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_remito.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_centro_recepcion', 'cli_centro_recepcion.id', 'vta_remito.cli_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_remito.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_estado', 'vta_remito_estado.vta_remito_tipo_estado_id', 'vta_remito_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'vta_remito_estado.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_remito_tipo_estado');
		$criterio->setCriterios();		
}
?>

