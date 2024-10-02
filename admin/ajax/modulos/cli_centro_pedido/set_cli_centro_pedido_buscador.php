<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliCentroPedido::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_centro_pedido.id', Gral::getVars(1, 'buscador_cli_centro_pedido_id'), Gral::getVars(1, 'buscador_cli_centro_pedido_id_comparador'));
	$criterio->add('cli_centro_pedido.descripcion', Gral::getVars(1, 'buscador_cli_centro_pedido_descripcion'), Gral::getVars(1, 'buscador_cli_centro_pedido_descripcion_comparador'));
	$criterio->add('cli_centro_pedido.cli_cliente_id', Gral::getVars(1, 'buscador_cli_centro_pedido_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_centro_pedido_cli_cliente_id_comparador'));
	$criterio->add('cli_centro_pedido.vta_comprador_id', Gral::getVars(1, 'buscador_cli_centro_pedido_vta_comprador_id'), Gral::getVars(1, 'buscador_cli_centro_pedido_vta_comprador_id_comparador'));
	$criterio->add('cli_centro_pedido.geo_localidad_id', Gral::getVars(1, 'buscador_cli_centro_pedido_geo_localidad_id'), Gral::getVars(1, 'buscador_cli_centro_pedido_geo_localidad_id_comparador'));
	$criterio->add('cli_centro_pedido.domicilio', Gral::getVars(1, 'buscador_cli_centro_pedido_domicilio'), Gral::getVars(1, 'buscador_cli_centro_pedido_domicilio_comparador'));
	$criterio->add('cli_centro_pedido.email', Gral::getVars(1, 'buscador_cli_centro_pedido_email'), Gral::getVars(1, 'buscador_cli_centro_pedido_email_comparador'));
	$criterio->add('cli_centro_pedido.telefono', Gral::getVars(1, 'buscador_cli_centro_pedido_telefono'), Gral::getVars(1, 'buscador_cli_centro_pedido_telefono_comparador'));
	$criterio->add('cli_centro_pedido.responsable', Gral::getVars(1, 'buscador_cli_centro_pedido_responsable'), Gral::getVars(1, 'buscador_cli_centro_pedido_responsable_comparador'));
	$criterio->add('cli_centro_pedido.codigo', Gral::getVars(1, 'buscador_cli_centro_pedido_codigo'), Gral::getVars(1, 'buscador_cli_centro_pedido_codigo_comparador'));
	$criterio->add('cli_centro_pedido.observacion', Gral::getVars(1, 'buscador_cli_centro_pedido_observacion'), Gral::getVars(1, 'buscador_cli_centro_pedido_observacion_comparador'));
	$criterio->add('cli_centro_pedido.estado', Gral::getVars(1, 'buscador_cli_centro_pedido_estado'), Gral::getVars(1, 'buscador_cli_centro_pedido_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_cli_centro_pedido_geo_provincia_id'), Gral::getVars(1, 'buscador_cli_centro_pedido_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_centro_pedido.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_cli_centro_pedido_geo_pais_id'), Gral::getVars(1, 'buscador_cli_centro_pedido_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_centro_pedido');
		$criterio->setCriterios();		
}
?>

