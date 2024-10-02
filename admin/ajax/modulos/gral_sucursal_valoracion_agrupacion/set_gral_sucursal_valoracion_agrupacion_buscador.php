<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralSucursalValoracionAgrupacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_sucursal_valoracion_agrupacion.id', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_id'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_id_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.descripcion', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_descripcion'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_descripcion_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.apellido', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_apellido'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_apellido_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.nombre', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_nombre'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_nombre_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.email', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_email'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_email_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.telefono', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_telefono'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_telefono_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_fecha')), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_fecha_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.gral_sucursal_id', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_gral_sucursal_id'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_gral_sucursal_id_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.valoracion', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_valoracion'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_valoracion_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.cli_cliente_id', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_cli_cliente_id'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_cli_cliente_id_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.session', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_session'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_session_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.navegador', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_navegador'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_navegador_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.ip', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_ip'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_ip_comparador'));
	$criterio->add('gral_sucursal_valoracion_agrupacion.observacion', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_observacion'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_agrupacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal_valoracion', 'gral_sucursal_valoracion.gral_sucursal_valoracion_agrupacion_id', 'gral_sucursal_valoracion_agrupacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal_valoracion_tipo_item', 'gral_sucursal_valoracion_tipo_item.id', 'gral_sucursal_valoracion.gral_sucursal_valoracion_tipo_item_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_valoracion.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'gral_sucursal_valoracion.cli_cliente_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_sucursal_valoracion_agrupacion');
		$criterio->setCriterios();		
}
?>

