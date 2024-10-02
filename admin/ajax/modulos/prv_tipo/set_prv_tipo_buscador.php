<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_tipo.id', Gral::getVars(1, 'buscador_prv_tipo_id'), Gral::getVars(1, 'buscador_prv_tipo_id_comparador'));
	$criterio->add('prv_tipo.descripcion', Gral::getVars(1, 'buscador_prv_tipo_descripcion'), Gral::getVars(1, 'buscador_prv_tipo_descripcion_comparador'));
	$criterio->add('prv_tipo.codigo', Gral::getVars(1, 'buscador_prv_tipo_codigo'), Gral::getVars(1, 'buscador_prv_tipo_codigo_comparador'));
	$criterio->add('prv_tipo.observacion', Gral::getVars(1, 'buscador_prv_tipo_observacion'), Gral::getVars(1, 'buscador_prv_tipo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.prv_tipo_id', 'prv_tipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_tipo_personeria', 'gral_tipo_personeria.id', 'prv_proveedor.gral_tipo_personeria_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_condicion_iva', 'gral_condicion_iva.id', 'prv_proveedor.gral_condicion_iva_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_localidad', 'geo_localidad.id', 'prv_proveedor.geo_localidad_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_grupo', 'prv_grupo.id', 'prv_proveedor.prv_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_categoria', 'prv_categoria.id', 'prv_proveedor.prv_categoria_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_tipo');
		$criterio->setCriterios();		
}
?>

