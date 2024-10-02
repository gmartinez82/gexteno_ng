<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaTipoComprador::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_tipo_comprador.id', Gral::getVars(1, 'buscador_vta_tipo_comprador_id'), Gral::getVars(1, 'buscador_vta_tipo_comprador_id_comparador'));
	$criterio->add('vta_tipo_comprador.descripcion', Gral::getVars(1, 'buscador_vta_tipo_comprador_descripcion'), Gral::getVars(1, 'buscador_vta_tipo_comprador_descripcion_comparador'));
	$criterio->add('vta_tipo_comprador.codigo', Gral::getVars(1, 'buscador_vta_tipo_comprador_codigo'), Gral::getVars(1, 'buscador_vta_tipo_comprador_codigo_comparador'));
	$criterio->add('vta_tipo_comprador.observacion', Gral::getVars(1, 'buscador_vta_tipo_comprador_observacion'), Gral::getVars(1, 'buscador_vta_tipo_comprador_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_comprador', 'vta_comprador.vta_tipo_comprador_id', 'vta_tipo_comprador.id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'vta_comprador.geo_localidad_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_tipo_comprador');
		$criterio->setCriterios();		
}
?>

