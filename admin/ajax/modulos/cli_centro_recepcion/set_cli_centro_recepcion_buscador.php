<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliCentroRecepcion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_centro_recepcion.id', Gral::getVars(1, 'buscador_cli_centro_recepcion_id'), Gral::getVars(1, 'buscador_cli_centro_recepcion_id_comparador'));
	$criterio->add('cli_centro_recepcion.descripcion', Gral::getVars(1, 'buscador_cli_centro_recepcion_descripcion'), Gral::getVars(1, 'buscador_cli_centro_recepcion_descripcion_comparador'));
	$criterio->add('cli_centro_recepcion.cli_cliente_id', Gral::getVars(1, 'buscador_cli_centro_recepcion_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_centro_recepcion_cli_cliente_id_comparador'));
	$criterio->add('cli_centro_recepcion.geo_localidad_id', Gral::getVars(1, 'buscador_cli_centro_recepcion_geo_localidad_id'), Gral::getVars(1, 'buscador_cli_centro_recepcion_geo_localidad_id_comparador'));
	$criterio->add('cli_centro_recepcion.domicilio', Gral::getVars(1, 'buscador_cli_centro_recepcion_domicilio'), Gral::getVars(1, 'buscador_cli_centro_recepcion_domicilio_comparador'));
	$criterio->add('cli_centro_recepcion.email', Gral::getVars(1, 'buscador_cli_centro_recepcion_email'), Gral::getVars(1, 'buscador_cli_centro_recepcion_email_comparador'));
	$criterio->add('cli_centro_recepcion.telefono', Gral::getVars(1, 'buscador_cli_centro_recepcion_telefono'), Gral::getVars(1, 'buscador_cli_centro_recepcion_telefono_comparador'));
	$criterio->add('cli_centro_recepcion.responsable', Gral::getVars(1, 'buscador_cli_centro_recepcion_responsable'), Gral::getVars(1, 'buscador_cli_centro_recepcion_responsable_comparador'));
	$criterio->add('cli_centro_recepcion.codigo_postal', Gral::getVars(1, 'buscador_cli_centro_recepcion_codigo_postal'), Gral::getVars(1, 'buscador_cli_centro_recepcion_codigo_postal_comparador'));
	$criterio->add('cli_centro_recepcion.codigo', Gral::getVars(1, 'buscador_cli_centro_recepcion_codigo'), Gral::getVars(1, 'buscador_cli_centro_recepcion_codigo_comparador'));
	$criterio->add('cli_centro_recepcion.observacion', Gral::getVars(1, 'buscador_cli_centro_recepcion_observacion'), Gral::getVars(1, 'buscador_cli_centro_recepcion_observacion_comparador'));
	$criterio->add('cli_centro_recepcion.estado', Gral::getVars(1, 'buscador_cli_centro_recepcion_estado'), Gral::getVars(1, 'buscador_cli_centro_recepcion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_cli_centro_recepcion_geo_provincia_id'), Gral::getVars(1, 'buscador_cli_centro_recepcion_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_centro_recepcion.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_cli_centro_recepcion_geo_pais_id'), Gral::getVars(1, 'buscador_cli_centro_recepcion_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_remito', 'vta_remito.cli_centro_recepcion_id', 'cli_centro_recepcion.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'vta_remito.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_remito_tipo_estado', 'vta_remito_tipo_estado.id', 'vta_remito.vta_remito_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'vta_remito.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_remito.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'vta_remito.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_remito.gral_sucursal_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_centro_recepcion');
		$criterio->setCriterios();		
}
?>

