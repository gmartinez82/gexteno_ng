<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliTipoCliente::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_tipo_cliente.id', Gral::getVars(1, 'buscador_cli_tipo_cliente_id'), Gral::getVars(1, 'buscador_cli_tipo_cliente_id_comparador'));
	$criterio->add('cli_tipo_cliente.descripcion', Gral::getVars(1, 'buscador_cli_tipo_cliente_descripcion'), Gral::getVars(1, 'buscador_cli_tipo_cliente_descripcion_comparador'));
	$criterio->add('cli_tipo_cliente.codigo', Gral::getVars(1, 'buscador_cli_tipo_cliente_codigo'), Gral::getVars(1, 'buscador_cli_tipo_cliente_codigo_comparador'));
	$criterio->add('cli_tipo_cliente.observacion', Gral::getVars(1, 'buscador_cli_tipo_cliente_observacion'), Gral::getVars(1, 'buscador_cli_tipo_cliente_observacion_comparador'));
	$criterio->add('cli_tipo_cliente.estado', Gral::getVars(1, 'buscador_cli_tipo_cliente_estado'), Gral::getVars(1, 'buscador_cli_tipo_cliente_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.cli_tipo_cliente_id', 'cli_tipo_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'cli_cliente.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'cli_cliente.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_documento', 'gral_tipo_documento.id', 'cli_cliente.gral_tipo_documento_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_zona', 'geo_zona.id', 'cli_cliente.geo_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_grupo', 'cli_grupo.id', 'cli_cliente.cli_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'cli_cliente.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_categoria', 'cli_categoria.id', 'cli_cliente.cli_categoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_subcategoria', 'cli_subcategoria.id', 'cli_cliente.cli_subcategoria_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_gestion', 'cli_cliente_tipo_gestion.id', 'cli_cliente.cli_cliente_tipo_gestion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_periodicidad_gestion', 'cli_cliente_periodicidad_gestion.id', 'cli_cliente.cli_cliente_periodicidad_gestion_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado', 'cli_cliente_tipo_estado.id', 'cli_cliente.cli_cliente_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_venta', 'cli_cliente_tipo_estado_venta.id', 'cli_cliente.cli_cliente_tipo_estado_venta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cobro', 'cli_cliente_tipo_estado_cobro.id', 'cli_cliente.cli_cliente_tipo_estado_cobro_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_cuenta', 'cli_cliente_tipo_estado_cuenta.id', 'cli_cliente.cli_cliente_tipo_estado_cuenta_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tipo_estado_satisfaccion', 'cli_cliente_tipo_estado_satisfaccion.id', 'cli_cliente.cli_cliente_tipo_estado_satisfaccion_id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_operacion_cli_tipo_cliente', 'eku_param_tipo_operacion_cli_tipo_cliente.cli_tipo_cliente_id', 'cli_tipo_cliente.id', 'LEFT JOIN');
	$criterio->addRealJoin('eku_param_tipo_operacion', 'eku_param_tipo_operacion.id', 'eku_param_tipo_operacion_cli_tipo_cliente.eku_param_tipo_operacion_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_tipo_cliente');
		$criterio->setCriterios();		
}
?>

