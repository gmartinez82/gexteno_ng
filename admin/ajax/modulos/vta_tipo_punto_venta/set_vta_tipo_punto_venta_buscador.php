<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaTipoPuntoVenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_tipo_punto_venta.id', Gral::getVars(1, 'buscador_vta_tipo_punto_venta_id'), Gral::getVars(1, 'buscador_vta_tipo_punto_venta_id_comparador'));
	$criterio->add('vta_tipo_punto_venta.descripcion', Gral::getVars(1, 'buscador_vta_tipo_punto_venta_descripcion'), Gral::getVars(1, 'buscador_vta_tipo_punto_venta_descripcion_comparador'));
	$criterio->add('vta_tipo_punto_venta.codigo', Gral::getVars(1, 'buscador_vta_tipo_punto_venta_codigo'), Gral::getVars(1, 'buscador_vta_tipo_punto_venta_codigo_comparador'));
	$criterio->add('vta_tipo_punto_venta.observacion', Gral::getVars(1, 'buscador_vta_tipo_punto_venta_observacion'), Gral::getVars(1, 'buscador_vta_tipo_punto_venta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_punto_venta', 'vta_punto_venta.vta_tipo_punto_venta_id', 'vta_tipo_punto_venta.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa', 'gral_empresa.id', 'vta_punto_venta.gral_empresa_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'vta_punto_venta.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_punto_venta_actual', 'vta_punto_venta_actual.vta_tipo_punto_venta_id', 'vta_tipo_punto_venta.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_tipo_punto_venta');
		$criterio->setCriterios();		
}
?>

