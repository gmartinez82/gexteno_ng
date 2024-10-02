<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCentroCostoPrvProveedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_centro_costo_prv_proveedor.id', Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_id'), Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_id_comparador'));
	$criterio->add('gral_centro_costo_prv_proveedor.descripcion', Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_descripcion'), Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_descripcion_comparador'));
	$criterio->add('gral_centro_costo_prv_proveedor.gral_centro_costo_id', Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_gral_centro_costo_id'), Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_gral_centro_costo_id_comparador'));
	$criterio->add('gral_centro_costo_prv_proveedor.prv_proveedor_id', Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_prv_proveedor_id'), Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_prv_proveedor_id_comparador'));
	$criterio->add('gral_centro_costo_prv_proveedor.codigo', Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_codigo'), Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_codigo_comparador'));
	$criterio->add('gral_centro_costo_prv_proveedor.observacion', Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_observacion'), Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_observacion_comparador'));
	$criterio->add('gral_centro_costo_prv_proveedor.estado', Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_estado'), Gral::getVars(1, 'buscador_gral_centro_costo_prv_proveedor_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_centro_costo_prv_proveedor');
		$criterio->setCriterios();		
}
?>

