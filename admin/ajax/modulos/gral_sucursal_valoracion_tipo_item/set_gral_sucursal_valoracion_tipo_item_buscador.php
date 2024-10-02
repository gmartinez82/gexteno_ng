<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralSucursalValoracionTipoItem::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_sucursal_valoracion_tipo_item.id', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_id'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_id_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.descripcion', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_descripcion'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_descripcion_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.descripcion_corta', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_descripcion_corta'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_descripcion_corta_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.descripcion_publica', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_descripcion_publica'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_descripcion_publica_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.color', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_color'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_color_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.color_secundario', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_color_secundario'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_color_secundario_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.codigo', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_codigo'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_codigo_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.observacion', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_observacion'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_observacion_comparador'));
	$criterio->add('gral_sucursal_valoracion_tipo_item.estado', Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_estado'), Gral::getVars(1, 'buscador_gral_sucursal_valoracion_tipo_item_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('gral_sucursal_valoracion', 'gral_sucursal_valoracion.gral_sucursal_valoracion_tipo_item_id', 'gral_sucursal_valoracion_tipo_item.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal_valoracion_agrupacion', 'gral_sucursal_valoracion_agrupacion.id', 'gral_sucursal_valoracion.gral_sucursal_valoracion_agrupacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_valoracion.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'gral_sucursal_valoracion.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal_valoracion_tipo_item_gral_sucursal', 'gral_sucursal_valoracion_tipo_item_gral_sucursal.gral_sucursal_valoracion_tipo_item_id', 'gral_sucursal_valoracion_tipo_item.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_sucursal_valoracion_tipo_item');
		$criterio->setCriterios();		
}
?>

