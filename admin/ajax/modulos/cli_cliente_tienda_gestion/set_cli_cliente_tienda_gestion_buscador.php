<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteTienda::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_tienda.id', Gral::getVars(1, 'buscador_cli_cliente_tienda_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_id_comparador'));
	$criterio->add('cli_cliente_tienda.descripcion', Gral::getVars(1, 'buscador_cli_cliente_tienda_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_tienda_descripcion_comparador'));
	$criterio->add('cli_cliente_tienda.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_tienda_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_tienda.gral_tipo_personeria_id', Gral::getVars(1, 'buscador_cli_cliente_tienda_gral_tipo_personeria_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_gral_tipo_personeria_id_comparador'));
	$criterio->add('cli_cliente_tienda.gral_condicion_iva_id', Gral::getVars(1, 'buscador_cli_cliente_tienda_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_gral_condicion_iva_id_comparador'));
	$criterio->add('cli_cliente_tienda.nombre', Gral::getVars(1, 'buscador_cli_cliente_tienda_nombre'), Gral::getVars(1, 'buscador_cli_cliente_tienda_nombre_comparador'));
	$criterio->add('cli_cliente_tienda.apellido', Gral::getVars(1, 'buscador_cli_cliente_tienda_apellido'), Gral::getVars(1, 'buscador_cli_cliente_tienda_apellido_comparador'));
	$criterio->add('cli_cliente_tienda.razon_social', Gral::getVars(1, 'buscador_cli_cliente_tienda_razon_social'), Gral::getVars(1, 'buscador_cli_cliente_tienda_razon_social_comparador'));
	$criterio->add('cli_cliente_tienda.gral_tipo_documento_id', Gral::getVars(1, 'buscador_cli_cliente_tienda_gral_tipo_documento_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_gral_tipo_documento_id_comparador'));
	$criterio->add('cli_cliente_tienda.cuit', Gral::getVars(1, 'buscador_cli_cliente_tienda_cuit'), Gral::getVars(1, 'buscador_cli_cliente_tienda_cuit_comparador'));
	$criterio->add('cli_cliente_tienda.domicilio_legal', Gral::getVars(1, 'buscador_cli_cliente_tienda_domicilio_legal'), Gral::getVars(1, 'buscador_cli_cliente_tienda_domicilio_legal_comparador'));
	$criterio->add('cli_cliente_tienda.telefono', Gral::getVars(1, 'buscador_cli_cliente_tienda_telefono'), Gral::getVars(1, 'buscador_cli_cliente_tienda_telefono_comparador'));
	$criterio->add('cli_cliente_tienda.telefono_whatsapp', Gral::getVars(1, 'buscador_cli_cliente_tienda_telefono_whatsapp'), Gral::getVars(1, 'buscador_cli_cliente_tienda_telefono_whatsapp_comparador'));
	$criterio->add('cli_cliente_tienda.email', Gral::getVars(1, 'buscador_cli_cliente_tienda_email'), Gral::getVars(1, 'buscador_cli_cliente_tienda_email_comparador'));
	$criterio->add('cli_cliente_tienda.codigo_postal', Gral::getVars(1, 'buscador_cli_cliente_tienda_codigo_postal'), Gral::getVars(1, 'buscador_cli_cliente_tienda_codigo_postal_comparador'));
	$criterio->add('cli_cliente_tienda.geo_localidad_id', Gral::getVars(1, 'buscador_cli_cliente_tienda_geo_localidad_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_geo_localidad_id_comparador'));
	$criterio->add('cli_cliente_tienda.codigo', Gral::getVars(1, 'buscador_cli_cliente_tienda_codigo'), Gral::getVars(1, 'buscador_cli_cliente_tienda_codigo_comparador'));
	$criterio->add('cli_cliente_tienda.usuario', Gral::getVars(1, 'buscador_cli_cliente_tienda_usuario'), Gral::getVars(1, 'buscador_cli_cliente_tienda_usuario_comparador'));
	$criterio->add('cli_cliente_tienda.verificar', Gral::getVars(1, 'buscador_cli_cliente_tienda_verificar'), Gral::getVars(1, 'buscador_cli_cliente_tienda_verificar_comparador'));
	$criterio->add('cli_cliente_tienda.observacion', Gral::getVars(1, 'buscador_cli_cliente_tienda_observacion'), Gral::getVars(1, 'buscador_cli_cliente_tienda_observacion_comparador'));
	$criterio->add('cli_cliente_tienda.estado', Gral::getVars(1, 'buscador_cli_cliente_tienda_estado'), Gral::getVars(1, 'buscador_cli_cliente_tienda_estado_comparador'));
	
	// criterios agregados por dependencias
	
	$criterio->add('geo_localidad.geo_provincia_id', Gral::getVars(1, 'buscador_cli_cliente_tienda_geo_provincia_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_geo_provincia_id_comparador'));
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'cli_cliente_tienda.geo_localidad_id', 'LEFT JOIN');
	
	
	$criterio->add('geo_provincia.geo_pais_id', Gral::getVars(1, 'buscador_cli_cliente_tienda_geo_pais_id'), Gral::getVars(1, 'buscador_cli_cliente_tienda_geo_pais_id_comparador'));
	$criterio->addRealJoin('geo_provincia', 'geo_provincia.id', 'geo_localidad.geo_provincia_id', 'LEFT JOIN');
	
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_presupuesto_cli_cliente_tienda', 'vta_presupuesto_cli_cliente_tienda.cli_cliente_tienda_id', 'cli_cliente_tienda.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_cli_cliente_tienda.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_mensaje', 'vta_presupuesto_mensaje.cli_cliente_tienda_id', 'cli_cliente_tienda.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario', 'us_usuario.id', 'vta_presupuesto_mensaje.us_usuario_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_valoracion', 'vta_presupuesto_valoracion.cli_cliente_tienda_id', 'cli_cliente_tienda.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda_clave', 'cli_cliente_tienda_clave.cli_cliente_tienda_id', 'cli_cliente_tienda.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_cliente_tienda_clave.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda_login', 'cli_cliente_tienda_login.cli_cliente_tienda_id', 'cli_cliente_tienda.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda_navegacion', 'cli_cliente_tienda_navegacion.cli_cliente_tienda_id', 'cli_cliente_tienda.id', 'LEFT JOIN');
	$criterio->addRealJoin('tnd_tienda_busqueda', 'tnd_tienda_busqueda.cli_cliente_tienda_id', 'cli_cliente_tienda.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_tienda');
		$criterio->setCriterios();		
}
?>

