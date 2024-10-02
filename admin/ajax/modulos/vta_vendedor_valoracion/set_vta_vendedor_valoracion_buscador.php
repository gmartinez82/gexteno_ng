<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaVendedorValoracion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_vendedor_valoracion.id', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_id'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_id_comparador'));
	$criterio->add('vta_vendedor_valoracion.descripcion', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_descripcion'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_descripcion_comparador'));
	$criterio->add('vta_vendedor_valoracion.vta_vendedor_valoracion_agrupacion_id', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_vta_vendedor_valoracion_agrupacion_id'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_vta_vendedor_valoracion_agrupacion_id_comparador'));
	$criterio->add('vta_vendedor_valoracion.vta_vendedor_valoracion_tipo_item_id', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_vta_vendedor_valoracion_tipo_item_id'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_vta_vendedor_valoracion_tipo_item_id_comparador'));
	$criterio->add('vta_vendedor_valoracion.apellido', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_apellido'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_apellido_comparador'));
	$criterio->add('vta_vendedor_valoracion.nombre', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_nombre'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_nombre_comparador'));
	$criterio->add('vta_vendedor_valoracion.email', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_email'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_email_comparador'));
	$criterio->add('vta_vendedor_valoracion.telefono', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_telefono'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_telefono_comparador'));
	$criterio->add('vta_vendedor_valoracion.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_vta_vendedor_valoracion_fecha')), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_fecha_comparador'));
	$criterio->add('vta_vendedor_valoracion.vta_vendedor_id', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_vta_vendedor_id'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_vta_vendedor_id_comparador'));
	$criterio->add('vta_vendedor_valoracion.valoracion', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_valoracion'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_valoracion_comparador'));
	$criterio->add('vta_vendedor_valoracion.cli_cliente_id', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_cli_cliente_id'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_cli_cliente_id_comparador'));
	$criterio->add('vta_vendedor_valoracion.session', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_session'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_session_comparador'));
	$criterio->add('vta_vendedor_valoracion.navegador', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_navegador'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_navegador_comparador'));
	$criterio->add('vta_vendedor_valoracion.ip', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_ip'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_ip_comparador'));
	$criterio->add('vta_vendedor_valoracion.observacion', Gral::getVars(1, 'buscador_vta_vendedor_valoracion_observacion'), Gral::getVars(1, 'buscador_vta_vendedor_valoracion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_vendedor_valoracion');
		$criterio->setCriterios();		
}
?>

